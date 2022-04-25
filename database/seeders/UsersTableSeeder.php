<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //kosongkan semua data di tabel users
        \DB::statement("SET FOREIGN_KEY_CHECKS=0");
        \DB::table('users')->truncate();

        // membuat 3 user secara manual
        \DB::table('users')->insert([
            [
                'name' => "Budi",
                'email' => "budi_gunawan@yahoo.co.id",
                'password' => bcrypt('rahasia')
            ],
            [
                'name' => "Iwan",
                'email' => "mr_iwan@yahoo.co.id",
                'password' => bcrypt('sandi')
            ],
            [
                'name' => "Tuti",
                'email' => "tuti@live.com",
                'password' => bcrypt('rahasia')
            ],
        ]);
    }
}
