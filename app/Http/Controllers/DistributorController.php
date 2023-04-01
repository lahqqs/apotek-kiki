<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\distributor;


class DistributorController extends Controller
{
    public function create(Request $request)
    {
        $validation=$request->validate([
            'nama_distributor'=>'required',
            'alamat'=>'required',
            'notelepon'=>'required',
        ]);
        distributor::create($validation);
    }

    public function delete(distributor $request)
    {
        $request->delete();
    }

    public function update(distributor $distributor, Request $request)
    {
        $validation=$request->validate([
            'nama_distributor'=>'required',
            'alamat'=>'required',
            'notelepon'=>'required',
        ]);
        $request->update($validation);
    }

    public function index(){
        $distributor=distributor::all();
        return view('distributor.index', ['title'=>'distributor', 'data'=>$distributor]);
    }
}
