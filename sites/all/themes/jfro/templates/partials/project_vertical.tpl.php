<!-- Vertical layout, place these items where you will! -->

<h1><?php print $project->title; ?></h1>

<?php if($project->body): ?>
<div class="body"><?php print $project->body; ?></div>
<?php endif; ?>

<?php if($project->link): ?>
<a href="<?php print $project->link; ?>"><?php print str_replace("http://", "", $project->link); ?></a>
<?php endif; ?>

<?php if($project->extra_info_1): ?>
<div class="extra_info_1"><?php print $project->extra_info_1; ?></div>
<?php endif; ?>

<?php if($project->extra_info_2): ?>
<div class="extra_info_2"><?php print $project->extra_info_2; ?></div>
<?php endif; ?>

<?php print theme("project_share", array("project" => $project)); ?>

<?php if($project->has_images): ?>
  <?php foreach($project->images('medium') as $image): ?>
  <div class="image"><?php print $image ?></div>
  <?php endforeach; ?>
<?php endif; ?>

<?php print theme("project_controls", array("project" => $project)); ?>
