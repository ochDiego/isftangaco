<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Profesore extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'slug',
        'dni',
        'email',
        'telefono',
        'fecha_nac',
        'domicilio',
        'cv',
    ];

    public function asistencias():HasMany
    {
        return $this->hasMany(Asistencia::class);
    }

    public function asignaturas():HasMany
    {
        return $this->hasMany(Materias::class);
    }

    public function licencias():HasMany
    {
        return $this->hasMany(Licencia::class);
    }

    public function image():MorphOne
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
