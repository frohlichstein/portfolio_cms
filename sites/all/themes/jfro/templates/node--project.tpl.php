<?php // This template file simply determines which partial to render. ?>
<?php // Edit the partial files to customize the different layouts. ?>

<?php if($project->layout == "vertical"): ?>
  <?php print theme("project_vertical", array("project" => $project)); ?>
<?php elseif($project->layout == "horizontal"): ?>
  <?php print theme("project_horizontal", array("project" => $project)); ?>
<?php endif; ?>