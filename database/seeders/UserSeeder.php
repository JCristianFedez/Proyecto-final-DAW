<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
        $user->name = "Admin";
        $user->password = "1234";
        $user->email = "admin@gmail.com";
        $user->email_verified_at = now();
        $user->admin = 1;
        $user->remember_token = "admin124";
        $user->save();

        $user2 = new User();
        $user2->name = "Estandar";
        $user2->password = "1234";
        $user2->email = "estandar@gmail.com";
        $user2->email_verified_at = now();
        $user2->remember_token = "estandar123";
        $user2->save();

        User::factory(50)->create();
    }
}
