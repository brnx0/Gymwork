<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;
    public $timestamps = false;
    const UPDATED_AT = null;

    public static function index() {
        
        return Alunos::first();
    }

    public static function store(){

    }

}
