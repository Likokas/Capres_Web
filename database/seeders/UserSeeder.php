<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name='Admin';
        $user->username='admin01';
        $user->password=Hash::make('12345678');
        $user->role_id= '1';//admin
        $user->save();

        $user = new User();
        $user->name='User';
        $user->username='user01';
        $user->password=Hash::make('12345678');
        $user->role_id= '2';//user
        $user->save();
        //
    }
}
