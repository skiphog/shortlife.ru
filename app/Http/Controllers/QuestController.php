<?php

namespace App\Http\Controllers;

use App\Member;
use App\Attempt;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;

class QuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('quest');
    }

    public function index(Request $request)
    {
        $quest_id = Member::where('token', $request->cookie('token'))
            ->value('question_id') ?: 1;

        return view('quest.index', [
            'quest' => Question::findOrFail($quest_id)
        ]);
    }

    public function post(QuestionRequest $request)
    {
        $this->addAttempts($request);

        $question = Question::find($request->input('question_id'));

        if ($question->answer !== $this->replace($request->input('post'))) {
            return response()->json(['error' => 'Неверный ответ', 'code' => 422], 422);
        }



        return response()->json($question);
    }

    /**
     * @todo Убрать в Entity
     *
     * @param QuestionRequest $request
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    private function addAttempts(QuestionRequest $request)
    {
        $member = Member::where('token', $request->cookie('token'))->firstOrFail();

        $request->request->set('member_id', $member->id);

        Attempt::create($request->all());
    }

    /**
     * @todo Убрать в спомогательные методы
     *
     * @param $string
     *
     * @return string
     */
    private function replace($string): string
    {
        return mb_strtolower(preg_replace('#[^A-zА-я0-9]#u', '', $string));
    }
}
