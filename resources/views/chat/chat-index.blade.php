@extends('layouts.chat')


@section('content')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

      Вы вошли в систему!
    </div>
    <div id="app">

        <chat-component></chat-component>
    </div>
@endsection
