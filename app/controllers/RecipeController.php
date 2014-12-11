<?php

class RecipeController extends BaseController {


    /* main recipe view  */

	public function showRecipes()
	{

		return View::make('recipe');
	}


    /* These are the sub-views, each view displays only the drink recipes for that type (classic vodka, classic brandy
        signature vodka, signature brandy, or other)  */

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


/**
     * Display the individual recipe (find by $id).
     *
     * @param  int  $id
     * @return Response
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

   public function showRecipeAdd()
    {

        
    	return View::make('recipe_add');
    }
 

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


    public function showRecipeAdded()
    {

        
        return View::make('recipe_added');
    }


    


}
