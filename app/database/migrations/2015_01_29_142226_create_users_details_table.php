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
			$table->boolean('sex');
			$table->boolean('marriage_status');
			$table->string('mobile', 15);
			$table->boolean('mobile_verified');
			$table->dateTime('mobile_updated_on');
			$table->smallInteger('house_number');
			$table->boolean('street_number');
			$table->string('area', 30);
			$table->string('town', 30);
			$table->string('city', 30);
			$table->string('state', 30);
			$table->string('country', 30);
			$table->string('pin_code', 10);
			$table->dateTime('address_updated_on');
			$table->text('pic', 65535);
			$table->dateTime('pic_updated_on');
			$table->integer('relative_id');
			$table->integer('relation_with_person');
			$table->boolean('newsletter');
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
