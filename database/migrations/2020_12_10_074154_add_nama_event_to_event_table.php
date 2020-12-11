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
        });
    }
}
