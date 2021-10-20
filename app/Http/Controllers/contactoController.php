<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class contactoController extends Controller
{
    public function store() {
    
    $correo = new ContactanosMailable;
    Mail::to('info@clanaberturas.com.ar')->send($correo);
    return "Mesanje enviado";
}
