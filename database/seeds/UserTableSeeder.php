<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '名無し_',
            'email' => 'Nanashi_@gmail.com',
            'password' => 'Nanashi_',
            'img_name' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
