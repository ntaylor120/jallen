<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Menu Section:  Home
|--------------------------------------------------------------------------
|
| Home
| '/'
| 'main'
|
*/
Route::get('/', 'JallenController@showMain');
Route::get('main', 'JallenController@showMain');


/*
|--------------------------------------------------------------------------
| Menu Section:  About
|--------------------------------------------------------------------------
|
|A list of all routes/sub-menus found in the About section:
|
| about
| about_products
| about_us
|
*/

Route::get('about_us', 'JallenController@showAboutUs');
Route::get('about_product', 'JallenController@showAboutProduct');

/*
|--------------------------------------------------------------------------
| Menu Section:  Products
|--------------------------------------------------------------------------
|
|A list of all routes/sub-menus found in the Products section:
|
| products
| products_vodka
| products_cognac
| products_brandy
| products_beer
| products_rum
|
*/

Route::get('products_beer', 'JallenController@showProductsBeer');
Route::get('products_brandy', 'JallenController@showProductsBrandy');
Route::get('products_cognac', 'JallenController@showProductsCognac');
Route::get('products_rum', 'JallenController@showProductsRum');
Route::get('products_vodka', 'JallenController@showProductsVodka');

/*
|--------------------------------------------------------------------------
| Menu Section:  Mixology
|--------------------------------------------------------------------------
|
|A list of all routes/sub-menus found in the Mixology section:
|
| recipe:  main page used for searching for a mixed drink recipe
| recipe_view (view a signle recipe)  
| recipe_add
| recipe_edit
| recipe_comment
|
*/



Route::get('recipe', 'RecipeController@showRecipes');


/*Routes use controllers to search through database and display only recipes of type shown in route (clVodka, clBrandy, etc)*/

Route::get('recipe_clVodka', 'RecipeController@showClVodka');

Route::get('recipe_clBrandy', 'RecipeController@showClBrandy');

Route::get('recipe_sigVodka', 'RecipeController@showSigVodka');

Route::get('recipe_sigBrandy', 'RecipeController@showSigBrandy');

Route::get('recipe_other', 'RecipeController@showOther');





Route::get('recipe_view/{id}', 'RecipeController@showRecipeView');

Route::get('recipe_view/{id/edit}', 'RecipeController@showRecipeView');





Route::get('recipe_add', 'RecipeController@showRecipeAdd');

Route::post('recipe_add', 'RecipeController@makeRecipe');

Route::get('/recipe_added', 'RecipeController@showRecipeAdded');

Route::get('recipe_edit', function()
{
    
    return View::make('recipe_edit');
});
Route::get('recipe_comment', function()
{
    
    return View::make('recipe_comment');
});



/*
|--------------------------------------------------------------------------
| Menu Section:  Account
|--------------------------------------------------------------------------
|
|A list of all routes/sub-menus found in the Account section:
|
| login (log into existing account)
| logout (log out of existing account)
| signup (create a new account)
| account_edit
| account_forgotPassword
| 
*/
// app/routes.php`:
Route::get('/signup',
    array(
        'before' => 'guest',
        function() {
            return View::make('signup');
        }
    )
);
Route::post('/signup', 
    array(
        'before' => 'csrf', 
        function() {
            $user = new User;
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            # Try to add the user 
            try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput();
            }
            # Log the user in
            Auth::login($user);
            return Redirect::to('/main')->with('flash_message', 'Welcome to Brand X Vodka!');
        }
    )
);
Route::get('/login',
    array(
        'before' => 'guest',
        function() {
            return View::make('login');
        }
    )
);
Route::post('/login', 
    array(
        'before' => 'csrf', 
        function() {
            $credentials = Input::only('email', 'password');
            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('main')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }
            return Redirect::to('login');
        }
    )
);
# /app/routes.php
Route::get('/logout', function() {
    # Log out
    Auth::logout();
    # Send them to the homepage
    return Redirect::to('main')->with('flash_message', 'You have been logged out.');
});
Route::get('/account_edit', function()
{
    return View::make('account_edit');
});
Route::get('/account_forgotPassword', function()
{
    return View::make('account_forgotPassword');
});
/*
|--------------------------------------------------------------------------
| Menu Section: TEST ROUTES
|--------------------------------------------------------------------------
|
|REMOVE THESE IN PRODUCTION
| 
*/
Route::get('/practice-creating', function() {
    # Instantiate a new recipe model class
    $recipe = new Recipe();
    # Set 
    $recipe->recipe_name = 'Vodka Collins';
    $recipe->description = 'A delicious use of Brand X Vodka';
    $recipe->type = 'Signature Vodka';
    $recipe->recipe = '2 ounces Brand X Brandy <br /> 1 oz Dark crème de cacao<br /> 1 oz Cream/>garnish with freshly grated nutmeg<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>';
    
    # This is where the Eloquent ORM magic happens
    $recipe->save();
    return 'A new recipe has been added! Check your database to see...';
});
Route::get('/practice-reading', function() {
    # The all() method will fetch all the rows from a Model/table
    $recipes = Recipe::all();
    # Make sure we have results before trying to print them...
    if($recipes->isEmpty() != TRUE) {
        # Typically we'd pass $recipes to a View, but for quick and dirty demonstration, let's just output here...
        foreach($recipes as $recipe) {
            echo $recipe->recipe_name.'<br>';
        }
    }
    else {
        return 'No recipes found';
    }
});
Route::get('/practice-reading-one-recipe', function() {
    $recipe = Recipe::where('recipe_name', 'LIKE', '%Martini%')->first();
    if($recipe) {
        return $recipe->recipe_name;
    }
    else {
        return 'Recipe not found.';
    }
});
Route::get('/practice-updating', function() {
    # First get a recipe to update
    $recipe = Recipe::where('recipe_name', 'LIKE', '%Jellos%')->first();
    # If we found the recipe, update it
    if($recipe) {
        # Give it a different title
        $recipe->recipe_name = 'Jello Shots';
        # Save the changes
        $recipe->save();
        return "Update complete; check the database to see if your update worked...";
    }
    else {
        return "Recipe not found, can't update.";
    }
});
Route::get('/practice-deleting', function() {
    # First get a recipe to delete
    $recipe = Recipe::where('recipe_name', 'LIKE', '%2%')->first();
    # If we found the recipe, delete it
    if($recipe) {
        # Goodbye!
        $recipe->delete();
        return "Deletion complete; check the database to see if it worked...";
    }
    else {
        return "Can't delete - Recipe not found.";
    }
});
Route::get('mysql-test', function() {
    # Print environment
    echo 'Environment: '.App::environment().'<br>';
    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');
    # If the "Pre" package is not installed, you should output using print_r instead
    echo Pre::render($results);
});