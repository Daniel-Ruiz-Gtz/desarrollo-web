<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['carrera', 'seccion', 'calendario'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
