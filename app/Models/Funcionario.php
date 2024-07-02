<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'salario', 'agencia_id'];

    public function agencia()
    {
        return $this->belongsTo(Agencia::class);
    }

    public function vendas()
    {
        return $this->hasMany(Venda::class, 'vendedor_id');
    }
}
