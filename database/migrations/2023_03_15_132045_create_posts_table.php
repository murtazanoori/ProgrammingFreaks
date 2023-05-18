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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->text('post_details');
            $table->integer('visitors');
            $table->integer('author_id');
            $table->integer('admin_id');
            $table->integer('is_share')->comment('0 = No 1 = Yes');
            $table->integer('is_comment');
            $table->integer('sub_category_id');
            $table->string('post_picture');
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
        Schema::dropIfExists('posts');
    }
};
