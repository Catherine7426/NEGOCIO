@extends('layouts.plantilla')

@section('title','Producto  '.$producto->name)



@section('content')

    <h1>Está modificando el producto {{$producto->name}} </h1>

    <a href="{{route('productos.index')}}">Volver a Productos</a>

    <p><strong>Nombre: </strong>{{$producto->name}} </p>
    <p>{{$producto->description}} </p>
    <p>Costo:{{$producto->cost}} </p>
    <p>Precio venta:{{$producto->price}} </p>
    <p>Cantidad a ingresar:{{$producto->quantity}} </p>

     <a href="{{route('productos.edit',$producto)}}">Editar Producto</a>
@endsection
