<!--This page is for adding recipes to the recipe database.  Eventually, only an admin will have access to this page-->


@extends('_page')


@section('content')
 
<h1>Classic Brandy Recipes</h1>

<p>Classic and timeless drinks made with Brand X Brandy </p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<!--search is performed in route to create an object of recipes where the type is Classic Brandy, sends into to view as $recipes -->
<ul>
@foreach($recipes as $recipe)
 
  <li> <a href='/recipe_view/{{ $recipe->id }}'>{{ $recipe->recipe_name }}</a><br></li>
 
@endforeach 
</ul>

      </div>
      </div>

  

       
        
        
@stop