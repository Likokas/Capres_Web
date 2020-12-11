<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('pembimbing_id');
            $table->foreign('pembimbing_id')->references('id')->on('pembimbings');
            $table->unsignedBigInteger('point_id');
            $table->foreign('point_id')->references('id')->on('points');
            $table->date('tanggal_input');
            $table->text('pesan');
            $table->enum('is_approved',['0','1','2'])
                ->default('0')
                ->comment('0 = pending, 1 = approved, 2 = decline');
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
        Schema::dropIfExists('event_user');
    }
}
