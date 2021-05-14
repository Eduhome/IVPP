<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    //conectar a nuestra bade de datos 

    protected $table = "persona";
    protected $fillable = ['id','nombre','apellido','celular','ci','estado','created_at','updated_at'];
}
