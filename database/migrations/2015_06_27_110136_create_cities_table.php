<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function(Blueprint $table)
		{
			$table->increments('id');
			
			// fields
			$table->string('name');
			$table->integer('region_id')
				->unsigned()
				->index();
			$table->decimal('lat', 10, 6);
			$table->decimal('lng', 10, 6);
			$table->string('time_zone');
			$table->string('code');
			
			// timestamps
			$table->timestamps();
			$table->softDeletes();
			
			$table->foreign('region_id')
				->references('id')
				->on('regions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cities');
	}

}
