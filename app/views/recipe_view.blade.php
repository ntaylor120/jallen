<!--This page is for adding recipes to the recipe database.  Eventually, only an admin will have access to this page-->


@extends('_page')


@section('content')
 
<h1>{{$recipe->recipe_name}}</h1>

<p>{{$recipe->type}}</p>
<p>{{$recipe->description}}</p>
<p>{{$recipe->recipe}}</p>

  {{---- Edit ----}}
	<a href='/recipe_view/{{ $recipe->id }}/edit'>Edit</a>

	  
     
        
        
@stop