<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('first_name', 30);
			$table->string('middle_name', 30);
			$table->string('last_name', 30);
			$table->string('username', 30)->unique('username');
			$table->string('email', 60);
			$table->string('password', 60);
			$table->string('password_temp', 60);
			$table->dateTime('password_updated_at');
			$table->string('code', 60);
			$table->boolean('active');
			$table->date('dob');
			$table->boolean('sex');
			$table->boolean('marriage_status');
			$table->integer('relative_id');
			$table->integer('relation_with_person');
			$table->integer('mobile_number');
			$table->dateTime('mobile_updated_at');
			$table->string('add_1', 60);
			$table->string('add_2', 60);
			$table->string('city', 30);
			$table->string('state', 30);
			$table->string('country', 15);
			$table->string('pin_code', 10);
			$table->dateTime('address_updated_at');
			$table->string('pic', 100);
			$table->dateTime('pic_updated_at');
			$table->boolean('newsletter');
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
		Schema::drop('users');
	}

}
