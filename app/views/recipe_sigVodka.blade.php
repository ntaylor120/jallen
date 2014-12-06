<!--This page is for adding recipes to the recipe database.  Eventually, only an admin will have access to this page-->


@extends('_page')


@section('content')
 
<h1>Signature Vodka Recipes</h1>

<p>Signature and new drinks made with Brand X Vodka
<p>&nbsp;</p>
<p>&nbsp;</p>

<!--search is performed in route to create an object of recipes where the type is Signature Vodka, sends to view as $recipes -->
@foreach($recipes as $recipe)
    {{$recipe->recipe_name.'<br>'}}
@endforeach 
      </div>
      </div>

  

       
        
        
@stop