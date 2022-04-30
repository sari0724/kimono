<?php

use Illuminate\Database\Seeder;

class ServiceOutfitImageLikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_outfit_image_likes')->insert([
            'user_id' => 1,
            'service_outfit_image_id' => 1,
        ]);
    }
}
