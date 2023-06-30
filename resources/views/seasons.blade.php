@extends('layout')

@section('title')Сезони@endsection

@section('main_content')
    <h1>Сезони</h1><br>
    <div>
        <ul>
            @if($seasons)
                @foreach($seasons as $season)
                    <li><a href="{{route('one-season', $season->id)}}" class="nav-link px-2 ">{{$season->title}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>

@endsection
