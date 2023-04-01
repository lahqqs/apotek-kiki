<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Obat;
use App\Models\Penjualan;

class detail_penjualan extends Model
{
    use HasFactory;

    public function penjualans()
    {
        return $this->belongsTo(Penjualan::class, 'penjualan_id', 'id');
    }

    public function obats()
    {
        return $this->belongsTo(Obat::class, 'obat_id', 'id');
    }
}