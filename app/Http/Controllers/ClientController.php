<?php

namespace App\Http\Controllers;

use App\Boutique;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.add');
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

        $client = new Client($data);
        $client->save();
        return redirect()->route('addClient')->with('success','client succesfully added');

    }

    public function liste()
    {
        $client = Client::all();
        return view('client.liste',compact('client'));
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
        $client = Client::find($id);
        return view('client.edit',compact('client'));
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

        $client = Client::findOrFail($id);
        $client->nom = request('nom');
        $client->prenom = request('prenom');
        $client->ville = request('ville');
        $client->telephone = request('telephone');
        $client->email = request('email');
        $client->boitePostal = request('boitePostal');
        $client->update();
        return redirect()->route('listeClient')->with('success','client succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('listeClient')->with('success','client succesfully deleted');
    }
}
