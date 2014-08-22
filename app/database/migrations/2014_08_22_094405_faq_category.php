<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FaqCategory extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('fbf_faq_category', function($table)
        {
            $table->increments('id');
            $table->string('category');
            $table->timestamps();
        });

        Schema::create('fbf_faq_category_fbf_laravel_simple_faqs', function($table)
        {
            $table->increments('id');
            $table->integer('fbf_faq_category_id');
            $table->integer('fbf_laravel_simple_faqs_id');
            $table->unique(array('fbf_faq_category_id', 'fbf_laravel_simple_faqs_id'));
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('fbf_faq_category');
        Schema::drop('fbf_faq_category_fbf_laravel_simple_faqs');
	}
}

