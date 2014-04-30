<!-- Facebook SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=628195393871910";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Twitter SDK -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<div class="share-fb">
  <div class="fb-like" data-href="<?php print $project->path(TRUE); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
</div>

<div class="share-twitter">
  <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php print $project->path(TRUE); ?>">Tweet</a>
</div>