Schema::create('like', function($table)
		{
			$table->increments('lid');
			$table->integer('user_id');
			$table->integer('post_id');
			$table->integer('like')->default(0);
			$table->timestamps();
		});<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tag', function($table)
		{
			$table->increments('tid');
			$table->integer('post_id');
			$table->string('subtag');
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
		Schema::drop('tag');
	}

}
