<?php

use Illuminate\Database\Seeder;

class StoryLikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('story_likes')->insert([
            'user_id' => '1',
            'story_id' => '1',
        ]);
    }
}
