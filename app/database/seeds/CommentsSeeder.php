<?php

class CommentsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

//call uses table seeder class
  $this->call('UsersTableSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Users table seeded :)");
       }

}

class UsersTableSeeder extends Seeder {
 
       public function run()
       {
         //delete users table records
         DB::table('comments')->delete();
         //insert some dummy records
         DB::table('comments')->insert(array(
            

array('comments'=>'yummy', 'recipe_id' => '1'),
array('comments'=>'too sweet, left out sugar', 'recipe_id' => '2'),
array('comments'=>'not sweet enought, added more sugar', 'recipe_id' => '2'),
array('comments'=>'just right amount of sugar', 'recipe_id' => '2'),
array('comments'=>'needed more vodka', 'recipe_id' => '3'),
array('comments'=>'perfect!', 'recipe_id' => '4'),
array('comments'=>'love it', 'recipe_id' => '5'),
array('comments'=>'excellent!', 'recipe_id' => '6'),
array('comments'=>'made a double batch!', 'recipe_id' => '7'),
array('comments'=>'made a triple batch', 'recipe_id' => '8'),
array('comments'=>'will make again, excellent rcipe', 'recipe_id' => '9'),

          ));
       }
 
}