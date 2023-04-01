<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function create(Request $obat)
    {
        $validation=$obat->validate([
            'kode_obat'=>'required|unique:obats',
            'nama_obat'=>'required',
            'merk'=>'required',
            'jenis'=>'required',
            'satuan'=>'required',
            'golongan'=>'required',
            'kemasan'=>'required',
            'harga_jual'=>'required',
            'stok'=>'required'
        ]);
        $result = Obat::create($validation);
        if ($result) {
            return redirect(Route('obat.index'));
        }
    }

    public function delete(Obat $obat)
    {
        $result = $obat->delete();
        if ($result) {
            return redirect(Route('obat.index'));
        }
    }

    public function update(Obat $obat, Request $request){
        $validation=$request->validate([
            'kode_obat'=>'required',
            'nama_obat'=>'required',
            'merk'=>'required',
            'jenis'=>'required',
            'satuan'=>'required',
            'golongan'=>'required',
            'kemasan'=>'required',
            'harga_jual'=>'required',
            'stok'=>'required'
        ]);
        $result = $obat->update($validation);
        if ($result) {
            return redirect(Route('obat.index'));
        }
    }

   
    public function index(){
        $dataObat=Obat::all();
        return view('obat.index', ['title'=>'obat', 'data'=>$dataObat]);
    }

    public function addObat(){
        $dataObat=Obat::all();
        return view('obat.create', ['title'=>'addObat']);
    }

    public function updateObat(Obat $obat){
        return view('obat.update', ['title'=>'updateObat', 'obat' => $obat]);
    }
}
