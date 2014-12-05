@extends('_page')


@section('content')

<div class="container-fluid">
  <div class="span12 pull-left">
 
  
      <div class="row">
       <div class="span12 pull-left">
          <h1>Brand X Login</h1>
      </div>  <!--close span -->
      </div>

      <p>&nbsp;</p>

      
      <!-- /app/views/login.blade.php -->
          <h2>Log in</h2>

          {{ Form::open(array('url' => '/login')) }}

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