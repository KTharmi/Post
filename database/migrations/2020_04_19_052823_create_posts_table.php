<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 256);
            $table->string('sub_title', 100);
            $table->string('slug', 100);
            $table->text('body');
            $table->boolean('status')->nullable($value = true);	
            $table->integer('posted_by')->nullable($value = true);	
            $table->string('image', 256)->nullable($value = true);	
            $table->integer('like')->nullable($value = true);	
            $table->integer('dis_like')->nullable($value = true);	
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
}
