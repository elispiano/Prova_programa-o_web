<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terreno extends Model
{
    use HasFactory;

    protected $fillable = ['imovel_id', 'zona', 'area'];

    public function imovel()
    {
        return $this->belongsTo(Imovel::class);
    }
}
