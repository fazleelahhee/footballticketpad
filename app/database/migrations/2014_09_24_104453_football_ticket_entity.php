<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FootballTicketEntity extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('football_ticket', function ($table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('short_description');
            $table->text('content');
            $table->string('slug')->nullable();
            $table->enum('type', array('club', 'country', 'league', 'season', 'venue'));
            $table->integer('feature_image')->nullable();
            $table->timestamps();
            $table->boolean('is_published')->default(true);
        });

        Schema::create('football_ticket_meta', function ($table) {
            $table->increments('id');
            $table->integer('football_ticket_id');
            $table->text('key');
            $table->text('value');
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
        Schema::drop('football_ticket');
        Schema::drop('football_ticket_meta');

	}

}
