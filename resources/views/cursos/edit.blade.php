@extends('layout.plantilla')

@section('title', 'Cursos Edit')
    
@section('content')
<h1>Actualiza el curso {{$curso->name}}</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">

    @csrf

    @method('put')

    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name', $curso->name)}}">
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
        <textarea name="descripcion" rows="6">{{old('descripcion', $curso->descripcion)}}</textarea>
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
        <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
    </label>

    @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror

    <br>
    <button type="submit">Actualizar</button>
</form>

@endsection