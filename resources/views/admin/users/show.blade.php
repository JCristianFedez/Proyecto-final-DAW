@extends('layouts.plantilla')

@section('content')
    <h1>I'm an user show</h1>
    <p>Mi name is {{$user->name}}</p>
    <a href="{{route("users.edit",$user)}}">Editar usuario</a>
    <br>
    <form action="{{route("users.destroy",$user)}}" method="POST">
        @csrf
        @method("delete")
        <button type="sumbit">Eliminar</button>
    </form>
    <br>
    <a href="{{route("users.index")}}">Volver a crud</a>

@endsection

{{-- Se puede usar $user->id o $user --}}