<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Asistencia extends Model
{
    use HasFactory;

    protected $fillable = ['profesore_id','entrada','salida'];

    public function profesore():BelongsTo
    {
        return $this->belongsTo(Profesore::class);
    }
}
