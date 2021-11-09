@extends('layout.plantilla')

@section('title', 'Crear')

@section('content')
<h1>Crea un curso nuevo</h1>

<form action="{{route('cursos.store')}}" method="POST">

    @csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <label>
        Descripcion:
        <br>
        <textarea name="descripcion" rows="6">{{old('descripcion')}}</textarea>
    </label>

    @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>

    @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <button type="submit">CREAR</button>
</form>

@endsection