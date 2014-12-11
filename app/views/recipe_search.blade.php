<!--This page is for adding recipes to the recipe database.  Eventually, only an admin will have access to this page-->


@extends('_page')


@section('content')
 
<h1>Drink Recipes</h1>

<p>&nbsp;</p>
<p>&nbsp;</p>

	 <div class="row">
      <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <h4>Classic Vodka Mixed Drinks</h4>
          <h5><a href="recipe_clVodka">Classic Vodka drinks made with X Vodka</a></h5>
          
         </div>

       <div class="row">
      <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <h4>Classic Brandy Mixed Drinks</hh4>
          <h5><a href="recipe_clBrandy">Classic Brandy drinks made with X Brandy</a></h5>
         
         </div>

         <div class="row">
      <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <h4>Signature Vodka Mixed Drinks</hh4>
          <h5><a href="recipe_sigVodka">Signature Vodka drinks made with X Vodka</a></h5>
          
         </div>

         <div class="row">
      <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <h4>Signature Brandy Mixed Drinks</hh4>
          <h5><a href="recipe_sigBrandy">Signature Brandy drinks made with X Brandy</a></h5>
          
         </div>

         <p>&nbsp;</p>

         <h5>Not sure where to look?  Use this search tool instead:</h5>


         {{ Form::open(array('url' => '/recipe', 'method' => 'GET')) }}

    {{ Form::label('query','Search') }}

    {{ Form::text('query'); }}

    {{ Form::submit('Search'); }}

  {{ Form::close() }}

$query = Input::get('query');

  @if($query)
    <h2>You searched for {{{ $query }}}</h2>
  @endif

  @if(sizeof($recipes) == 0)
    No results
  @else

    @foreach($recipes as $recipe)
      <section>

        <h2>{{ $recipe['recipe_name'] }}</h2>

        <p>
          <a href='/recipe/edit/{{$recipe['id']}}'>Edit</a>
        </p>

        <p>
          {{ $recipe['type']['description'] }} 
        </p>

       
      </section>
    @endforeach

  @endif

        
      </div>
      </div>

	

       
        
        
@stop