<?php

namespace Database\Seeders;

use App\Models\jaka;
use Illuminate\Database\Seeder;

class JakaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jaka = new jaka();
        $jaka->jaka ='jaka1';
        $jaka->save();

        $jaka = new jaka();
        $jaka->jaka ='jaka2';
        $jaka->save();
    }
}
