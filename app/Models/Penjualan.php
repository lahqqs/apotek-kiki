<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\detail_penjualan;

class Penjualan extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function detail_penjualans()
    {
        return $this->hasOne(detail_penjualan::class, 'penjualan_id', 'id');
    }
}
