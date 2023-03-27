<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contentor extends Model
{
    use HasFactory;

    protected $table='contentores';
    protected $fillable=[
        'estado',
        'id_endereco',
    ];





}
