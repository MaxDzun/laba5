@extends('layout')

@section('title')Місця@endsection

@section('main_content')

    <h1>Місця</h1><br>
    <div>
        <ul>
            @if($places)
                @foreach($places as $place)
                    <li><a href="{{route('one-place', $place->id)}}" class="nav-link px-2 ">{{$place->name}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>

@endsection
