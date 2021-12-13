<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function atributo() {
        return $this->hasMany(Atributo::class);
    }

    public function pericia() {
        return $this->hasMany(Pericia::class);
    }

    public function armadura() {
        return $this->hasMany(Armadura::class);
    }

    public function arma() {
        return $this->hasMany(Arma::class);
    }

    public function item() {
        return $this->hasMany(Item::class);
    }

    public function poder() {
        return $this->hasMany(Poder::class);
    }

    public function magia() {
        return $this->hasMany(Magia::class);
    }
}
