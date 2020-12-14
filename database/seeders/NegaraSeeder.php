<?php

namespace Database\Seeders;

use App\Models\negara;
use Illuminate\Database\Seeder;

class NegaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $negara = new negara();
        $negara->negara='Indonesia';
        $negara->save();

        $negara = new negara();
        $negara->negara='Singapura';
        $negara->save();

        $negara = new negara();
        $negara->negara='Malaysia';
        $negara->save();

        $negara = new negara();
        $negara->negara='Myanmar';
        $negara->save();

        $negara = new negara();
        $negara->negara='Korea';
        $negara->save();

        $negara = new negara();
        $negara->negara='Jepang';
        $negara->save();
    }
}
