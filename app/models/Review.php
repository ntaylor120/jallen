<?php

class Review extends Eloquent
{	
	public function recipe(){

		#Review belongs to Recipe
		#Define an inverse one-to-many relationship

		return $this->belongsTo('Recipe');


	}


	
}
