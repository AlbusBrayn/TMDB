<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    public function series()
    {
        return $this->belongsTo(Series::class);
    }
    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
