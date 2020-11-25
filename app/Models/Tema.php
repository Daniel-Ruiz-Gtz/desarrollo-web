<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function grabaciones()
    {
        return $this->belongsToMany(Grabacion::class);
    }
}
