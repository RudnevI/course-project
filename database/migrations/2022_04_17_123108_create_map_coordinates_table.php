<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map_coordinates', function (Blueprint $table) {
            $table->id();
            $table->double("latitude")->nullable(false);
            $table->double("longitude")->nullable(false);
            $table->text('description');
            $table->foreignId('site_id')->nullable()->references('id')->on('cultural_heritage_sites')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('map_coordinates');
    }
};
