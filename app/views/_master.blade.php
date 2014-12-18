<!DOCTYPE html>
<html lang="en">

 
  
  <head>
    
    @include('head')
    
  </head>
  

<body>
	@include('header')

	@if(Session::get('flash_message'))
    <div class='flash-message'>{{ Session::get('flash_message') }}</div>
@endif
 
<div class="container-fluid">

 

<!--Check for any flash messages, and show them if they exist -->



 


  @include('header2')


  <div class="container-fluid">

	    
	      
	         
	          @yield('content')  
	            
	         
	      
    
	</div> <!--close container -->


	<footer>

		
		@include('footer2')
	 
	 	@include('footer')
	                  
	</footer> 

</body>

</html>

