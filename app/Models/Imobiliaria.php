<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imobiliaria extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function agencias()
    {
        return $this->hasMany(Agencia::class);
    }
}
