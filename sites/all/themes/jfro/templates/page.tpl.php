
	<header class="header">
		<div class="wrapper cf">
			<h1 class="logo"><a href="./">Jason Frohlichstein <span class="quote">pronounces his name jay sun fraw lick steen.</span></a></h1>
			<a href="mailto:hello@jasonfrohlichstein.com" class="hello">Hello</a>
		</div>
	</header>
	
    <nav class="nav">
		<div class="wrapper cf">
    	    <?php print $main_menu; ?>
    	    <div class="categories">
    	        <a href="" class="cat-open">+</a>
    	        <ul class="cat-nav">
    	            <li><a href="">View All</a></li>
    	            <li><a href="">Design</a></li>
    	            <li><a href="">Art</a></li>
    	            <li><a href="">Illustration</a></li>
    	            <li><a href="">Icons</a></li>
    	        </ul>
    	    </div>
		</div>
	</nav>

	<section id="main" class="main">
		<div class="wrapper">
            
            <?php print $messages; ?>
            <?php print render($page['content']); ?>
        
		</div>
	</section>
	
	<footer class="footer cf">
		<div class="wrapper cf">
			<div class="copyright">Jason Frohlichstein &copy;<?php echo date('Y'); ?> <a href="">Web Developer</a>: Brad Sawicki</div>
			<div class="contact-email"><a href="">hello@jasonfrohlichstein.com</a></div>
		</div>
	</footer>