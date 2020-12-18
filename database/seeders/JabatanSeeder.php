<?php

namespace Database\Seeders;

use App\Models\jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = new jabatan();
        $jabatan->jabatan='Kaprodi';
        $jabatan->save();

        $jabatan = new jabatan();
        $jabatan->jabatan='Assistant Professor';
        $jabatan->save();

        $jabatan = new jabatan();
        $jabatan->jabatan='Intellectual Property Section Head';
        $jabatan->save();

        $jabatan = new jabatan();
        $jabatan->jabatan='Dekan';
        $jabatan->save();

    }
}
