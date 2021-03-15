@extends('layouts.plantilla')

@section('content')
    <h1>I'm an user Editor</h1>
    <a href="{{route("users.index")}}">Volver a crud</a>
    <form action="{{route("users.update", $user)}}" method="POST">

        @csrf

        @method("put")

        <label>
            Nombre: 
            <input type="text" name="name" value="{{old("name",$user->name)}}">
        </label>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>

        <label>
            Email: 
            <input type="email" name="email" value="{{old("email",$user->email)}}">
        </label>
        @error('email')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>

        <label>
            Password: 
            <input type="password" name="password" value="{{old("password",$user->password)}}">
        </label>
        @error('password')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>

        {{-- Faltaria avatar --}}

        <input type="submit" value="Modificar">
    </form>
@endsection