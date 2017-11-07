<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Member;
use App\Attempt;
use App\Question;
use Carbon\Carbon;
use App\Http\Requests\QuestionRequest;

class QuestController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('quest.no');
    }

    /**
     * Толстый и уродливый контроллер
     *
     * @param Member $member
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Member $member)
    {
        $answers = Answer::where('member_id', $member->id)
            ->get()
            ->pluck('question_id')
            ->toArray();

        $quest = Question::whereNotIn('id', $answers ?: [0])->orderBy('id')->firstOrFail();

        return view('quest.quest', compact('quest'));
    }

    /**
     * Толстый и уродливый контроллер
     *
     * @param QuestionRequest $request
     * @param Member          $member
     *
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function post(QuestionRequest $request, Member $member)
    {
        $request->request->set('member_id', $member->id);

        //Записываем ответ в лог
        Attempt::create($request->all());

        //Если уже есть парвильный ответ, то редирект обратно
        if (Answer::where(['member_id' => $member->id, 'question_id' => $request->input('question_id')])->count()) {
            return redirect()->route('/');
        }

        // Получаем вопрос
        $question = Question::find($request->input('question_id'));

        // Если ответ неверный, то редирект с ошибкой
        if ($question->answer !== replaceSymbols($request->input('post'))) {
            return redirect()->route('/')
                ->withInput()
                ->withErrors(['Неправильный ответ']);
        }

        // Заносим сведение о том, что ответ верный
        Answer::create($request->all());

        if (Question::count() === Answer::where('member_id', $member->id)->count()) {
            $member->finished_at = Carbon::now();
            $member->save();
            return redirect()->route('login')->with('flash', 'ПОБЕДА!!!');
        }

        return redirect()->route('/')->with('flash', 'Это правильный ответ');
    }
}
