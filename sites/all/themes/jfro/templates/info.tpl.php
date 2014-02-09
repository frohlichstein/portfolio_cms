<?php if($instagram_photos): ?>
<h2>Recent Instagrams</h2>
<div class="instagram-photos">
  <?php foreach($instagram_photos as $photo_url): ?>
  <div class="photo"><img src="<?php print $photo_url; ?>" /></div>
  <?php endforeach; ?>  
</div>
<?php endif; ?>