<?php
class RecipeController extends BaseController
{
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
        return View::make('recipe_clBrandy')->with('recipes', $recipes);
        ;
    }
    public function showSigVodka()
    {
        $recipes = DB::table('recipes')->where('type', 'LIKE', '%Signature Vodka%')->get();
        return View::make('recipe_sigVodka')->with('recipes', $recipes);
        ;
    }
    public function showSigBrandy()
    {
        $recipes = DB::table('recipes')->where('type', 'LIKE', '%Signature Brandy%')->get();
        return View::make('recipe_sigBrandy')->with('recipes', $recipes);
        ;
    }
    public function showOther()
    {
        $recipes = DB::table('recipes')->where('type', 'LIKE', '%Other%')->get();
        return View::make('recipe_other')->with('recipes', $recipes);
        ;
    }
    /* 
     *  display an individual recipe   
     */
    public function showRecipeView($id)
    {
        try {
            $recipe = Recipe::findOrFail($id);
        }
        catch (Exception $e) {
            return Redirect::to('/recipe_view')->with('flash_message', 'Recipe not found');
        }
        return View::make('recipe_view')->with('recipe', $recipe);
    }
    
    /* 
     *  display form to add a recipe 
     */
    public function showRecipeAdd()
    {
        
        /*only logged in users go to this page/create recipes */
        $this->beforeFilter('auth');
        
        return View::make('recipe_add');
    }
    /* 
     *  add recipe to the database   
     */
    
    public function makeRecipe()
    {
        
        # rules
        $rules = array(
            'before' => 'csrf',
            'recipe_name' => 'required',
            'description' => 'required',
            'recipe' => 'required'
        );
        
        # validator
        $validator = Validator::make(Input::all(), $rules);
        
        # handle failures
        
        if ($validator->fails()) {
            return Redirect::to('/recipe_add')->with('flash_message', 'The recipe was not added; please fix the errors listed below.')->withInput()->withErrors($validator);
        }
        
        
        
        #create new drink mix recipe using the Recipe model,  and add to recipes database
        $recipe              = new Recipe();
        $recipe->recipe_name = Input::get('recipe_name');
        $recipe->description = Input::get('description');
        $recipe->type        = Input::get('type');
        $recipe->recipe      = Input::get('recipe');
        
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
        catch (Exception $e) {
            return Redirect::to('/recipe_view')->with('flash_message', 'Recipe not found');
        }
        return View::make('recipe_edit')->with('recipe', $recipe);
    }
    /**
     * Edit/Update a recipe in the recipes database
     *
     * @param  int  $id
     * @return Response
     */
    public function makeRecipeEdit($id)
    {
        try {
            $recipe = Recipe::findOrFail($id);
        }
        catch (Exception $e) {
            return Redirect::to('/recipe_edit')->with('flash_message', 'Recipe not found');
        }
        $recipe->recipe_name = Input::get('recipe_name');
        $recipe->description = Input::get('description');
        $recipe->type        = Input::get('type');
        $recipe->recipe      = Input::get('recipe');
        
        $recipe->save();
        
        return View::make('main')->with('flash_message', 'Your recipe has been saved.');
    }
    
    /* 
     *  delete recipe   
     */
    
    public function makeRecipeDelete()
    {
        try {
            $recipe = Recipe::findOrFail(Input::get('id'));
        }
        catch (exception $e) {
            return Redirect::to('/recipe')->with('flash_message', 'Could not delete recipe - not found.');
        }

           
        $recipe->delete();
        /*Recipe::destroy(Input::get('id'));*/
        return Redirect::to('/recipe')->with('flash_message', 'Recipe deleted.');
    }

    
    
    
    /* 
     *  display form to add a comment 
     */
    public function showRecipeComment($id)
    {
        try {
            $recipe = Recipe::findOrFail($id);
        }
        catch (Exception $e) {
            return Redirect::to('/recipe_view')->with('flash_message', 'Recipe not found');
        }
        
        /*only logged in users go to this page/create recipes */
        $this->beforeFilter('auth');
        
        return View::make('recipe_comment')->with('recipe', $recipe);
        
        
    }
    
    
    public function makeRecipeComment($id)
    {
         
        try {
            $recipe = Recipe::findOrFail($id);
        }
        catch (Exception $e) {
            return Redirect::to('/recipe_view')->with('flash_message', 'Recipe not found');
        }
        
        /*only logged in users go to this page/create recipes */
        $this->beforeFilter('auth');
      
        
        
        
        
        #create new drink mix review using the Recipe model,  and add to reviews table
        $review            = new Review();
        $review->review    = Input::get('review');
        $review->recipe()->associate($recipe);
        
        
        
        $review->save();
        return View::make('main')->with('flash_message', 'Your comment has been saved.');
    }
    
}