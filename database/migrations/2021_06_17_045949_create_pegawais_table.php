<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
             // $table->id();
             $table->bigIncrements('p_id');
             $table->char('p_nip',11);
             $table->string('p_nama',255);
             $table->string('p_tplahir',255);
             $table->string('p_alamat',255);
             $table->date('p_tglahir');
             $table->char('p_gender',1);
             $table->string('p_golongan',7);
             $table->string('p_eselon',5);
             $table->string('p_jabatan',255);
             $table->string('p_tptugas',255);
             $table->string('p_agama',255);
             $table->string('p_ukerja',255);
             $table->string('p_nohp',15);
             $table->string('p_npwp',255);
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
        Schema::dropIfExists('pegawais');
    }
}
