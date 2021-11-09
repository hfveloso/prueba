<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $fillable = ['name', 'descripcion', 'categoria']; Campos que se quieren llenar
    protected $guarded = [];

    /*public function getRouteKey()
    {
        return 'slug';
    }*/

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
