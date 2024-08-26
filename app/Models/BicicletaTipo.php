<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BicicletaTipo extends Model
{
    use HasFactory;

    //nombre de la base de datos real
    protected $table = 'bicicleta_tipo';
}
