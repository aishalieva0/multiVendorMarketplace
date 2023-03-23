<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

           'name'=>'gulgez',
           'email'=>'gulgez@gmail.com',
           'password'=>bcrypt('password'),
        //    'role_id'=>1
        ]);

    }
}
