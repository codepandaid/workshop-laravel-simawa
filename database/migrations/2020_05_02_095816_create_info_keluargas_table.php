<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_keluargas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mahasiswa_id')->unsigned();
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->tinyInteger('pekerjaan_ayah');
            $table->tinyInteger('pekerjaan_ibu');
            $table->bigInteger('penghasilan_ayah');
            $table->bigInteger('penghasilan_ibu');
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('id')
                    ->on('info_mahasiswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_keluargas');
    }
}
