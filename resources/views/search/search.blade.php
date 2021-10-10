@extends('layouts.master')
@section('title', "Поиск")
@section('content')
    <div class="row">
        <div>
            <h3>Поиск: {{Request::get('searchText')}}</h3>
        </div>
    </div>
@endsection