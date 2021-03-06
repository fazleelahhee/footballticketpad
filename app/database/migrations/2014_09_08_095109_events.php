<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('events', function ($table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->text('content');
            $table->string('slug')->nullable();
            $table->datetime('datetime');
            $table->string('event_location', 255);
            $table->enum('team_type', array('club', 'country'));
            $table->integer('home_team_id');
            $table->integer('away_team_id');
            $table->integer('season_id');
            $table->integer('tournament_id');
            $table->boolean('event_in_home')->default(true);
            $table->integer('venue_id')->nullable();
            $table->integer('feature_image')->nullable();
            $table->text('ticket_type_ids')->nullable();
            $table->text('form_of_ticket_ids')->nullable();
            $table->text('ticket_restriction_ids')->nullable();
            $table->timestamps();
            $table->boolean('is_published')->default(true);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('events');
	}

}
