<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Asignatura extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function profesore():BelongsTo
    {
        return $this->belongsTo(Profesore::class);
    }

    public function carreras():BelongsToMany
    {
        return $this->belongsToMany(Carrera::class);
    }
}
