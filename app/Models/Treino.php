<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model{
    use HasFactory;
    public $timestamps = false;

    
    protected function casts(): array{
        return [
            'treinoA' => 'array',
            'treinoB' => 'array',
            'treinoC' => 'array'
        ];
    }

    

}
