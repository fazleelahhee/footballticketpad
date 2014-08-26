<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Faq extends Migration {


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('faq', function ($table) {

            $table->increments('id');
            $table->string('title', 255);
            $table->text('content');
            $table->string('slug')->nullable();
            $table->date('datetime');
            $table->timestamps();
            $table->boolean('is_published')->default(true);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::drop('faq');
    }

}
