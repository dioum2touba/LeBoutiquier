<?php

namespace App\Http\Controllers;

use App\Client;
use App\Article;
use App\Boutique;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('article.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->validate([
        'codeGeneral' => 'required|unique:articles',
        'codeBare' => 'required|unique:articles',
        'nom' => 'required',
        'conditionnement' => 'required',
        'stockMin' => 'required|integer',
        'quantite' => 'required|integer'
        ]);

        $article = new Article($data);
        $article->save();
        return redirect()->route('addArticle')->with('success','Article succesfully added');

    }

    public function liste()
    {
        $article = Article::all();
        return view('article.liste',compact('article'));
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
        $article = Article::find($id);
        return view('article.edit',compact('article'));
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
        $data =$request->validate([
        'codeGeneral' => 'required',
        'codeBare' => 'required',
        'nom' => 'required',
        'conditionnement' => 'required',
        'stockMin' => 'required|integer',
        'quantite' => 'required|integer'
        ]);


        $article = Article::findOrFail($id);
        $article->codeGeneral = request('codeGeneral');
        $article->codeBare = request('codeBare');
        $article->nom = request('nom');
        $article->conditionnement = request('conditionnement');
        $article->stockMin = request('stockMin');
        $article->quantite = request('quantite');
        $article->update();
        return redirect()->route('listeArticle')->with('success','article succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('listeArticle')->with('article','client succesfully deleted');
    }
}
