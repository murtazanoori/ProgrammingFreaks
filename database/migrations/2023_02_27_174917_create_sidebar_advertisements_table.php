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
        Schema::create('sidebar_advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('Top_sidebar_ad');
            $table->string('Top_sidebar_url')->nullable();
            $table->string('Top_sidebar_status');
            $table->string('Bottom_sidebar_ad');
            $table->string('Bottom_sidebar_url')->nullable();
            $table->string('Bottom_sidebar_status');
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
        Schema::dropIfExists('sidebar_advertisements');
    }
};
