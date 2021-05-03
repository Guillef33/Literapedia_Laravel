<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_x_USer extends Model
{
    use HasFactory;
    public $table = 'role_x_users'; // aca estamos vinculando el modelo con la tabla 
}
