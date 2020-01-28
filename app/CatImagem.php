<?php

namespace App;

use App\Imagem;
use Illuminate\Database\Eloquent\Model;

class CatImagem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

   public function imagens()
    {
        return $this->hasMany(Imagem::class, 'cats_imagem_id', 'id');
    }

}
