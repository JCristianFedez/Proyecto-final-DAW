<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
    {{-- Favicon --}}
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    {{-- Styles --}}
    <title>PlaySafe</title>
</head>
<body>

    @include('layouts/partials/header')


    @yield('content')

    @include('layouts/partials/footer')

    {{-- Script --}}

</body>
</html>

{{-- TODO: Agregar partes comentadas --}}