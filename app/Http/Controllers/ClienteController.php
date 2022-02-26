<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    public function agregar(Request $req){
        $reglas = [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'telefono' => 'required|integer',
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

        $clienteNuevo= new Cliente();

        $clienteNuevo->nombre = $req["nombre"];
        $clienteNuevo->apellido = $req["apellido"];
        $clienteNuevo->telefono = $req["telefono"];

        $clienteNuevo->save();
        return redirect("/home"); 
    }

    Public function listado (){
        $cliente = Cliente::all();
        $vac = compact("cliente");
        return view("listado/listadocliente", $vac);
    }

    public function delete(Request $req)
    {
        $id = $req["id"];
        $req = Cliente::findOrFail($id);
        $req->delete();
        return redirect("/listado/listadocliente");
    }

    public function modificar(Request $req) {

        $id = $req['id'];
        $modcliente = Cliente::find($id);
        $vac = compact("modcliente","id");
        return view("../modificar/modcliente", $vac);
       
    }

    public function editar(Request $req) {

        $id = $req['id'];
        $modcliente = Cliente::find($id);
       
        $vac = compact("modcliente");
        $modcliente->nombre = $req['nombrecliente'];
        $modcliente->apellido = $req['apellidocliente'];
        $modcliente->telefono = $req['telefonocliente'];
 
        $modcliente->save();
        return redirect("/listado/listadocliente");
    }
}