@extends('layouts.master')
@section('title', "Авторизация")
@section('content')
<div class="row">
    {!! Form::model($user, ['action'=>'\App\Http\Controllers\UserController@store', 'class'=>'col-6']) !!}
    <div class="form-group">
        {!! Form::label('login', 'Логин:') !!}
        {!! Form::text('login', '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Пароль:') !!}
        {!! Form::text('password', '', ['class' => 'form-control']) !!}
    </div>
    {{-- <div class="form-group">
        {!! Form::label('filePath', 'Файл:') !!}
        {!! Form::file('filePath', ['class' => 'form-control', 'accept' => ".txt"]) !!}
    </div> --}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <button class="btn btn-success" type="submit">Войти</button>
    {!! Form::close() !!}
</div>
@endsection