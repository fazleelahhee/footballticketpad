<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeInSlider extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        $prefix = DB::getTablePrefix();
        DB::statement("ALTER TABLE {$prefix}sliders DROP `type`");
        DB::statement("ALTER TABLE {$prefix}sliders ADD `type` enum('home','about')");

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        $prefix = DB::getTablePrefix();
        DB::statement("ALTER TABLE {$prefix}sliders DROP `type`");
        DB::statement("ALTER TABLE {$prefix}sliders ADD `type` enum('home')");
	}

}
