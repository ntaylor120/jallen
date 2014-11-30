<?php

class Recipe extends Eloquent
{
	public function review(){
		#Recipe has many Reviews
		#Define a one-to-many relationship.

		return $this->hasMany('Reviews');


	}


	
}
