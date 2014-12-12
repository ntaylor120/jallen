<?php

class RecipeController extends BaseController {


    /* 

    * main recipe view  

    */

	public function showRecipes()
	{

		return View::make('recipe');
	}


    /* 
     * These are the sub-views, each view displays only the drink recipes for that type (classic vodka, classic brandy
    *  signature vodka, signature brandy, or other) 
    */

	public function showClVodka()

	{

	$recipes = DB::table('recipes')->where('type', 'LIKE', '%Classic Vodka%')->get();    
    return View::make('recipe_clVodka')->with('recipes', $recipes);


    }


    public function showClBrandy()
    {

    	$recipes = DB::table('recipes')->where('type', 'LIKE', '%Classic Brandy%')->get();    
    	return View::make('recipe_clBrandy')->with('recipes', $recipes);;

    }


    public function showSigVodka()
    {

		$recipes = DB::table('recipes')->where('type', 'LIKE', '%Signature Vodka%')->get();    
    	return View::make('recipe_sigVodka')->with('recipes', $recipes);;

    }


     public function showSigBrandy()
    {

		$recipes = DB::table('recipes')->where('type', 'LIKE', '%Signature Brandy%')->get();    
    	return View::make('recipe_sigBrandy')->with('recipes', $recipes);;

    }

    public function showOther()
    {

        $recipes = DB::table('recipes')->where('type', 'LIKE', '%Other%')->get();    
        return View::make('recipe_other')->with('recipes', $recipes);;

    }


    /* 
     *  display an individual recipe   
     */


    public function showRecipeView($id) {
        try {
            $recipe = Recipe::findOrFail($id);
        }
        catch(Exception $e) {
            return Redirect::to('/recipe_view')->with('flash_message', 'Recipe not found');
        }

        
        return View::make('recipe_view')->with('recipe', $recipe);
    }

   
     /* 
     *  display form to add a recipe 
     */

   public function showRecipeAdd()
    {

        
    	return View::make('recipe_add');
    }


    /* 
     *  add recipe to the database   
     */
 

    public function makeRecipe()

    {


    	#create new drink mix recipe using the Recipe model,  and add to recipes database
	    $recipe = new Recipe();
	    $recipe->recipe_name = Input::get('recipe_name');
	    $recipe->description = Input::get('description');
	    $recipe->type = Input::get('type');
        $recipe->recipe = Input::get('recipe');
	    
	    $recipe->save();

	    return View::make('recipe_added');

    }

    /* 
     *  confirm recipe has been added 
     */


    public function showRecipeAdded()
    {

        
        return View::make('recipe_added');
    }

    /* 
     *  edit recipe 
     */

    public function showRecipeEdit($id)
    {
        try {
            $recipe = Recipe::findOrFail($id);
        }
        catch(Exception $e) {
            return Redirect::to('/recipe_view')->with('flash_message', 'Recipe not found');
        }

        return View::make('recipe_edit')->with('recipe', $recipe);
    }


    /*
     * Edit/Update a recipe in the recipes database
     *
     * @param  int  $id
     * @return Response
      */
    
    public function makeRecipeEdit($id) {
        
        

        try {
            $recipe = Recipe::findOrFail($id);
        }
        catch(Exception $e) {
            return Redirect::to('/recipe_edit')->with('flash_message', 'Recipe not found');
        }
        $recipe->recipe_name = Input::get('recipe_name');
        $recipe->description = Input::get('description');
        $recipe->type = Input::get('type');
        $recipe->recipe = Input::get('recipe');
        
        $recipe->save();
     
        return View::make('recipe_updated')->with('flash_message','Your recipe has been saved.');
    }


    public function showRecipeUpdated()
    {
        return View::make('recipe_updated');
    }



/*
    * Process the "Edit a recipe form"
    * 
    
    public function makeRecipeEdit() {
        try {
            $recipe = Recipe::findOrFail(Input::get('id'));
        }
        catch(exception $e) {
            return Redirect::to('/recipe')->with('flash_message', 'Recipe not found');
        }
        # http://laravel.com/docs/4.2/eloquent#mass-assignment
        $recipe->fill(Input::all());
        $recipe->save();
        return Redirect::action('RecipeController@showRecipeUpdated')->with('flash_message','Your changes have been saved.');
    }

 */


    


    /* 
     *  delete recipe   
    


    * Process book deletion
    *
    * @return Redirect

     */
    
    public function makeRecipeDelete() {



        try {
            $recipe = Recipe::findOrFail(Input::get('id'));
        }
        catch(exception $e) {
            return Redirect::to('/recipe')->with('flash_message', 'Could not delete recipe - not found.');
        }

        

        $recipe->delete();


        /*Recipe::destroy(Input::get('id'));*/
        return Redirect::to('/recipe')->with('flash_message', 'Recipe deleted.');
    }
   


}
