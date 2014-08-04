<header class="header">
  <div class="wrapper">
    <h1 class="logo"><a href="/">Jason Frohlichstein <span class="quote">pronounces his name jay sun fraw lick steen.</span></a></h1>
    <a href="mailto:hello@jasonfrohlichstein.com" class="hello">Hello</a>
  </div>
</header>

<nav class="nav">
  <div class="wrapper">
    <?php print $main_menu; ?>
    <div class="categories">
      <a href="" class="cat-toggle"><span class="cat-open">+</span><span class="cat-close">-</span></a>
      <?php print $cat_menu; ?>
    </div>
  </div>
</nav>

<section id="main" class="main">
  <div class="wrapper">
    <?php print $messages; ?>
    <?php print render($page['content']); ?>
  </div>
</section>

<footer class="footer">
  <div class="wrapper">
    <div class="copyright">Jason Frohlichstein &copy;<?php echo date('Y'); ?> <a href="">Web Developer</a>: Brad Sawicki</div>
    <div class="contact-email"><a href="">hello@jasonfrohlichstein.com</a></div>
  </div>
</footer>