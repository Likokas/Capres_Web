<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoginUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('mahasiswa_id')->index()->after('password')->nullable();
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas');

            $table->unsignedBigInteger('dosen_id')->index()->after('mahasiswa_id')->nullable();
            $table->foreign('dosen_id')->references('id')->on('dosens');

            $table->unsignedBigInteger('role_id')->index()->after('dosen_id');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
