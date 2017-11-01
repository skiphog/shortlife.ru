<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('quest');
    }

    public function index()
    {
        return view('layouts.app');
    }
}
