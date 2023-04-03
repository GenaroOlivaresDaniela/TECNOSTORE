<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class maquina extends Model
{
    protected $fillable = [
        'nombrem',
        'empresa_id',
        'tipom_id'
            ];

    use HasFactory, SoftDeletes;
    public function empresa()
    {
        return $this->belongsTo(empresa::class);
    }
    public function tipom()
    {
        return $this->belongsTo(type_maquina::class);
    }
    public function produccion()
    {
        return $this->hasMany(produccion::class);
    }
}
