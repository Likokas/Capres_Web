<?php

namespace Database\Seeders;

use App\Models\tingkatan;
use Illuminate\Database\Seeder;

class TingkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tingkatan = new tingkatan();
        $tingkatan->tingkatan='Kota';
        $tingkatan->save();

        $tingkatan = new tingkatan();
        $tingkatan->tingkatan='Provinsi';
        $tingkatan->save();

        $tingkatan = new tingkatan();
        $tingkatan->tingkatan='Nasional';
        $tingkatan->save();

        $tingkatan = new tingkatan();
        $tingkatan->tingkatan='International';
        $tingkatan->save();
    }
}
