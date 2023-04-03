<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuario extends Model
{
    protected $fillable = [
        'nombre',
        'correo',
        'contraseña',
        'img_perfil',
        'type_id'
            ];
             protected $hidden =[
                'contraseña'
            ];

    use HasFactory, SoftDeletes;
    public function empresa()
    {
        return $this->hasMany(empresa::class);
    }
    public function typeuser()
    {
        return $this->hasMany(type_user::class);
    }
}
