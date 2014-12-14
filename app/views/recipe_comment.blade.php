<!--This page is for adding comments to recipes in the recipe database.  Eventually, only registered users will be able to access this page-->


@extends('_page')


@section('content')
 
<h1>{{$recipe->recipe_name}}</h1>


<!--  Show the recipe     -->

<p>{{$recipe->type}}</p>
<p>{{$recipe->description}}</p>
<p>{{$recipe->recipe}}</p>

  

  <!--  comment on the recipe     -->




     
        
        
@stop