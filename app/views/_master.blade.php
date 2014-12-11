<!DOCTYPE html>
<html lang="en">

 
  
  <head>
    
    @include('head')
    
  </head>
  

<body>
	@include('header')
<div class="container-fluid">

 

<!--Check for any flash messages, and show them if they exist -->

@if(Session::get('flash_message'))
    <div class='flash-message'>{{ Session::get('flash_message') }}</div>
@endif

 
 


  @include('header2')


  <div class="container-fluid">

	    
	      
	         
	          @yield('content')  
	            
	         
	      
    
	</div> <!--close container -->


	<footer>
	 
	 	@include('footer')
	                  
	</footer> 

</body>

</html>

