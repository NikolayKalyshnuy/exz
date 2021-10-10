@extends('layouts.master')
@section('title', "Инструкции для техники")
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    tr:not(:nth-child(1)) {
        cursor: pointer;
    }
    tr, th, td {
        text-align: center;
    }
    tr:nth-child(odd){
        background: lightgrey;
    }

    .row {
        padding-bottom: 10px;
        padding-top: 10px;
    }
</style>
@section('content')
    <div class="row">
        <div class="col-12">
            <table cellpadding="5"  cellspacing="0">
                <tr class="bg-secondary">
                    <th>№</th>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Автор</th>
                    <th>Файл</th>
                </tr>    
                @foreach ($instructions as $instruction)
                    <tr onclick="document.location = '{{ asset('') }}';" >
                        <td>{{ $instruction->id }}</td>
                        <td>{{ $instruction->name }}</td>
                        <td>{{ $instruction->description }}</td>
                        <td>{{ $users[$instruction->userId] }}</td>
                        <td>{{ $instruction->filePath }}</td>
                    </tr> 
                @endforeach
            </table>
        </div>
    </div>
    @if (true)
        <div class="row">
            <div class="col-12 text-center">
                <button class="btn btn-success">Добавить инструкцию</button>
            </div>
        </div>
    @endif
@endsection