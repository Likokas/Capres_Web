<?php

namespace Database\Seeders;

use App\Models\point;
use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $point = new point();
        $point->keterangan='Peserta Lomba Internasional';
        $point->point='12';
        $point->save();

        $point = new point();
        $point->keterangan='Peserta Lomba Kota';
        $point->point='1';
        $point->save();

        $point = new point();
        $point->keterangan='Peserta Lomba Provinsi';
        $point->point='3';
        $point->save();

        $point = new point();
        $point->keterangan='Peserta Lomba Nasional';
        $point->point='4';
        $point->save();


        $point = new point();
        $point->keterangan='Juara 1 tingkat Kota';
        $point->point='4';
        $point->save();

        $point = new point();
        $point->keterangan='Juara 2 tingkat Kota';
        $point->point='3';
        $point->save();

        $point = new point();
        $point->keterangan='Juara 3 tingkat Kota';
        $point->point='2';
        $point->save();

        $point = new point();
        $point->keterangan='Juara 1 tingkat Provinsi';
        $point->point='6';
        $point->save();

        $point = new point();
        $point->keterangan='Juara 2 tingkat Provinsi';
        $point->point='5';
        $point->save();

        $point = new point();
        $point->keterangan='Juara 3 tingkat Provinsi';
        $point->point='4';
        $point->save();


        $point = new point();
        $point->keterangan='Juara 1 tingkat Provinsi';
        $point->point='10';
        $point->save();

        $point = new point();
        $point->keterangan='Juara 2 tingkat Provinsi';
        $point->point='8';
        $point->save();

        $point = new point();
        $point->keterangan='Juara 3 tingkat Provinsi';
        $point->point='7';
        $point->save();

        //
    }
}
