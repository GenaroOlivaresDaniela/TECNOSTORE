<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categoria extends Model
{
    protected $fillable = [
        'nombrec',
        'subcateg_id',
        'empresa_id'
            ];

    use HasFactory, SoftDeletes;
    public function subcateg()
    {
        return $this->belongsTo(subcategoria::class);
    }
    public function empresa()
    {
        return $this->belongsTo(empresa::class);
    }
    public function producto()
    {
        return $this->hasMany(producto::class);
    }
}
