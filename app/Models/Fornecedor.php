<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Produto;

class Fornecedor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cnpj',
        'telefone',
        'email',
        'cidade',
        'estado'
    ];

        protected $table = 'fornecedores';

        public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}


