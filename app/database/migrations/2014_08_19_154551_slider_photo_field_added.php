<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SliderPhotoFieldAdded extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        $prefix = DB::getTablePrefix();
        DB::statement("ALTER TABLE {$prefix}photos ADD `url` VARCHAR(255) AFTER title");
        DB::statement("ALTER TABLE {$prefix}photos ADD `description` TEXT AFTER title");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        $prefix = DB::getTablePrefix();
        DB::statement("ALTER TABLE {$prefix}pages DROP `url`");
        DB::statement("ALTER TABLE {$prefix}pages DROP `description`");
	}

}
