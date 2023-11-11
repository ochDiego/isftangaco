<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoLicencia extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function licencias():HasMany
    {
        return $this->hasMany(Licencia::class);
    }
    
}
