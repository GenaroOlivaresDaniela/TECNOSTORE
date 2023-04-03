<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class type_user extends Model
{
    protected $fillable = [
        'name'
            ];

    use HasFactory, SoftDeletes;
    public function usuario()
    {
        return $this->hasMany(usuario::class);
    }
}
