<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonutsTable extends Migration
{
//     public function up()
//     {
//         Schema::create('donuts', function (Blueprint $table) {
//             $table->id();
//             $table->string('name');
//             $table->text('description')->nullable();
//             $table->decimal('price', 8, 2);
//             $table->string('image');
//             $table->boolean('is_featured')->default(false);
//             $table->timestamps();
//         });
//     }

//     public function down()
//     {
//         Schema::dropIfExists('donuts');
//     }
// }

public function up()
    {
        Schema::create('donuts', function (Blueprint $table) {
            $table->increments('id_donut')->primary();
            $table->string('name');
            $table->text('description')->nullable();
            $table->float('price');
            $table->string('image')->nullable();
            $table->boolean('status')->default(1); // 1 = Available, 0 = Sold Out
            $table->boolean('is_bestseller')->default(false);
            $table->timestamps();
        });

        Schema::create('glazes', function (Blueprint $table) {
            $table->increments('id_glaze')->primary();
            $table->string('name');
            $table->text('description')->nullable();
            $table->float('price');
            $table->string('image')->nullable();
            $table->boolean('status')->default(1); // 1 = Available, 0 = Sold Out
            $table->timestamps();
        });

        Schema::create('toppings', function (Blueprint $table) {
            $table->increments('id_topping')->primary();
            $table->string('name');
            $table->text('description')->nullable();
            $table->float('price');
            $table->string('image')->nullable();
            $table->boolean('status')->default(1); // 1 = Available, 0 = Sold Out
            $table->timestamps();
        });

        // Schema::create('donut_creation', function (Blueprint $table) {
        //     $table->string('id_creation', 5)->primary();
        //     $table->string('id_donat', 5);
        //     $table->string('id_glaze', 5);
        //     $table->string('id_topping', 5);
        //     $table->float('total_harga');
        //     $table->foreign('id_donat')->references('id_donat')->on('donat');
        //     $table->foreign('id_glaze')->references('id_glaze')->on('glaze');
        //     $table->foreign('id_topping')->references('id_topping')->on('topping');
        // });

        Schema::create('karyawan', function (Blueprint $table) {
            $table->increments('id_karyawan')->primary();
            $table->string('nama');
            $table->string('alamat');
            $table->float('gaji');
            $table->integer('telp');
        });

        // Schema::create('detail_transaksi', function (Blueprint $table) {
        //     $table->string('id_detail_transaksi', 5)->primary();
        //     $table->string('id_creation', 5);
        //     $table->integer('jumlah');
        //     $table->float('total_harga');
        //     $table->foreign('id_creation')->references('id_creation')->on('donut_creation');
        // });

        // Schema::create('transaksi', function (Blueprint $table) {
        //     $table->string('id_transaksi', 5)->primary();
        //     $table->string('id_detail_transaksi', 5);
        //     $table->string('id_karyawan', 5);
        //     $table->date('tanggal');
        //     $table->foreign('id_detail_transaksi')->references('id_detail_transaksi')->on('detail_transaksi');
        //     $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawan');
        // });
    }

    public function down()
    {
        // Schema::dropIfExists('transaksi');
        Schema::dropIfExists('toppings');
        Schema::dropIfExists('karyawan');
        Schema::dropIfExists('glazes');
        // Schema::dropIfExists('donut_creation');
        Schema::dropIfExists('donuts');
        // Schema::dropIfExists('detail_transaksi');
        Schema::dropIfExists('status');
        Schema::dropIfExists('is_bestseller');
    }
}