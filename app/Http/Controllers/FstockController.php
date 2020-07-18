<?php

namespace App\Http\Controllers;

use App\Client;
use App\Fstock;
use App\Article;
use App\Boutique;
use App\Fournisseur;
use Illuminate\Http\Request;

class FstockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        $client = Client::all();
        $boutique = Boutique::all();
        $fournisseur = Fournisseur::all();
        return view('fstock.add',compact('article','client','boutique','fournisseur'));
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
        'dateOperation' => 'required|date',
        'operation' => 'required',
        'quantiteEntree' => 'required|integer',
        'quantiteSortie' => 'required|integer',
        'datePeremption' => 'required|date',
        'prixAchat' => 'required|integer',
        'article_id' => 'required',
        'client_id' => 'required',
        'boutique_id' => 'required',
        'fournisseur_id' => 'required',
        ]);

        $fichier = new Fstock($data);
        $fichier->save();
        return redirect()->route('addArticle')->with('success','fichier succesfully added');

    }

    public function liste()
    {
      
        $fichier = Fstock::all();
        return view('fstock.liste',compact('fichier'));
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
        $fichier = Fstock::find($id);
        return view('fstock.edit',compact('fichier'));
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
        'dateOperation' => 'required|date',
        'operation' => 'required',
        'quantiteEntree' => 'required|integer',
        'quantiteSortie' => 'required|integer',
        'datePeremption' => 'required|date',
        'prixAchat' => 'required|integer',
        'article_id' => 'required',
        'client_id' => 'required',
        'boutique_id' => 'required',
        'fournisseur_id' => 'required',
        ]);



        $fichier = Fstock::findOrFail($id);
        $fichier->dateOperation = request('dateOperation');
        $fichier->operation = request('operation');
        $fichier->quantiteEntree = request('quantiteEntree');
        $fichier->quantiteSortie = request('quantiteSortie');
        $fichier->datePeremption = request('datePeremption');
        $fichier->prixAchat = request('prixAchat');
        $fichier->article_id = request('article_id');
        $fichier->client_id = request('client_id');
        $fichier->boutique_id = request('boutique_id');
        $fichier->fournisseur_id = request('fournisseur_id');
        $fichier->update();
        return redirect()->route('listeFstock')->with('success','fichier succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Fstock::findOrFail($id);
        $article->delete();
        return redirect()->route('listeFstock')->with('success','fichier succesfully deleted');
    }
}
