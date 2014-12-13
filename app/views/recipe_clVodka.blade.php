<!--This page is for viewing the list of available recipes-->


@extends('_page')


@section('content')
 
<h1>Classic Vodka Recipes</h1>

<p>Classic and timeless drinks made with Brand X Vodka
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>

<!--search is performed in route to create an object of recipes where the type is Classic Vodka, sends to view as $recipes -->

<ul>
@foreach($recipes as $recipe)
  <li> <a href='/recipe_view/{{ $recipe->id }}'>{{ $recipe->recipe_name }}</a><br></li>
  <!--<li><a href="{{ URL::action('RecipeController@showRecipeView', $recipe->id) }}">{{{ $recipe->recipe_name }}}</a></li>-->
@endforeach 
</ul>
    
</p>

        
      </div>
      </div>

	

       
        
        
@stop

