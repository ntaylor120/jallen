<!--The header contains the navbar used on all pages, this appears on _main and _page blade templates!-->


<nav class="navbar navbar-custom navbar-fixed-bottom" role="navigation">
 
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="main">J Allen Imports</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          @if(Auth::check())
              <li><a href='/logout'>Log out {{ Auth::user()->email; }}</a></li>
               @else 
               <li><a href='/signup'>Sign up</a></li>  <li><a href='/login'>Or Log in</a></li>
               @endif
             </li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">

       
         
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
         
      
         <li><a href="#">&copy; 2014 J Allen Imports</a></li>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>