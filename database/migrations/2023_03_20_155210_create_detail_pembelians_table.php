<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Pembelian;
use App\Models\Obat;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembelians', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pembelian::class);
            $table->dateTime('tgl_kadaluarsa');
            $table->float('harga_beli');
            $table->integer('jumlah_beli');
            $table->double('sub_total_beli');
            $table->tinyInteger('persen_margin_jual');
            $table->foreignIdFor(Obat::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pembelians');
    }
};
