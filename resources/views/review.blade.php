@extends('layout')

@section('title')Відгуки@endsection

@section('main_content')
    <h1>Форма для вашого надважливого відгука!</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Напишіть email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Напишіть тему" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Напишіть відгук"></textarea><br>
        <button type="submit" class="btn btn-success">Надіслати</button>
    </form>
    <br>

    <h1>Всі відгуки користувачів</h1>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h3>{{$el->subject}}</h3>
            <b>{{$el->email}}</b>
            <p>{{$el->message}}</p>
        </div>
    @endforeach

@endsection
