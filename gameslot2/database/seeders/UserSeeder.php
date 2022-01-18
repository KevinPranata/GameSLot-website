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
            'name'=>'Eldwin',
            'userimage'=>'storage/userimages/WhatsApp Image 2021-11-30 at 22.08.41 (1).jpeg',
            'role'=>'admin',
            'email'=>'eldwin@gmail.com',
            'password'=> bcrypt('eldwin123'),
            'gender'=>'Male',
            'dateofbirth'=>'2001-11-14'
        ]);
        DB::table('users')->insert([
            'name'=>'Tino',
            'userimage'=>'storage/userimages/WhatsApp Image 2021-11-30 at 22.08.41 (1).jpeg',
            'email'=>'valentino@gmail.com',
            'password'=> bcrypt('valentino123'),
            'gender'=>'Male',
            'dateofbirth'=>'2001-05-14'
        ]);
    }
}
