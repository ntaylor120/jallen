@extends('_page')


@section('content')

<div class="container-fluid">
  <div class="span12 pull-left">
 
  
      <div class="row">
       <div class="span12 pull-left">
          <h1>Brand X Signup</h1>
      </div>  <!--close span -->
      </div>

      <p>&nbsp;</p>

      <!-- /app/views/signup.blade.php -->
      <h2>Please use the form below to sign up:</h2>

          {{ Form::open(array('url' => '/signup')) }}

              Email<br>
              {{ Form::text('email') }}<br><br>

              Password:<br>
              {{ Form::password('password') }}<br><br>

              {{ Form::submit('Submit') }}

          {{ Form::close() }}



   </div>  <!--close main span 12-->
  </div>  <!--close main row-->
</div>  <!--close main container-->
<p>&nbsp;</p>

@stop