<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Compra as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'producto', 'cantidad', 'precio', "total", 'proveedores',
    ];
    public $timestamps = false;
    public $table = "compra";


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}