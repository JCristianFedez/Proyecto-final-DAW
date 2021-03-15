@extends('layouts.plantilla')

@section('content')
    <h1>I'm an user Creator</h1>
    <a href="{{route("users.index")}}">Volver a crud</a>
    <form action="{{route("users.store")}}" method="POST">

        @csrf

        <label>
            Nombre: 
            <input type="text" name="name" value="{{old("name")}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label>
            Correo Electronico: 
            <input type="email" name="email"  value="{{old("email")}}">
        </label>
        @error('email')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>

        <label>
            Contraseña: 
            <input type="password" name="password"  value="{{old("password")}}">
        </label>
        @error('password')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>

        {{-- Faltaria avatar --}}

        <input type="submit" value="Guardar">
    </form>
@endsection