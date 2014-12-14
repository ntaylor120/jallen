<!--This page is for adding comments to recipes in the recipe database.  Only registered users have to access this page-->


@extends('_page')


@section('content')
 
 <h1>{{$recipe->recipe_name}}</h1>


<!--  Show the recipe     -->

<p>{{$recipe->type}}</p>
<p>{{$recipe->description}}</p>
<p>{{$recipe->recipe}}</p>  



<h3>Add your comment/review here:</h3><br>

{{ Form::open(array('url' => '/recipe_comment')) }}

              

              
              {{ Form::textarea('review') }}<br><br>

              {{ Form::submit('Submit') }}

          {{ Form::close() }}


        
        
@stop