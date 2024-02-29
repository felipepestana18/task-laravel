<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // aqui na hora do update não dar deixaar salvar a token no banco de dados para dar certo
    protected $guarded = [];


}
