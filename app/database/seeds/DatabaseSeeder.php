<?php

class DatabaseSeeder extends Seeder {

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
         DB::table('recipes')->delete();
         //insert some dummy records
         DB::table('recipes')->insert(array(
            

array('recipe_name'=>'Classic Martini', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'1 1/2 ounces Brand X Vodka <br /> 3/4 ounces Vermouth<br /> Pour Vermouth into glass.Add Brand X Vodka.<br /> Serve neat or on the rocks<br /> Garnish if desired.The classic garnish is an olive, but many prefer a lemon twist</p>'),

array('recipe_name'=>'Bay Breeze', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Bloody Mary', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Black Russian', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Bloody Mary', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Ceasar', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Cape Codder', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Cosmopolitan', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Greyhound', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Jellos Shots', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX Package Jello – Any Flafor<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Kamikaze', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Lemon Drops', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Long Island Iced Tea', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Madras', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Martini Variations', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Mind Eraser', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Mudslide', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Raspberry Tatanka', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'San Francisco', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Sangrias', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Screwdriver', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces orange Juice<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Sea Breeze', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Sex on the Beach', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Vodka Sour', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Lemon Juice<br /> XX tsp Sugar<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Vodka Stinger', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'Vodka Tonic', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),

array('recipe_name'=>'White Russian', 'description' => 'A delicious use of Brand X Vodka', 'type' => 'Classic Vodka', 'recipe' =>'XX ounces Brand X Vodka <br /> XX ounces Ingredient<br /> XX ounces Ingredient B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>'),





          ));
       }
 
}