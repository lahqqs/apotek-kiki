<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\detail_penjualan;



class PenjualanController extends Controller
{
    public function create(Request $penjualan)
    {
        $validation=$request->validate([
            'jumlah_jual'=>'required',
            'harga_jual'=>'required',
            'sub_total_jual'=>'required',
            'id_obat'=>'required',
            'nonota_jual'=>'required',
            'tgl_jual'=>'required',
            'total_jual'=>'required',
            'id_user'=>'required',
        ]);
        $penjualan = new Penjualan();
        $penjualan->nonota_jual = $validation['nonota_jual'];
        $penjualan->tgl_jual = $validation['tgl_jual'];
        $penjualan->total_jual = $validation['total_jual'];
        $penjualan->id_user = $validation['id_user'];

        $penjualan->save();

        $detail_penjualan = new DetailPenjualan();
        $detail_penjualan->jumlah_jual = $validation['jumlah_jual'];
        $detail_penjualan->harga_jual = $validation['harga_jual'];
        $detail_penjualan->sub_total_jual = $validation['sub_total_jual'];
        $detail_penjualan->id_obat = $validation['id_obat'];

        $penjualan->detail_penjualans()->save($detail_penjualan);
    } 

    public function delete(Penjualan $penjualan)
    {
        $penjualan->delete();
    }

    public function update(Penjualan $penjualan, Request $request){
        $validation=$request->validate([
            'jumlah_jual'=>'required',
            'harga_jual'=>'required',
            'sub_total_jual'=>'required',
            'id_obat'=>'required',
            'nonota_jual'=>'required',
            'tgl_jual'=>'required',
            'total_jual'=>'required',
            'id_user'=>'required',
        ]);
        $penjualan->update($validation);
    }

    public function index(){
        $dataPenjualan=Penjualan::all();
        return view('penjualan.index', ['title'=>'penjualan', 'data'=>$dataPenjualan]);
    }
}
