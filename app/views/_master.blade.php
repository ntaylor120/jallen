<!DOCTYPE html>
<html lang="en">

 
  
  <head>
    
    @include('head')
    
  </head>
  

<body>

 
  @include('header')


  @include('header2')


  <div class="container">

	    
	      
	         
	          @yield('content')  
	            
	         
	      
    
	</div> <!--close container -->


	<footer>
	 
	 	@include('footer')
	                  
	</footer> 

</body>

</html>

