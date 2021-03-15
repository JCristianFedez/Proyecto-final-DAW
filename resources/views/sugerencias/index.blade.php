@extends('layouts.plantilla')

@section('content')
    <h1>Sugerencias</h1>
    
    <form action="{{route("sugerencias.store")}}" method="POST">
        @csrf
        
        <label>
            Nombre:
            <input type="text" name="name" value="{{old("name")}}">
        </label>
        @error('name')
            <p><small>{{$message}}</small></p>
        @enderror
        <br>

        <label>
            Correo:
            <input type="email" name="email" value="{{old("email")}}">
        </label>
        @error('email')
        <p><small>{{$message}}</small></p>
        @enderror
        <br>

        <label>
            Sugerencia:
            <br>
            <textarea name="suggestion" rows="4">{{old("suggestion")}}</textarea>
        </label>
        @error('suggestion')
        <p><small>{{$message}}</small></p>
        @enderror
        <br>

        <button type="submit">Enviar Mensaje</button>
    </form>

    @if (session("info"))
        <script>alert("{{session('info')}}")</script>
    @endif
@endsection