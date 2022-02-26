<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriaController extends Controller
{
    public function agregar(Request $req){
        $reglas = [
            'nombrecategoria' => 'required|string',
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

        $categoriaNueva = new Categoria();

        $categoriaNueva->nombre = $req["nombrecategoria"];

        $categoriaNueva->save();
        return redirect("/home"); 
    }

    Public function listado (){
        $categoria = Categoria::all();
        $vac = compact("categoria");
        return view("listado/listadocategoria", $vac);
    }

    public function delete(Request $req)
    {
        $id = $req["id"];
        $req = Categoria::findOrFail($id);
        $req->delete();
        return redirect("/listado/listadocategoria");
    }

    public function modificar(Request $req) {

        $id = $req['id'];
        $modcategoria = Categoria::find($id);
        $vac = compact("modcategoria","id");
        return view("../modificar/modcategoria", $vac);
       
    }

    public function editar(Request $req) {

        $id = $req['id'];
        $modcategoria = Categoria::find($id);
       
        $vac = compact("modcategoria");
        $modcategoria->nombre = $req['nombrecategoria'];
 
        $modcategoria->save();
        return redirect("/listado/listadocategoria");
    }
}