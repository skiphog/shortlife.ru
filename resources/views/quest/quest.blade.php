<?php
/**
 * @var \App\Question $quest
 */
?>
@extends('layouts.app')

@section('content')

    <form class="motto" id="quest" action="{{ route('post') }}" method="post">

        <h3>{{ $quest->title }}</h3>

        {!! $quest->content !!}

        <p>
            Игра закончилась. Идет подведение итогов :)
        </p>

    </form>

@endsection

@include('errors.list')
@include('messages.flash')