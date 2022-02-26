<?php

namespace App\Http\Controllers;

use App\Venta;
use App\Producto;
use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VentaController extends Controller
{
    public function create(){

        $productos = Producto::all();
        $clientes = Cliente::all();
        return view('venta',compact('productos', 'clientes'));
    }

    public function agregar(Request $req){
        $reglas = [
            'cliente' => 'required|string',
            'producto' => 'required|string',
            'cantidad' => 'required|integer',
            'precio' => 'required|integer',
            'resultado' => 'required|integer',
            'entregado' => 'required|string',
            'abonado' => 'required|string',
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
        
        $ventaNueva = new Venta();

        $ventaNueva->cliente = $req["cliente"];
        $ventaNueva->producto = $req["producto"];
        $ventaNueva->cantidad = $req["cantidad"];
        $ventaNueva->precio = $req["precio"];
        $ventaNueva->total = $req["resultado"];
        $ventaNueva->entregado = $req["entregado"];
        $ventaNueva->abonado = $req["abonado"];

        $ventaNueva->save();
        return redirect("/home"); 
    }

    Public function listado (){
        $venta = Venta::all();
        $vac = compact("venta");
        return view("listado/listadoventa", $vac);
    }

    public function delete(Request $req)
    {
        $id = $req["id"];
        $req = Venta::findOrFail($id);
        $req->delete();
        return redirect("/listado/listadoventa");
    }

    public function modificar(Request $req) {
        $productos = Producto::all();
        $clientes = Cliente::all();
        $vac2 = compact("productos", "clientes");


        $id = $req['id'];
        $modventa = Venta::find($id);
        $vac = compact("modventa","id");
        return view("../modificar/modventa", $vac, $vac2);
       
    }

    public function editar(Request $req) {

        $id = $req['id'];
        $modventa = Venta::find($id);
       
        $vac = compact("modventa");
        $modventa->cliente = $req['ventacliente'];
        $modventa->producto = $req['ventaproducto'];
        $modventa->cantidad = $req['ventacantidad'];
        $modventa->precio = $req['ventaprecio'];
        $modventa->total = $req['ventatotal'];
        $modventa->entregado = $req['ventaentregado'];
        $modventa->abonado = $req['ventaabonado'];
 
        $modventa->save();
        return redirect("/listado/listadoventa");
    }
}