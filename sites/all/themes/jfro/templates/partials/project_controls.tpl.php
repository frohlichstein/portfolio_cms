<?php if($project->prev): ?>
<div class="project-prev"><a href="<?php print $project->prev; ?>">Prev</a></div>
<?php endif; ?>

<div class="project-home"><a href="/">Home</a></div>

<?php if($project->next): ?>
<div class="project-next"><a href="<?php print $project->next; ?>">Next</a></div>
<?php endif; ?>