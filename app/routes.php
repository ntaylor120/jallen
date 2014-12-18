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
| Menu Section:  Mixology (drink recipes)
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
Route::get('recipe_view/{id}/edit', 'RecipeController@showRecipeEdit');
Route::post('recipe_view/{id}/edit', 'RecipeController@makeRecipeEdit');
Route::get('recipe_edited', 'RecipeController@showRecipeEdited');
Route::get('recipe_updated', 'RecipeController@showRecipeEdited');
Route::get('recipe_added', 'RecipeController@showRecipeAdded');
Route::post('recipe_delete', 'RecipeController@makeRecipeDelete');

Route::get('recipe_deleted', 'RecipeController@showRecipeDeleted');

Route::get('recipe_comment/{id}', 'RecipeController@showRecipeComment');
Route::post('recipe_comment/{id}', 'RecipeController@makeRecipeComment');
Route::get('recipe_commented', 'RecipeController@showRecipeCommented');


Route::get('recipe_add', array(
    'before' => 'auth',
    function()
    {
        return View::make('recipe_add');
    }
));




Route::post('recipe_add', 'RecipeController@makeRecipe');







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

Route::get('/signup', array(
    'before' => 'guest',
    function()
    {
        return View::make('signup');
    }
));


Route::post('/signup', 'UserController@postSignup');


Route::get('/login', array(
    'before' => 'guest',
    function()
    {
        return View::make('login');
    }
));
Route::post('/login', array(
    'before' => 'csrf',
    function()
    {
        $credentials = Input::only('email', 'password');
        if (Auth::attempt($credentials, $remember = true)) {
            return Redirect::intended('main')->with('flash_message', 'Welcome Back!');
        } else {
            return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
        }
        return Redirect::to('login');
    }
));
# /app/routes.php
Route::get('/logout', function()
{
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