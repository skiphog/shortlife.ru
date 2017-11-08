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

        <div class="text-center">
            <blockquote>
                <p>Люблю измену, но не изменников.</p>
                <small>Сказал Великий человек</small>
            </blockquote>

            <blockquote>
                <p>Фелрё кргнспфхег рг Фелрё-нлфнз. 10 озх сдэзжлрвзп фелрёзусе!</p>
                <small>Так бы он сказал, если бы хотел, что бы поняли только те, кто в теме ...</small>
            </blockquote>

            <p>Что это значит?</p>
        </div>

        <input type="hidden" name="question_id" value="{{ $quest->id }}">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <input type="text" name="post" placeholder="Введите ответ"
                            class="form-control" value="{{ old('post') }}" required>
                </div>
            </div>
        </div>

        {{ csrf_field() }}

        <div class="form-group">
            <button type="submit" class="btn btn-fill btn-primary">Ответить</button>
        </div>

    </form>

@endsection

@include('errors.list')
@include('messages.flash')