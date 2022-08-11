@extends('layouts.plantilla')

@section('title','Productos')

@section('content')


     {{-- <a href="{{route('productos.create')}}">Crear Producto</a> --}}
   

         <table>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>PRECIO</th>
                    <th>IMAGEN</th>
                    <th>ACCION</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($productos as $producto)
                <tr>
                    <td><a href="{{route('productos.show',$producto->id)}}">{{$producto->name}}</a></td>
                    <td>{{ $producto->description }}</td>
                    <td>{{ $producto->price }}</td>
                    <td>
                        <img src="{{route ('img',$producto->image)" alt="">
                    </td>
                    <td>
                        <div>
                            <a href="">AGREGAR</a>
                        </div>

                        <div>
                            <a href="">ELIMINAR</a>
                        </div>
                    </td>

                </tr>
            </tbody>
         </table>
            {{-- <li>
                <a href="{{route('productos.show',$producto->id)}}">{{$producto->name}}</a>
            </li>
            <li>
                <a href="{{route('productos.edit',$producto->id)}}">Edit</a>
            </li> --}}
        @endforeach
    </ul>
@endsection
