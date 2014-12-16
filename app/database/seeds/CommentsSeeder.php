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
        $this->command->info("Comments table seeded :)");
       }

}

class UsersTableSeeder extends Seeder {
 
       public function run()
       {
         //delete users table records
         DB::table('reviews')->delete();
         //insert some dummy records
         DB::table('reviews')->insert(array(
            

array('review'=>'yummy', 'recipe_id' => '1'),
array('review'=>'too sweet, left out sugar', 'recipe_id' => '2'),
array('review'=>'not sweet enought, added more sugar', 'recipe_id' => '2'),
array('review'=>'just right amount of sugar', 'recipe_id' => '2'),
array('review'=>'needed more vodka', 'recipe_id' => '3'),
array('review'=>'perfect!', 'recipe_id' => '4'),
array('review'=>'love it', 'recipe_id' => '5'),
array('review'=>'excellent!', 'recipe_id' => '6'),
array('review'=>'made a double batch!', 'recipe_id' => '7'),
array('review'=>'made a triple batch', 'recipe_id' => '8'),
array('review'=>'will make again, excellent rcipe', 'recipe_id' => '9'),


          ));
       }
 
}