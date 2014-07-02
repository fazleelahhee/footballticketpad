<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldsOnPage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        $prefix = DB::getTablePrefix();
        DB::statement("ALTER TABLE {$prefix}pages add `name` VARCHAR(255)");
        DB::statement("ALTER TABLE {$prefix}pages add `uri_path` VARCHAR(255)");
        DB::statement("ALTER TABLE {$prefix}pages ADD `parent_id` INT");
        DB::statement("ALTER TABLE {$prefix}pages ADD `meta_title` VARCHAR(160) AFTER uri_path ");
        DB::statement("ALTER TABLE {$prefix}pages ADD `meta_content` VARCHAR(160) AFTER meta_title");
        DB::statement("ALTER TABLE {$prefix}pages ADD `meta_description` VARCHAR(160) AFTER meta_content");
        DB::statement("ALTER TABLE {$prefix}pages ADD `parent_chain` VARCHAR(255) AFTER parent_id");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        $prefix = DB::getTablePrefix();
        DB::statement("ALTER TABLE {$prefix}page drop uri_path");
        DB::statement("ALTER TABLE {$prefix}page DROP meta_title");
        DB::statement("ALTER TABLE {$prefix}page DROP meta_content");
        DB::statement("ALTER TABLE {$prefix}page DROP meta_description");
        DB::statement("ALTER TABLE {$prefix}page DROP parent_chain");
        DB::statement("ALTER TABLE {$prefix}page DROP name");
        DB::statement("ALTER TABLE {$prefix}page DROP parent_id");
	}

}
