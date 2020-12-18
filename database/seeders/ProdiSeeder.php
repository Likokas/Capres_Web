<?php

namespace Database\Seeders;

use App\Models\prodi;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prodi = new prodi();
        $prodi->inisial='IMT';
        $prodi->prodi='Informatika';
        $prodi->save();

        $prodi = new prodi();
        $prodi->inisial='IBM';
        $prodi->prodi='International Business management';
        $prodi->save();

        $prodi = new prodi();
        $prodi->inisial='FIKOM';
        $prodi->prodi='Ilmu Komunikasi';
        $prodi->save();

        $prodi = new prodi();
        $prodi->inisial='HTB';
        $prodi->prodi='Hospitality and Tourism Business';
        $prodi->save();


    }
}
