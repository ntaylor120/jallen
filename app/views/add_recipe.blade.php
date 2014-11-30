<!--This page is for adding recipes to the recipe database.  Eventually, only an admin will have access to this page-->


@extends('_page')


@section('content')
 
<h1>Add A Drink Mix Recipe</h1>
<p>&nbsp;</p>

{{ Form::open(array('url' => '/add_recipe')) }}

              Name of Recipe<br>
              {{ Form::text('recipe_name') }}<br><br>

              What type of recipe is this?<br>
              {{ Form::text('type') }}<br><br>

              Please enter a brief description<br>
              {{ Form::text('description') }}<br><br>

              Please enter the recipe<br>
              {{ Form::text('description') }}<br><br>

              {{ Form::submit('Submit') }}

          {{ Form::close() }}




           
      


       
        
        
@stop