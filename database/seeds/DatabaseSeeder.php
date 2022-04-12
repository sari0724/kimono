<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            UserOutfitsTableSeeder::class,
            UserOutfitLikesTableSeeder::class,
            FollowsTableSeeder::class,
            CommentsTableSeeder::class,
            StoriesTableSeeder::class,
            StoryLikesTableSeeder::class,
            ServiceUsersTableSeeder::class,
            ServiceOutfitImageLikesTableSeeder::class,
            CategoriesTableSeeder::class,
            ServiceOutfitsTableSeeder::class,
            ServiceOutfitImagesTableSeeder::class,
        ]);
    }
}
