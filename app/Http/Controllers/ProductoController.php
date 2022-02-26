<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{

    public function create(){

        $categorias = Categoria::all();
        return view('producto',compact('categorias'));
    }

    public function agregar(Request $req){
        $reglas = [
            'nombre' => 'required|string',
            'categoria' => 'required|string',
            'stock' => 'required|integer',
        ];

        $mensajes = [
            "required" => "El campo :attribute no puede estar vacio",
            "string" => "El campo :attribute debe ser un texto",
            "unique" => "El campo :attribute se encuentra repetido",
            "integer" => "El campo :attribute debe ser numerico",
            "email" => "El mail debe tener el formato correcto",
            "date" => "El campo :attribute debe ser una fecha"
        ];

        $this->validate($req, $reglas, $mensajes);

        $productoNuevo = new Producto();

        $productoNuevo->nombre = $req["nombre"];
        $productoNuevo->categoria = $req["categoria"];
        $productoNuevo->stock = $req["stock"];

        $productoNuevo->save();
        return redirect("/home"); 
    }

    Public function listado (){
        $producto = Producto::all();
        $vac = compact("producto");
        return view("listado/listadoproducto", $vac);
    }

    public function delete(Request $req)
    {
        $id = $req["id"];
        $req = Producto::findOrFail($id);
        $req->delete();
        return redirect("/listado/listadoproducto");
    }

    public function modificar(Request $req) {
        $categoria = Categoria::all();
        $vac2 = compact("categoria");

        $id = $req['id'];
        $modproducto = Producto::find($id);
        $vac = compact("modproducto","id");
        return view("../modificar/modproducto", $vac, $vac2);
       
    }

    public function editar(Request $req) {

        $id = $req['id'];
        $modproducto = Producto::find($id);
       
        $vac = compact("modproducto");
        $modproducto->nombre = $req['productonombre'];
        $modproducto->categoria = $req['productocategoria'];
        $modproducto->stock = $req['productostock'];

        $modproducto->save();
        return redirect("/listado/listadoproducto");
    }
}