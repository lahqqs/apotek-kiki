<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\detail_pembelian;
use App\Models\detail_penjualan;

class Obat extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function detail_pembelians()
    {
        return $this->hasMany(detail_pembelian::class);
    }

    public function detail_penjualans()
    {
        return $this->hasMany(detail_penjualan::class);
    }
}