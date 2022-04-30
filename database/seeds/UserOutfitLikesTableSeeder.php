<?php

use Illuminate\Database\Seeder;

class UserOutfitLikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_outfit_likes')->insert([
            'user_id' => 1,
            'user_outfit_id' => 1,
        ]);
    }
}
