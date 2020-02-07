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
        'imagem', 'cats_imagem_id'
    ];

    public function catImagem()
    {   
        return $this->belongsTo(CatImagem::class, 'cats_imagem_id', 'id');
    }


    // Não estou utilizando o Cropper
    public function getUrlImagemAttribute()
    {
        if(!empty($this->imagem)){
             return Storage::url(Cropper::thumb($this->imagem, 500, 500));
        }

        return '';
    }
}
