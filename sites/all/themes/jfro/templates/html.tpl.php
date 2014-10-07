<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript" src="//use.typekit.net/nwu6gqs.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body class="<?php print $classes; ?>">
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-55397103-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>