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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('Top_ad')->nullable();
            $table->string('Top_ad_url');
            $table->string('Top_ad_status');
            $table->string('Bottom_ad');
            $table->string('Bottom_ad_url')->nullable();
            $table->string('Bottom_ad_status');
            $table->string('Footer_ad');
            $table->string('Footer_ad_url')->nullable();
            $table->string('Footer_ad_status');
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
        Schema::dropIfExists('advertisements');
    }
};
