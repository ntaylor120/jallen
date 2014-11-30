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

Route::get('/', function()
{
	return View::make('index');
});



Route::post('/', function()
{

/*This code tests to see if the user is 21 or over, of they are, they are sent to the main page, if not, they are sent to an 
underage page.  Need to add code so that once the user is verified, that they are allowed access to entire site.  */
$allowed_age = 21;
$bdate = strtotime($_REQUEST['whatYear'].'-'.$_REQUEST['whatMonth']."-".$_REQUEST['whatDay']);
$age = (time()-$bdate)/31536000;
if($age >= $allowed_age) {
    return View::make('main');
} 
else {     
    return View::make('underage');
}




    //if yes is checked, create a cookie
    $response->withCookie(Cookie::make('name', 'value', $minutes));



    //if remember me is checked, create a forever cookie
    $cookie = Cookie::forever('name', 'value');

});

Route::get('underage', function()
{
    return View::make('underage');
});


Route::get('main', function()
{
    return View::make('main');
});

Route::get('/about', function()
{
	return View::make('about');
});


Route::get('/test', function()
{
    return View::make('test');
});

Route::get('/products', function()
{
    return View::make('products');
});

Route::get('add_recipe', function()
{
    
    return View::make('add_recipe');
});

Route::post('/add_recipe', function() {
    
        

    # Instantiate a new recipe model class
    $recipe = new Recipe();

    # Set 
    $recipe->recipe_name = Input::get('recipe_name');
    $recipe->description = Input::get('description');
    $recipe->type = Input::get('type');
    $recipe->recipe = Input::get('recipe');
    

    # This is where the Eloquent ORM magic happens
    $recipe->save();

    return 'A new recipe has been added! Check your database to see...';

});




Route::get('/recipeAdded', function()
{
    return View::make('recipe_added');
});





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




//******************TEST ROUTES*********************************


Route::get('/practice-creating', function() {

    # Instantiate a new recipe model class
    $recipe = new Recipe();

    # Set 
    $recipe->recipe_name = 'Grasshopper2';
    $recipe->description = 'A delicious use of Brand X Vodka';
    $recipe->type = 'Classic Vodka';
    $recipe->recipe = 'XX ounces Brand X Vodka <br /> XX ounces Creme de Minthe<br /> XX ounces Creame de Cocoa B<br />XX ounces Ingredient C<br />Mixing Instructions.<br /> Serving Instructions<br /> Garnishing Instructions</p>';
    

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

