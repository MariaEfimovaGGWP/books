<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration {
    public function up() {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('book_name');
            $table->string('description', 1000);
            $table->string('img');
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('authors');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('books');
    }
}
