<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pembelian;
use App\Models\Obat;

class detail_pembelian extends Model
{
    use HasFactory;

    public function pembelians()
    {
        return $this->belongsTo(Pembelian::class, 'pembelian_id', 'id');
    }

    public function obats()
    {
        return $this->belongsTo(Obat::class, 'obat_id', 'id');
    }    
}
