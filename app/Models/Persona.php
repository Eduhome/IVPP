<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = "persona";
    protected $filllable = ['id','nombre','apellido','celular','ci','estado','created_at','updated_at'];
}
