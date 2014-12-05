<!--The header contains the navbar used on all pages, this appears on _main and _page blade templates!-->


<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/main">J. Allen Imports</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/main">Home</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="about_product">About our Products</a></li>
            <li><a href="about_us">About Us</a></li>
          </ul>
        </li>



        
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Products <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="products_vodka">Vodka</a></li>
            <li><a href="products_beer">Beer</a></li>
            <li><a href="products_rum">Rum</a></li>
            <li><a href="products_cognac">Cognac</a></li>
            <li><a href="products_brandy">Brandy</a></li>
          </ul>
        </li>




        <li><a href="/recipe">Mixology</a></li>
        <li><a href="/food">Food Recipes/Pairings</a></li>
        <li><a href="/gear">Gear</a></li>
        <li><a href="/events">Events</a></li>
        

<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">MyAccount <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="login">Log In</a></li>
            <li><a href="signup">Sign Up</a></li>
            <li><a href="logout">Log Out</a></li>
            <li><a href="account_edit">Edit My Account</a></li>
            <li><a href="account_forgotPassword">I forgot my Password!</a></li>
            
          </ul>
        </li>




      </ul>
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>