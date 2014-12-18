@extends('_page')


@section('content')
 
<h1>{{$recipe->recipe_name}}</h1>

<p>{{$recipe->type}}</p>
<p>{{$recipe->description}}</p>
<p>{{$recipe->recipe}}</p>


<h3>COMMENTS</h3>

<ul>

@foreach($recipe->reviews as $review)
	<li><p>{{$review->review}}</p></li>
	@endforeach

</ul>
<BR><BR>




<!--  RECIPE COMMENT/UPDATE/DELETE    -->

@if(Auth::check())
<div class="row">
  <div class="col-md-2"><a href='/recipe_comment/{{ $recipe->id }}'>Comment</a></div>
  <div class="col-md-2"><a href='/recipe_view/{{ $recipe->id }}/edit'>Edit</a>
</div>
  <div class="col-md-4">{{ Form::open(array('action' => 'RecipeController@makeRecipeDelete' )) }}
			{{ Form::hidden('id',$recipe['id']); }}
			
			{{Form::submit('Delete');}}
		{{ Form::close() }}</div>
</div>
@endif

		
		



	
	</div>	  



  
       
        
@stop