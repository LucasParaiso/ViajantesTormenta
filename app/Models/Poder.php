<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poder extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $table = "poderes";

    public function ficha() {
        return $this->belongsTo(Ficha::class);
    }
}
