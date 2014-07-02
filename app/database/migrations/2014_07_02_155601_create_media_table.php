<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('media', function ($table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('extension', 255);
            $table->string('path', 1024);
            $table->enum('type', array('full', 'medium', 'thumb'));
            $table->integer('height');
            $table->integer('width');
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
        Schema::drop('media');
	}

}
