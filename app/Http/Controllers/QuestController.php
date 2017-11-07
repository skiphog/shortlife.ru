<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Member;
use App\Question;
use Illuminate\Http\Request;
use App\Services\AttemptService;
use App\Http\Requests\QuestionRequest;

class QuestController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('quest.no');
    }

    public function index(Request $request)
    {
        $member = Member::where('token', $request->cookie('token'))->firstOrFail();

        $answers = Answer::where('member_id', $member->id)
            ->get()
            ->pluck('question_id')
            ->toArray();

        dd($answers);

        $quest = Question::whereNotIn('id', $answers ?: [0])->orderBy('id')->firstOrFail();

        return view('quest.quest', compact('quest'));
    }

    public function post(QuestionRequest $request, AttemptService $service)
    {
        /**
         * 1. Добавить запись об ответе [X]
         * 2. todo: Проверить результат и в случае неверного ответа отправить ошибку
         * 3. todo: Пометить, что ответ верный
         * 4. todo: Показать следующий вывод
         * 5. todo: Все передалть НАХ!!!
         */


        $member = Member::where('token', $request->cookie('token'))->firstOrFail();
        $service->saveAttempt($request, $member->id);


        $question = Question::find($request->input('question_id'));

        // Если уже есть верный ответ -> редирект на гланую

        if ($question->answer !== replaceSymbols($request->input('post'))) {
            return redirect()->route('/');
        }


        // Проверить есть ли еще вопросы, если нет, то показать форму для получения логина


        return response()->json($question);
    }
}
