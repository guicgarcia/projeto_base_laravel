<?php

namespace App;

use App\CatImagem;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imagem'
    ];

    public function user()
    {   
        return $this->belongsTo(CatImagem::class, 'cats_imagem_id', 'id');
    }
}
