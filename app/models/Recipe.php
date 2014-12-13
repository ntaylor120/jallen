<?php

class Recipe extends Eloquent
{
	public function reviews(){
		#Recipe has many Reviews
		#Define a one-to-many relationship.

		return $this->hasMany('Review', 'recipe_id', 'id');


	}


	
}
