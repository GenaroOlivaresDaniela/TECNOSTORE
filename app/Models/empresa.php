<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class empresa extends Model
{
    protected $fillable = [
        'nombre_empresa',
        'usuario_id'
            ];

    use HasFactory, SoftDeletes;
    public function usuario()
    {
        return $this->belongsTo(usuario::class);
    }
    public function categoria()
    {
        return $this->hasMany(categoria::class);
    }
    public function producto()
    {
        return $this->hasMany(producto::class);
    }
    public function maquina()
    {
        return $this->hasMany(maquina::class);
    }
}
