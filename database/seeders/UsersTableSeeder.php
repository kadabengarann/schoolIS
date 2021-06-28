<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\User::create([
        //     'name'	=> str_random(40),
        //     'email'	=> str_random(10) . '@codepolitan.com',
        //     'password'	=> bcrypt('secret')
        // ]);
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>'$2y$10$Vqn35beeJjnkfyxtPqTjn.Ta56vG96AddvVOaU1ATZX8SaHKn0wvi',
            'level'=>'1'
        ]);
        DB::table('users')->insert(
        [
            'name'=>'user',
            'email'=>'user@user.com',
            'password'=>'$2y$10$K2S6txgrTpkhM2aXQWS0Me5R5Y2lz5W16F4FUtj7yNqU0tPNHv172',
            'level'=>'2'
        ]);
    }
}
