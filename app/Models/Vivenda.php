<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vivenda extends Model
{
    use HasFactory;

    protected $fillable = ['imovel_id', 'ano_de_construcao', 'area', 'localizacao', 'tipologia', 'preco'];

    public function imovel()
    {
        return $this->belongsTo(Imovel::class);
    }
}
