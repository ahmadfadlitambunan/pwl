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
    public function up() // membuat 
    {
        Schema::create('posts', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->unsignedBigInteger('author_id'); //akan mengambil dari kolom lain
            $table->foreign('author_id')->references('id')->on('users')->onDelete('restrict'); //foreign key karena akan mengambil dari kolom lain
            $table->string('title');
            $table->string('slug')->unique(); // foreign key
            $table->text('excerpt');
            $table->text('body');
            $table->string('image')->nullable();
            $table->timestamps(); // membuat dua table history waktu ngepost
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // menghapus
    {
        Schema::dropIfExists('posts');
    }
}