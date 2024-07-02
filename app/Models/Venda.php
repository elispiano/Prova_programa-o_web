<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = ['data', 'vendedor_id', 'imovel_id'];

    public function vendedor()
    {
        return $this->belongsTo(Funcionario::class, 'vendedor_id');
    }

    public function imovel()
    {
        return $this->belongsTo(Imovel::class);
    }
}
