@extends('admin.layouts.plantilla')

@section('content')
    <h1>I'm an user show</h1>
    <p>Mi name is {{$user->name}}</p>
    <a href="{{route("users.index")}}">Volver a crud</a>

@endsection