<?php

use App\User;
use Illuminate\Database\Seeder;

class UserOutfitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_outfits')->insert([
            'title' => '名無し',
            'content' => 'Nanashi',
            'img_name' => '',
            'user_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
