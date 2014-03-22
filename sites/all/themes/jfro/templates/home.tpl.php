<div class="grid">
<?php foreach($projects as $project): ?>
<div class="col-1-4 projects thumb">
  <a href="<?php print $project->path ?>">
    <div class="image"><?php print $project->grid_image('medium'); ?></div>
    <div class="project-title">
        <h2><?php print $project->title; ?></h2>
    </div>
  </a>
</div>
<?php endforeach; ?>
</div>