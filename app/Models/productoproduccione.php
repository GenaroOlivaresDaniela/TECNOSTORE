<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class productoproduccione extends Model
{
    protected $fillable = [
        'fecha',
        'hora',
        'cantidad',
        'producto_id',
        'produccion_id'
            ];

    use HasFactory, SoftDeletes;
    public function producto()
    {
        return $this->ManyBelongsTo(producto::class);
    }
    public function produccion()
    {
        return $this->ManyBelongsTo(produccion::class);
    }

}
