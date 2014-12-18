<?php

class Recipe extends Eloquent
{
	public function reviews(){
		#Recipe has many Reviews
		#Define a one-to-many relationship.

		return $this->hasMany('Review', 'recipe_id', 'id');


	}


	# Model events...
	# http://laravel.com/docs/eloquent#model-events
	public static function boot() {
        parent::boot();
         static::deleting(function($recipe) { // called BEFORE delete()
        foreach($recipe->reviews as $review)
        {
            $review->delete(); // Causes any child "deleted" events to be called
        }
    });
	}





    



	
}
