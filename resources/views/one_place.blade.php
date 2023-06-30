@extends('layout')

@section('title'){{$place->name}}@endsection

@section('main_content')
    <h1>{{ $place->name }}</h1><br>
    <p>Комплекти повітря з цього місця: </p>
    <div>
        <ul>
            @foreach ($place->air as $air)
                <li><a href="{{route('one-air', $air->id)}}" class="nav-link px-2 ">{{$air->title}}</a></li>
            @endforeach
        </ul>
    </div>

@endsection
