<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('details', function($table)
		{
			$table->increments('did');
			$table->integer('user_id')->unique();
			$table->string('first_name',100);
			$table->string('last_name',100);
			$table->date('dob');
			$table->char('gender', 10);
			$table->text('address');
			$table->string('country');
			$table->string('state');
			$table->string('mobile_number');
			$table->integer('zip_code');
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
		Schema::drop('details');
	}

}
