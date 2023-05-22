<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Inventario extends Model
{
    use HasFactory;


    protected function Proveedor(): Attribute
    {
        return new Attribute(
            set: function($value){
                return strlower($value);
            }
        );
    }

}


