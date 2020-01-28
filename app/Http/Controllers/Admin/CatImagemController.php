<?php

namespace App\Http\Controllers\Admin;

use App\CatImagem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatImagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catsImagem = CatImagem::paginate(10);
        return view('admin.catsImagem.index', [
            'catsImagem' => $catsImagem
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catsImagem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catImagemCreate = CatImagem::Create($request->all());
        
        flash('Categoria da Imagem cadastrada com sucesso')->success()->important();
        return redirect()->route('admin.cat-imagem.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catImagem = CatImagem::where('id', $id)->first();
        return view('admin.catsImagem.show', [
            'catImagem' => $catImagem
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catImagem = CatImagem::where('id', $id)->first();
        return view('admin.catsImagem.edit', [
            'catImagem' => $catImagem
        ]);
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
        $catImagem = CatImagem::where('id', $id)->first();
        $catImagem->fill($request->all());

        if(!$catImagem->save()){
            return redirect()->back()->withInputs()->withErrors();
        }

        flash('Categoria da imagem editada com sucesso')->success()->important();
        return redirect()->route('admin.cat-imagem.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatImagem $catImagem)
    {
        $catImagem->delete();
        flash('Categoria da imagem apagada com sucesso')->success()->important();
        return redirect()->route('admin.cat-imagem.index');
    }
}
