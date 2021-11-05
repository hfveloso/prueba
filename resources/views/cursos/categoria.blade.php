@extends('layout.plantilla')

@section('title', 'Curso: '.$curso.' '.$categoria)
    
@section('content')
<h1>Bienvenido al curso: {{$curso}} de la categoria {{$categoria}}</h1>
@endsection
