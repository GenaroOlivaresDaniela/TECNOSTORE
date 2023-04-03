<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class producto extends Model
{
    protected $fillable = [
        'nombrep',
        'imagen',
        'empresa_id',
        'categ_id'
            ];

    use HasFactory, SoftDeletes;
    public function productoproduccion()
    {
        return $this->ManyBelongsTo(productoproduccion::class);
    }
    public function empresa()
    {
        return $this->BelongsTo(empresa::class);
    }
    public function categoria()
    {
        return $this->BelongsTo(categoria::class);
    }
}
