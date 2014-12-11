<!DOCTYPE html>
<html lang="en">

 
  
  <head>
    
    @include('head')
    
  </head>
  

<body>

	 @include('header')

<!--Check for any flash messages, and show them if they exist -->
	

 
 


  


  <div class="container">

	    
	      
	         
	          @yield('content')  
	            
	         
	      
    
	


	<footer>
		 @if(Session::get('flash_message'))
        <div class='flash-message'>{{ Session::get('flash_message') }}</div>
    @endif
	 
	 	@include('footer')
	                  
	</footer> 

</body>

</html>

