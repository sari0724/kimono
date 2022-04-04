<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOutfitsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_outfits_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 200);
            $table->string('img_name')->default('');
            $table->string('ec_id')->default('');
            $table->boolean('all_id');
            $table->integer('service_outfit_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_outfits_images');
    }
}
