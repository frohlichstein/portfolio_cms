<?php foreach($projects as $project): ?>
<div class="project">
  <a href="<?php print $project->path ?>">
    <div class="image"><?php print $project->grid_image('medium'); ?></div>
    <div class="title"><?php print $project->title; ?></div>
  </a>
</div>
<?php endforeach; ?>