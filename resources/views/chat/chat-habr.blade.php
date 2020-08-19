@extends('layouts.app')

{{-- Todo Bootstrap - Dropdown (выпадающий список) https://itchief.ru/lessons/bootstrap-3/98-bootstrap-3-dropdown-lists--}}
{{-- Todo Проверить Подключение Bootstrap скриптов --}}

@section('content')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>

@endsection
@section('habr')

    <div id="app" class="container">
        <h1>{{ product }} Name</h1>
    </div>

@endsection




