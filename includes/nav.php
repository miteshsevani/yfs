	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>	      
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-left">
	        <li <?php print $activeHome;?>><a href="/">Home</a></li>	        
	        <li <?php print $activeProjects;?>><a href="/our-projects/">Our Projects</a></li>
	        <li <?php print $activeGallery;?>><a href="/gallery/">Gallery</a></li>
	        <li <?php print $activeBlog;?>><a href="/blog/">Blog</a></li>
	        <li <?php print $activeApply;?>><a href="/apply/">Apply</a></li>
	        <li <?php print $activeFAQ;?>><a href="/faqs/">FAQs</a></li>
	      </ul>

	      <ul class="nav navbar-nav navbar-right">
			<li><a href="mailto:yfs@sewauk.org"><i class="fa fa-envelope" aria-hidden="true"></i>yfs@sewauk.org</a></li>
			<li class="fa fa-facebook"><a href="https://www.facebook.com/youth4sewa/" target="_blank"></a></li>
	      </ul>
	    </div>
	  </div>
	</nav>