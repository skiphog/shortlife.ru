<?php
/**
 * @var \App\Question $quest
 */
?>
@extends('layouts.app')

@section('content')

    <form class="motto" id="quest" action="{{ route('post') }}" method="post">

        <h3>Игра закончилась. Идет подведение итогов :)</h3>

    </form>

@endsection

@include('errors.list')
@include('messages.flash')