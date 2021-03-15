@extends('layouts.plantilla')

@section('content')
    <h1>I'm Crud</h1>
    <a href="{{route("users.create")}}">Crear curso</a>
    <ul>
        @foreach ($users as $us)
            <li>
                <a href="{{route("users.show", $us)}}">{{$us->name}}</a>
            </li>

        @endforeach
    </ul>

    {{$users->links()}}
@endsection