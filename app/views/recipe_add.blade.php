<!--This page is for adding recipes to the recipe database.  Eventually, only an admin will have access to this page-->


@extends('_page')


@section('content')
 
<h1>Add A Drink Mix Recipe</h1>
<p>&nbsp;</p>



 @foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
    @endforeach

  <p>&nbsp;</p>



{{ Form::open(array('url' => '/recipe_add')) }}

              Name of Recipe<br>
              {{ Form::text('recipe_name') }}<br><br>

              What type of recipe is this?<br>
              {{ Form::select('type', array(
                'Classic Vodka'=>'Classic Vodka Recipe',
                'Classic Brandy'=>'Classic Brandy Recipe',
                'Signature Vodka'=>'Signature Vodka Recipe',
                'Signature Brandy'=>'Signature Brandy Recipe',
                'Other'=>'Other'
                

             ))}}<br><br>

              Please enter a brief description<br>
              {{ Form::text('description') }}<br><br>

              Please enter the recipe<br>
              {{ Form::textarea('recipe') }}<br><br>

              {{ Form::submit('Submit') }}

          {{ Form::close() }}






       
        
        
@stop