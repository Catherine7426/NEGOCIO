@extends('layouts.plantilla')

@section('title','Productos Create')

@section('content')
    <h1>En esta página podras crear productos  </h1>

    <form action=" {{route('productos.store')}}" method="post">

         @csrf {{--input oculto (token) SEGURIDAD   --}}

         <ul>
            @foreach ($errors-> all() as $error)
                <li>{{$error}}</li>
            @endforeach
         </ul>

        <label >
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label >
            Descripción
            <br>
            <textarea name="description"  rows="5"></textarea>
        </label>

        <br>
         <label >
            Costo:
            <br>
            <input type="number"name="cost">
        </label>

        <br>
         <label >
            Precio:
            <br>
            <input type="number"name="price">
        </label>

        <br>
         <label >
            Cantidad:
            <br>
            <input type="number"name="quantity">
        </label>
        <br>
        <br>


        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
