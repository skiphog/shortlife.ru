@extends('layouts.app')

@section('content')

    <form class="motto" id="quest" action="{{ route('store') }}" method="post">
        <h3>Поздравляем !!!</h3>

        <p>Вы победили</p>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <input type="text" name="login" placeholder="Введите логин" class="form-control" {{ old('login') }}>
                </div>
            </div>
        </div>

        {{ csrf_field() }}

        <div class="form-group">
            <button type="submit" class="btn btn-fill btn-danger">Ввести</button>
        </div>

    </form>

@endsection

@include('errors.list')
@include('messages.flash')