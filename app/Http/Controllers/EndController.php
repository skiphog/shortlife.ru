<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    public function store()
    {

    }
}
