<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SliderPhotoOrderFieldAdded extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        $prefix = DB::getTablePrefix();
        DB::statement("ALTER TABLE {$prefix}photos ADD `order` VARCHAR(255)");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        $prefix = DB::getTablePrefix();
        DB::statement("ALTER TABLE {$prefix}pages DROP `order`");
	}

}
