<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Series extends Model
{
    use HasFactory;

    public function seasons()
    {
return $this->hasMany(Season::class);

    }
    public function episodes()

{
    return $this->hasManyThrough(Episode::class, Season::class);
}
}
