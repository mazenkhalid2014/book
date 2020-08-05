<?php

use App\User;
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
        $user ->name="admin";
        $user ->email="mazenkhalid@outlook.com";
        $user ->password=Hash::make("12345678");
        $user ->role="admin";
    
        $user->save();
    }
}
