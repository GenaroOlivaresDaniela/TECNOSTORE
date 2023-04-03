<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class type_maquina extends Model
{
    protected $fillable = [
        'namem'
            ];

    use HasFactory, SoftDeletes;
    public function maquina()
    {
        return $this->hasMany(maquina::class);
    }
}
