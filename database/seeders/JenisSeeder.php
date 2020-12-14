<?php

namespace Database\Seeders;

use App\Models\jenis;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jenis = new jenis();
        $jenis->jenis='Insidentil';
        $jenis->save();

        $jenis = new jenis();
        $jenis->jenis='Tahunan';
        $jenis->save();
    }
}
