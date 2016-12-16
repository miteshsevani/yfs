	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">	   
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <span class="navbar-brand visible-xs">
			<a href="https://www.facebook.com/youth4sewa/" target="_blank"><span class="fa fa-facebook"></span></a>
			<a href="https://twitter.com/YouthforSewa" target="_blank"><span class="fa fa-twitter"></span></a>
	      </span>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-left">
	        <li <?php print $activeHome;?>><a href="/">Home</a></li>	        
	        <!--li <?php print $activeAbout;?>><a href="/about/">About</a></li-->
	        <li <?php print $activeProjects;?>><a href="/our-projects/">Our Projects</a></li>
	        <li <?php print $activeGallery;?>><a href="/gallery/">Gallery</a></li>
	        <li <?php print $activeBlog;?>><a href="/blog/">Blog</a></li>	        
	        <li <?php print $activeFAQ;?>><a href="/faqs/">FAQs</a></li>
	        <li <?php print $activeApply;?>><a href="/apply/">Apply</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right hidden-xs">	      	
			<li><a href="mailto:yfs@sewauk.org"><i class="fa fa-envelope" aria-hidden="true"></i>yfs@sewauk.org</a></li>
			<a href="https://www.facebook.com/youth4sewa/" target="_blank"><li class="fa fa-facebook"></li></a>
			<a href="https://twitter.com/YouthforSewa" target="_blank"><li class="fa fa-twitter"></li></a>
	      </ul>
	    </div>
	  </div>
	</nav>