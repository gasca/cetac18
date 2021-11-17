<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //toma el nombre del modelo convierte en plural y minusculas y utiliza la relacion
    //tambien lo puedes definir manualmente con protected $table = 'mytable'; 20
    use HasFactory;
}
