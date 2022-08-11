<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index(){

        $productos = Producto::all();
        return view('productos.index',compact('productos'));
    }

    public function create(){
        return view('productos.create');
    }

    public function store(Request $request){

        // Producto::create($request->all());

        $producto= new Producto();
        $producto->name = $request->get('name');
        $producto->description = $request->get('description');
        $producto->cost = $request->get('cost');
        $producto->price = $request->get('price');
        $producto->quantity = $request->get('quantity');
        // $producto->is_active= $request->get('is_active');

        $producto->save();


        return redirect()->route('productos.show',$producto);

    }

    public function show(Producto $producto){

        return view('productos.show',compact ('producto'));


    }

    public function edit(Producto $producto){

        return view('productos.edit', compact ('producto'));



    }


    public function update(Request $request, Producto $producto){

        return $request-> all();

        $producto->save();



    }



}
