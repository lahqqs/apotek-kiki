<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\detail_pembelian;

class PembelianController extends Controller
{
    public function create(Request $pembelian)
    {
        $validation=$request->validate([
            'tgl_kadaluarsa'=>'required',
            'harga_beli'=>'required',
            'jumlah_beli'=>'required',
            'sub_total_beli'=>'required',
            'persen_margin_jual'=>'required',
            'id_obat'=>'required',
            'nonota_beli'=>'required',
            'tgl_beli'=>'required',
            'total_beli'=>'required',
            'id_distributor'=>'required',
            'id_user'=>'required',
        ]);
        $detail_pembelian = new detail_pembelian();    
        $detail_pembelian->tgl_kadaluarsa = $validation['tgl_kadaluarsa'];
        $detail_pembelian->harga_beli = $validation['harga_beli'];
        $detail_pembelian->jumlah_beli = $validation['jumlah_beli'];
        $detail_pembelian->sub_total_beli = $validation['sub_total_beli'];
        $detail_pembelian->persen_margin_jual = $validation['persen_margin_jual'];
        $detail_pembelian->id_obat = $validation['id_obat'];
        
        $detail_pembelian->save();

        $pembelian = new Pembelian();
        $pembelian->nonota_beli = $validation['nonota_beli'];
        $pembelian->tgl_beli = $validation['tgl_beli'];
        $pembelian->total_beli = $validation['total_beli'];
        $pembelian->id_distributor = $validation['id_distributor'];
        $pembelian->id_user = $validation['id_user'];

        $pembelian->detail_pembelian()->save($detail_pembelian);
    } 

    public function delete(Pembelian $pembelian)
    {
        $pembelian->delete();
    }

    public function update(Pembelian $pembelian, Request $request){
        $validation=$request->validate([
            'tgl_kadaluarsa'=>'required',
            'harga_beli'=>'required',
            'jumlah_beli'=>'required',
            'sub_total_beli'=>'required',
            'persen_margin_jual'=>'required',
            'id_obat'=>'required',
            'nonota_beli'=>'required',
            'tgl_beli'=>'required',
            'tgl_beli'=>'required',
            'total_beli'=>'required',
            'id_distributor'=>'required',
            'id_user'=>'required',
        ]);
        $pembelian->update($validation);
    }

    public function index(){
        $dataPembelian=Pembelian::all();
        return view('pembelian.index', ['title'=>'pembelian', 'data'=>$dataPembelian]);
    }
}
