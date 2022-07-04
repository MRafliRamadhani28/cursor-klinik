<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturDetail extends Model
{
    use HasFactory;

    public function fitur()
    {
        return $this->belongsTo(Fitur::class);
    }
}
