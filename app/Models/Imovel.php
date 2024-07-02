<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $fillable = ['proprietario_id'];

    public function proprietario()
    {
        return $this->belongsTo(Proprietario::class);
    }

    public function terrenos()
    {
        return $this->hasMany(Terreno::class);
    }

    public function vivendas()
    {
        return $this->hasMany(Vivenda::class);
    }

    public function apartamentos()
    {
        return $this->hasMany(Apartamento::class);
    }
}
