<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Produto extends Model
{
    use HasFactory;  

    protected $fillable = ['nome', 'descricao', 'quantidade', 'preco', 'fornecedor_id'];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
