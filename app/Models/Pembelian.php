<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\distributor;
use App\Models\detail_pembelian;

class Pembelian extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function distributors()
    {
        return $this->belongsTo(distributor::class, 'distributor_id', 'id');
    }

    public function detail_pembelians()
    {
        return $this->hasOne(detail_pembelian::class, 'pembelian_id', 'id');
    }
}
