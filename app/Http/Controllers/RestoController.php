<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Session;

class RestoController extends Controller
{
    //
    function index()
    {
        return view('home');
    }

    function list()
    {
        $data = Restaurant::all();
        return view('list', ["data"=>$data]);
    }

    function add(Request $req)
    {
        // return $req->input(); r_
        $resto = new Restaurant;
        $resto->r_name = $req->input('name');
        $resto->r_street = $req->input('street');
        $resto->r_town = $req->input('town');
        $resto->r_pc = $req->input('pc');
        $resto->r_phone = $req->input('telephone');
        $resto->r_website = $req->input('website');
        $resto->r_webdirectory = $req->input('webdirectory');
        $resto->r_o_email = $req->input('o_email');
        $resto->r_a_email = $req->input('a_email');
        $resto->save();
        $req->session()->flash('status', 'Restaurant entered successfully');
        return redirect('list');
    }

    function delete($id)
    {
        Restaurant::where('rid', $id)->delete();
        Session::flash('status', 'Restaurant has been deleted successfully');
        return redirect('list');
    }

    function edit($id)
    {
        $data = Restaurant::where('rid', $id)->first();
        return view('edit', ["data"=>$data]);
    }

    function update(Request $req)
    {
        // return $req->input(); r_
        $resto = Restaurant::where('rid', $req->rid)->first();
        $resto->exists = true;
        $resto->id = $req->rid; //already exists in database.
        $resto->r_name = $req->input('name');
        $resto->r_street = $req->input('street');
        $resto->r_town = $req->input('town');
        $resto->r_pc = $req->input('pc');
        $resto->r_phone = $req->input('telephone');
        $resto->r_website = $req->input('website');
        $resto->r_webdirectory = $req->input('webdirectory');
        $resto->r_o_email = $req->input('o_email');
        $resto->r_a_email = $req->input('a_email');
        $resto->save();
        $req->session()->flash('status', 'Restaurant updated successfully');
        return redirect('list');
    }

}
