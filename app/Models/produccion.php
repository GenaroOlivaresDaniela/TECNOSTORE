<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class produccion extends Model
{
    protected $fillable = [
        'nombrepr',
        'dia',
        'fecha_inicio',
        'fecha_final',
        'total_produccion',
        'maquina_id'

            ];

    use HasFactory, SoftDeletes;
    public function productoproduccion()
    {
        return $this->ManyBelongsTo(productoproduccion::class);
    }
    public function maquina()
    {
        return $this->belongsTo(maquina::class);
    }
}
