<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaEventToEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            //negara
            $table->unsignedBigInteger('negara_id')->index()->after('tanggal_pelaksanaan');
            $table->foreign('negara_id')->references('id')->on('negaras');

//            //pembimbing
//            $table->unsignedBigInteger('pembimbing_id')->index()->after('negara_id');
//            $table->foreign('pembimbing_id')->references('id')->on('pembimbings');
//
//            //tingkatan
//            $table->unsignedBigInteger('tingkatan_id')->index()->after('pembimbing_id');
//            $table->foreign('tingkatan_id')->references('id')->on('tingkatans');
//
//            //jenis
//            $table->unsignedBigInteger('jenis_id')->index()->after('tingkatan_id');
//            $table->foreign('jenis_id')->references('id')->on('jenis');
//
//            //point
//
//            $table->unsignedBigInteger('point_id')->index()->after('jenis_id');
//            $table->foreign('point_id')->references('id')->on('points');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('nama_event_id');
            $table->dropColumn('negara_id');
//            $table->dropColumn('pembimbing_id');
//            $table->dropColumn('tingkatan_id');
//            $table->dropColumn('jenis_id');
//            $table->dropColumn('point_id');
        });
    }
}
