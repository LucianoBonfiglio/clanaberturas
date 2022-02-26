<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Venta as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente', 'producto', 'cantidad', "precio", 'total', "entregado", 'abonado',
    ];
    public $timestamps = false;
    public $table = "venta";


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}