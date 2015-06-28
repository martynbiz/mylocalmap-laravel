<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('listings', function(Blueprint $table)
		{
			$table->increments('id');
			
			// fields
			$table->string('name');
			$table->string('description_short');
			$table->text('description_long');
			$table->string('address');
			$table->integer('city_id')
				->unsigned()
				->index();
			$table->decimal('lat', 10, 6);
			$table->decimal('lng', 10, 6);
			$table->integer('user_id')
				->unsigned()
				->index();
			
			// timestamps
			$table->timestamps();
			$table->softDeletes();
			
			$table->foreign('city_id')
				->references('id')
				->on('cities');
			
			$table->foreign('user_id')
				->references('id')
				->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('listings');
	}

}
