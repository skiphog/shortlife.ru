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

        <input type="hidden" name="question_id" value="{{ $quest->id }}">
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <input type="text" name="post" placeholder="Введите ответ" class="form-control">
                </div>
            </div>
        </div>

        {{ csrf_field() }}

        <div class="form-group">
            <button type="submit" class="btn btn-fill btn-danger">Ответить</button>
        </div>

    </form>

@endsection

@push('scripts')

@endpush