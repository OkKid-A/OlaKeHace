<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'cupo',
        'lugar',
        'imagen',
        'fechaInicio',
        'fechaFin',
        'horaInicio',
        'horaFin'
    ];

    protected $casts = [
        'fechaInicio' => 'datetime',
        'fechaFin' => 'datetime',
        'horaInicio' => 'datetime',
        'horaFin' => 'datetime',
    ];

    public function getFechaInicioAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getFechaFinAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getHoraInicioAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function getHoraFinAttribute($value)
    {
        return Carbon::parse($value);

    }
}
