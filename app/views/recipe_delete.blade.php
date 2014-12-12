<!--This page is for adding recipes to the recipe database.  Eventually, only an admin will have access to this page-->


@extends('_page')


@section('content')
 
<h1>Delete {{$recipe->recipe_name}}</h1>

{{ Form::open(array('action' => 'RecipeController@makeRecipeEdit', $recipe->id)) }}

 Name of Recipe<br>
              
 			{{ Form::label('recipe_name' ,'Name of Recipe:')}}	
              {{ Form::text('recipe_name', $recipe->recipe_name) }}<br><br>

              {{ Form::label('type' ,'Type of Recipe:')}}<br>
              {{ Form::select('type', array(
              	'Classic Vodka'=>'Classic Vodka Recipe',
              	'Classic Brandy'=>'Classic Brandy Recipe',
              	'Signature Vodka'=>'Signature Vodka Recipe',
              	'Signature Brandy'=>'Signature Brandy Recipe',
              	'Other'=>'Other'
              	

             ))}}<br><br>

              {{ Form::label('description' ,'Description of Recipe:')}}<br>
              {{ Form::text('description', $recipe->description) }}<br><br>

              {{ Form::label('recipe' ,'Recipe:')}}<br>
              {{ Form::textarea('recipe', $recipe->recipe) }}<br><br>

              {{Form::hidden('id', $recipe->id)}}

              {{ Form::submit('Update Recipe')}}<br>


{{Form::close()}}





  

	  
     
        
        
@stop