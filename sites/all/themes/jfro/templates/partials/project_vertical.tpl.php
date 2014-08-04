<!-- Vertical layout, place these items where you will! -->

<div class="project-layout-vert grid">

  <aside class="col-1-4 left-sidebar project-info">

    <h1 class="project-title"><?php print $project->title; ?></h1>

    <div class="project-description">
      <div class="wrap">

        <?php if($project->body): ?>
        <div class="body"><?php print $project->body; ?></div>
        <?php endif; ?>

        <?php if($project->link): ?>
        <p class="site-link"><a href="<?php print $project->link; ?>"><?php print str_replace("http://", "", $project->link); ?></a></p>
        <?php endif; ?>

        <div class="social-links">
          <?php print theme("project_share", array("project" => $project)); ?>
        </div>

      </div>
    </div>

    <div class="grid">
    
      <div class="project-credits">
        <div class="wrap">
          <?php if($project->extra_info_1): ?>
          <?php print $project->extra_info_1; ?>
          <?php endif; ?>
        </div>
      </div>
  
      <div class="project-awards">
        <div class="wrap">
          <?php if($project->extra_info_2): ?>
          <?php print $project->extra_info_2; ?>
          <?php endif; ?>
        </div>
      </div>
      
    </div>

  </aside>

  <section class="col-3-4">
    <div class="project-images">
      <?php if($project->video): ?>
      <div class="video"><?php print $project->video; ?></div>
      <?php endif; ?>
      
      <?php if($project->has_images): ?>
      <?php foreach($project->images as $image): ?>
      <div class="image image-<?php print $image["classname"] ?>"><?php print $image["markup"] ?></div>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </section>

</div>

<?php print theme("project_controls", array("project" => $project)); ?>
