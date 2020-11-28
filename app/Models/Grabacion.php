<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grabacion extends Model
{
    use HasFactory;
    protected $table = "grabaciones";
    protected $fillable = ['fecha', 'tema', 'observaciones', 'enlace'];

    public function temas()
    {
        return $this->belongsToMany(Tema::class);
    }
}
