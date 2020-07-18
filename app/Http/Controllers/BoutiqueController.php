<?php

namespace App\Http\Controllers;

use App\Boutique;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('boutique.add');
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
        'ville' => 'required',
        'telephone' => 'required|integer',
        'email' => 'required|email|unique:fournisseurs',
        'boitePostal' => 'required'
        ]);

        $shop = new Boutique($data);
        $shop->save();
        return redirect()->route('addBoutique')->with('success','boutique succesfully added');

    }

    public function liste()
    {
        $shop = Boutique::all();
        return view('boutique.liste',compact('shop'));
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
        $shop = Boutique::find($id);
        return view('boutique.edit',compact('shop'));
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
        $shop =$request->validate([
        'nom' => 'required',
        'ville' => 'required',
        'telephone' => 'required|integer',
        'email' => 'required|email',
        'boitePostal' => 'required'
        ]);

        $shop = Boutique::findOrFail($id);
        $shop->nom = request('nom');
        $shop->ville = request('ville');
        $shop->telephone = request('telephone');
        $shop->email = request('email');
        $shop->boitePostal = request('boitePostal');
        $shop->update();
        return redirect()->route('listeBoutique')->with('success','succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shop = Boutique::findOrFail($id);
        $shop->delete();
        return redirect()->route('listeBoutique')->with('success','boutique succesfully deleted');
    }
}
