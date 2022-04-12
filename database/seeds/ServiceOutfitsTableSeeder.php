<?php

use Illuminate\Database\Seeder;

class ServiceOutfitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_outfits')->insert([
            'title' => '名無し0001',
            'content' => 'Nanashi0001',
            'service_outfit_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'deleted_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
