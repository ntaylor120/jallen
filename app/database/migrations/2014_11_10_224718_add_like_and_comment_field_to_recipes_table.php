<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLikeAndCommentFieldToRecipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('recipes', function($table){

				$table->boolean('like_recipe');
				$table->string('recipe_comments');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('recipes', function($table){
			$table->dropColumn('like_recipe');
			$table->dropColumn('recipe_comments');


		});
	}

}
