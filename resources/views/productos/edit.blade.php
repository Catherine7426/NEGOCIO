@extends('layouts.plantilla')

@section('title','Editar Productos')

@section('content')
    <h1>En esta página podras Editar el producto : {{$producto->name}}   </h1>

    <form action="{{route ('productos.update', $producto)}}" method="POST">

         @csrf {{--input oculto (token) --}}
         @method('put') {{--HTML NO ACEPTA EN EL FORM METODO PUT POR ESTO SE NOMBRA ACA--}}

         

        <label >
            Nombre:
            <br>
            <input type="text" name="name" value="{{$producto->name}}">
        </label>

        <br>
        <label >
            Descripción:
            <br>
            <textarea name="description"  rows="5" >{{$producto->description}}</textarea>
        </label>

        <br>
         <label >
            Costo:
            <br>
            <input type="number"name="cost" value="{{$producto->cost}}">
        </label>
        <br>

        <br>
         <label >
            Precio:
            <br>
            <input type="number"name="price" value="{{$producto->price}}">
        </label>
        <br>

        <br>
         <label >
            Cantidad:
            <br>
            <input type="number"name="cost" value="{{$producto->quantity}}">
        </label>
        <br>
        <br>

        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
