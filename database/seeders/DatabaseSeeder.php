<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call([
           RoleSeeder::class,UserSeeder::class, JenisSeeder::class, NegaraSeeder::class, TingkatanSeeder::class,JabatanSeeder::class,JakaSeeder::class,ProdiSeeder::class, PointSeeder::class
        ]);
        Model::reguard();
        // \App\Models\User::factory(10)->create();
    }
}
