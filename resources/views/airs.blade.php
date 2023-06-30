@extends('layout')

@section('title')Комплекти повітря@endsection

@section('main_content')
    <h1>Комплекти повітря</h1><br>
    <div>
        <ul>
            @if($airs)
                @foreach($airs as $air)
                    <li><a href="{{route('one-air',$air->id)}}" class="nav-link px-2 ">{{$air->title}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>

@endsection
