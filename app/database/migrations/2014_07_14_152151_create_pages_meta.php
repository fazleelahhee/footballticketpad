<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesMeta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('pages_meta', function($table)
        {
            $table->increments('id');
            $table->integer('page_id');
            $table->string('meta_keyword', 255);
            $table->text('meta_content');
            $table->timestamps();
            $table->index(array('page_id', 'meta_keyword'));
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('pages_meta');
	}

}
