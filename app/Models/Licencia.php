<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Licencia extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function tipoLicencia():BelongsTo
    {
        return $this->belongsTo(TipoLicencia::class);
    }

    public function profesore():BelongsTo
    {
        return $this->belongsTo(Profesore::class);
    }
}
