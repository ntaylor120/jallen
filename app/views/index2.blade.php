@extends('_page')


@section('content')
  <div class="container">

    <div class="jumbotron">
     <div class="row">
      <div class="col-xs-12"> 

        <h2>Welcome to Brand X Vodka</h2>
        <p>&nbsp;</p>
            
        <h2> Are you 21 years of age or over?</h2>

        <p>&nbsp;</p>
         
          
          {{ Form::open(array('url' => '/')) }}

              <div class="col-xs-6"> 
              <h3>Yes</h3>
              {{ Form::radio('yes') }}<br><br>
              </div>

              <div class="col-xs-6"> 
              <h3>No:</h3>
             {{ Form::radio('no') }}<br><br>
           </div>
            <p>&nbsp;</p>
              {{ Form::submit('Submit') }}

          {{ Form::close() }}

      
        </div><!--close column-->
       
        </div> <!--close row-->
      </div><!--close jumbotron-->
    </div><!--close container-->
@stop