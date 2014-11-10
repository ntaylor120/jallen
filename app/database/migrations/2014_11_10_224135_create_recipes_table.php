<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes', function($table){

			$table->increments('id');
			$table->timestamps();
			$table->string('recipe_name');
			$table->string('type');
			$table->string('description');
			$table->text('recipe');
			$table->binary('recipe_photo');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipes');
	}

}
