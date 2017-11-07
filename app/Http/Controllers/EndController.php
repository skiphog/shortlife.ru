<?php

namespace App\Http\Controllers;

use App\Member;
use App\Http\Requests\LoginRequest;

class EndController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('quest.login')->only('login');
        $this->middleware('quest.finish')->only('finish');
    }

    public function login()
    {
        return view('quest.login');
    }

    public function finish()
    {
        return view('quest.finish');
    }

    /**
     * @param LoginRequest $request
     * @param Member       $member
     *
     * @return mixed
     */
    public function store(LoginRequest $request, Member $member)
    {
        $member->login = $request->input('login');
        $member->save();

        return redirect()->route('finish')->with('flash', 'Ваш логин записан');
    }
}
