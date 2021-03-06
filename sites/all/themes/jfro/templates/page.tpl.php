<header class="header">
  <div class="wrapper">
    <h1 class="logo"><a href="/" class="mark"><img src="/sites/all/themes/jfro/assets/images/logo.svg" alt="Frohlichstein Inc"></a> <span class="quote">pronounces his name jay sun fraw lick steen.</span></h1>
    <a href="mailto:hello@frohlichsteininc.com" class="hello">Hello</a>
  </div>
</header>

<nav class="nav">
  <div class="wrapper">
    <?php print $main_menu; ?>
    <div class="categories">
      <a href="" class="cat-toggle"><span class="cat-open">+</span><span class="cat-close">-</span></a>
      <ul class="cat-nav">
        <li><a href="/">View All</a></li>
        <li><a href="/projects/design">Design</a></li>
        <li><a href="/projects/illustration">Illustration</a></li>
        <li><a href="/projects/icons">Icons</a></li>
        <li><a href="/projects/art">Art</a></li>
      </ul>
      <?php // print $cat_menu; ?>
    </div>
  </div>
</nav>

<nav class="fixed-nav">
  <div class="wrapper">
    <div class="eff">F.</div>
    <?php print $main_menu; ?>
    <a href="" class="scroll-top"></a>
    <a href="mailto:hello@frohlichsteininc.com" class="hello">Hello</a>
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
    <div class="contact-email"><a href="">hello@frohlichsteininc.com</a></div>
    <div class="copyright">The Studio of Jason Frohlichstein &copy;<?php echo date('Y'); ?> <span class="brad-link"><a href="http://bradsawicki.com/" target="_blank">Web Developer</a>: Brad Sawicki</span></div>
  </div>
</footer>