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
        // Проверка совпадения


        return response()->json($request->post());
    }
}
