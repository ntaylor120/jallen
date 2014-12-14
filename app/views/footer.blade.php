<!--This contains the footer that goes on every page.  This is included on the _main and _page blade templates-->


<footer class="span2 offset10">
	<p>&nbsp;</p>
	<div class col-lg-3 pull-left>
    	&copy; 2014 J Allen Imports
    </div>
    <div class col-lg-3 pull-right>

    	@if(Auth::check())
    	<a href='/logout'>Log out {{ Auth::user()->email; }}</a>
		@else 
    	<a href='/signup'>Sign up</a> or <a href='/login'>Log in</a>
		@endif


    </div>
    </footer>

    <!-- close of container div !-->
</div>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
	$('#jslide').carousel({
		interval: 5000,
		cycle: true
		});

</script>
</div>
</body>
</html>
