<?php

use Illuminate\Database\Seeder;

class ServiceOutfitImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_outfit_images')->insert([
            'description' => 'ダミー',
            'img_name' => '',
            'ec_id' => '1',
            'all_id' => '1',
            'service_outfit_id' => 1,
            'category_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
