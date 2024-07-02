<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'telefone'];

    public function imoveis()
    {
        return $this->hasMany(Imovel::class);
    }
}
