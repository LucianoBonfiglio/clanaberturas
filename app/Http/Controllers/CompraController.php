<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompraController extends Controller
{
    public function create(){
        
        $productos = Producto::all();
        return view('compra',compact('productos'));
    }

    public function agregar(Request $req){
        $reglas = [
            'producto' => 'required|string',
            'cantidad' => 'required|integer',
            'precio' => 'required|integer',
            'resultado' => 'required|integer',
            'proveedor' => 'required|string',
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

        $compraNueva = new Compra();

        $compraNueva->producto = $req["producto"];
        $compraNueva->cantidad = $req["cantidad"];
        $compraNueva->precio = $req["precio"];
        $compraNueva->total = $req["resultado"];
        $compraNueva->proveedor = $req["proveedor"];

        $compraNueva->save();
        return redirect("/home"); 
    }

    Public function listado (){
        $compra = Compra::all();
        $vac = compact("compra");
        return view("listado/listadocompra", $vac);
    }

    public function delete(Request $req)
    {
        $id = $req["id"];
        $req = Compra::findOrFail($id);
        $req->delete();
        return redirect("/listado/listadocompra");
    }

    public function modificar(Request $req) {
        $productos = Producto::all();
        $vac2 = compact("productos");

        $id = $req['id'];
        $modcompra = Compra::find($id);
        $vac = compact("modcompra","id");
        return view("../modificar/modcompra", $vac, $vac2);
       
    }

    public function editar(Request $req) {

        $id = $req['id'];
        $modcompra = Compra::find($id);
       
        $vac = compact("modcompra");
        $modcompra->producto = $req['compraproducto'];
        $modcompra->cantidad = $req['compracantidad'];
        $modcompra->precio = $req['compraprecio'];
        $modcompra->total = $req['compratotal'];
        $modcompra->proveedor = $req['compraproveedor'];
 
        $modcompra->save();
        return redirect("/listado/listadocompra");
    }
}