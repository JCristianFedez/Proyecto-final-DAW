<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    /**
     * Si quisiera que este modelo usara una tabla
     * distinta de users simplemente le añadimos
     * la variable $table con el nombre de la tabla
     */
    //protected $table = "users";

}
