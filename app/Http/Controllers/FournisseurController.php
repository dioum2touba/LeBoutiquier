<?php

namespace App\Http\Controllers;

use App\Boutique;
use App\Client;
use App\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Fournisseur.add');
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
        'nom' => 'required',
        'prenom' => 'required',
        'ville' => 'required',
        'telephone' => 'required|integer',
        'email' => 'required|email|unique:fournisseurs',
        'boitePostal' => 'required'
        ]);

        $fournisseur = new Fournisseur($data);
        $fournisseur->save();
        return redirect()->route('addFournisseur')->with('success','fournisseur succesfully added');

    }

    public function liste()
    {
        $fournisseur = Fournisseur::all();
        return view('fournisseur.liste',compact('fournisseur'));
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
        $fournisseur = Fournisseur::find($id);
        return view('fournisseur.edit',compact('fournisseur'));
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
        $client =$request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'ville' => 'required',
        'telephone' => 'required|integer',
        'email' => 'required|email',
        'boitePostal' => 'required'
        ]);

        $fournisseur = Client::findOrFail($id);
        $fournisseur->nom = request('nom');
        $fournisseur->prenom = request('prenom');
        $fournisseur->ville = request('ville');
        $fournisseur->telephone = request('telephone');
        $fournisseur->email = request('email');
        $fournisseur->boitePostal = request('boitePostal');
        $fournisseur->update();
        return redirect()->route('listeFournisseur')->with('success','fournisseur succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fournisseur = Fournisseur::findOrFail($id);
        $fournisseur->delete();
        return redirect()->route('listeFournisseur')->with('success','fournisseur succesfully deleted');
    }
}
