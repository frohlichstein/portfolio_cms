<div class="project-nav">
    <?php if($project->prev): ?>
    <a class="previous" href="<?php print $project->prev; ?>"></a>
    <?php endif; ?>
    
    <?php if($project->next): ?>
    <a class="next" href="<?php print $project->next; ?>"></a>
    <?php endif; ?>
    
    <a href="" class="up"></a>
    <a class="back-to-thumbs" href="/"></a>
</div>


