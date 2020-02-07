<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Imagem;
use App\CatImagem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ImagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagens = Imagem::paginate(10);
        return view('admin.imagens.index', [
            'imagens' => $imagens
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catImagens = CatImagem::orderBy('id', 'DESC')->get();

        return view('admin.imagens.create', [
            'catImagens' => $catImagens
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $createImage = Imagem::create($request->all());
        
        $validator = Validator::make($request->only('imagem'), ['imagem' => 'image']);
  
        if($validator->fails() === true) {
            flash('Todas as imagens devem ser do tipo jpg, jpge, png, ou svg.')->error()->important();
            return redirect()->route('admin.imagens.create');
        }

        //$imagem = new Imagem();
        //$imagem->id = $request->id;
        //$imagem->cats_imagem_id = $request->cats_imagem_id;
        $createImage->imagem = $request->file('imagem')->store('imagens/' . $createImage->id);

        $createImage->save();
        unset($createImage);

        flash('Imagem cadastrada com sucesso')->success()->important();
        return redirect()->route('admin.imagens.index');

        //echo "<img src=' " . Storage::url($imagem->imagem) . " '>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
