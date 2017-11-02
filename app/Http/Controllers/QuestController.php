<?php

namespace App\Http\Controllers;

use App\Member;
use App\Question;
use Illuminate\Http\Request;
use App\Service\AttemptService;
use App\Http\Requests\QuestionRequest;

class QuestController extends Controller
{
    /**
     * @var Member
     */
    protected $member;

    public function __construct(Request $request)
    {
        $this->middleware('quest');
        $this->member = Member::where('token', $request->cookie('token'))->first();
    }

    public function index()
    {
        $quest = Question::findOrFail($this->member->question_id ?? 1);

        return view('quest.index', compact('quest'));
    }

    public function post(QuestionRequest $request, AttemptService $service)
    {
        /**
         * 1. Добавить запись об ответе [X]
         * 2. todo: Проверить результат и в случае неверного ответа отправить ошибку
         * 3. todo: Пометить, что ответ верный
         * 4. todo: Показать следующий вывод
         */

        $service->saveAttempt($request, $this->member->id);

        $question = Question::find($request->input('question_id'));

        //todo: привезти к дному знаменателю
        if ($question->answer !== replaceSymbols($request->input('post'))) {
            return response()->json(['error' => 'Неверный ответ', 'code' => 422], 422);
        }

        // Проверить есть ли еще вопросы, если нет, то показать форму для получения логина


        return response()->json($question);
    }
}
