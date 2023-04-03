<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subcategoria extends Model
{
    protected $fillable = [
        'nombre_s'
            ];

    use HasFactory, SoftDeletes;
    public function categoria()
    {
        return $this->hasMany(categoria::class);
    }
}
