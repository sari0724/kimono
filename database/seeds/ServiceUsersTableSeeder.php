<?php

use Illuminate\Database\Seeder;

class ServiceUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_users')->insert([
            'company' => '名無し01',
            'email' => 'Nanashi01@gmail.com',
            'password' => 'Nanashi01',
            'img_name' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
