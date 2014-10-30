<nav id="nav-wrap">
	<a class="mobile-btn" href="#nav-wrap" title="Montrer le menu">Montrer le menu</a>
	<a class="mobile-btn" href="#" title="Cacher le menu">Cacher le menu</a>
	<ul id="nav" class="nav">
		<li <?php if($page_type=='home') echo 'class="current"'; ?>><a class="smoothscroll" href="Home#home">Home</a></li>
		<li><a class="smoothscroll" href="Home#about">A propos</a></li>
		<li><a class="smoothscroll" href="Home#resume">CV</a></li>
		<li><a class="smoothscroll" href="Home#contact">Contact</a></li>
		<li <?php if($page_type=='blog') echo 'class="current"'; ?>><a href="blog.php">Blog</a></li>
	</ul> <!-- end #nav -->
</nav> <!-- end #nav-wrap -->