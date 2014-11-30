<?php

class Review extends Eloquent
{	
	public function recipe(){

		#Review belongs to Recipe
		#Devine an inverse one-to-many relationship

		return $this->belongsTo('Recipe');


	}


	
}
