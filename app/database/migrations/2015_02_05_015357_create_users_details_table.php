<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_details', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('first_name', 30);
			$table->string('middle_name', 30);
			$table->string('last_name', 30);
			$table->string('username', 30)->unique('username');
			$table->date('dob');
			$table->string('sex', 7);
			$table->boolean('married');
			$table->string('mobile', 15);
			$table->dateTime('mobile_updated_on');
			$table->integer('house_number');
			$table->string('street_number', 20);
			$table->string('area', 20);
			$table->string('town', 20);
			$table->string('city', 30);
			$table->string('state', 30);
			$table->string('country', 15);
			$table->string('pin_code', 10);
			$table->dateTime('address_updated_on');
			$table->text('pic', 65535);
			$table->dateTime('pic_updated_on');
			$table->integer('relative_id');
			$table->integer('relation_with_person');
			$table->dateTime('created_on');
			$table->dateTime('update_on');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_details');
	}

}
