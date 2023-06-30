@extends('layout')

@section('title'){{$season->title}}@endsection

@section('main_content')

    <h1>{{ $season->title }}</h1><br>
    <p>Сезони: </p>
    <div>
        <ul>
            @foreach ($season->air as $air)
                <li><a href="{{route('one-air', $air->id)}}" class="nav-link px-2 ">{{$air->title}}</a></li>
            @endforeach
        </ul>
    </div>

@endsection
