<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Producto as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'categoria', 'stock',
    ];
    public $timestamps = false;
    public $table = "producto";


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}