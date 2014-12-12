<!--This page is for adding recipes to the recipe database.  Eventually, only an admin will have access to this page-->


@extends('_page')


@section('content')
 
<h1>{{$recipe->recipe_name}}</h1>

<p>{{$recipe->type}}</p>
<p>{{$recipe->description}}</p>
<p>{{$recipe->recipe}}</p>

  

  <!--  comment on the recipe     -->

<a href='/recipe_comment/{{ $recipe->id }}'>Comment</a>

<!--  Edit the recipe     -->
<a href='/recipe_view/{{ $recipe->id }}/edit'>Edit</a>



<!--  Delete the recipe     -->

<div>
		
		{{ Form::open(array('action' => 'RecipeController@makeRecipeDelete' )) }}
			{{ Form::hidden('id',$recipe['id']); }}
			<!--<button onClick='parentNode.submit();return false;'>Delete</button>-->
			{{Form::submit('Delete');}}
		{{ Form::close() }}
	</div>	  
     
        
        
@stop