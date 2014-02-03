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
