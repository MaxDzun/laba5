@extends('layout')

@section('title'){{$air->title}}@endsection

@section('main_content')
    <h1>{{$air->title}}</h1><br>
    <p><strong>Місце:</strong> <a href="{{route('one-place', $air->place_id)}}" class="nav-link">{{$air->place->name}}</a></p>
    <div class="row">
        <div class="col-8">
            <p>{{$air->description}}</p>
        </div>
    </div>

    <div>
        <p><strong>Сезони аромату:</strong></p>
        <ul>
            @foreach($air->season as $season)
                <li><a href="{{route('one-season',$season->id)}}" class="nav-link px-2 ">{{$season->title}}</a></li>
            @endforeach
        </ul>
    </div>

@endsection
