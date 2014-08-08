<div class="project-layout-horiz">

  <section class="project-info">

    <h1 class="project-title"><?php print $project->title; ?></h1>

    <div class="grid">
      <div class="col-1-2 project-description">
        <div class="wrap">

          <?php if($project->body): ?>
          <div class="body"><?php print $project->body; ?></div>
          <?php endif; ?>

          <?php if($project->link): ?>
          <p><a href="<?php print $project->link; ?>"><?php print str_replace("http://", "", $project->link); ?></a></p>
          <?php endif; ?>

          <div class="social-links">
            <a target="_blank" href="https://twitter.com/intent/tweet?original_referer=<?php echo $GLOBALS['base_url'] . $project->path; ?>&amp;source=tweetbutton&amp;text=<?php print $project->title; ?> - <?php echo $GLOBALS['base_url'] . $project->path; ?>" class="icon-twitter"></a>
            <a href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo $GLOBALS['base_url'] . $project->path; ?>" target="_blank" class="icon-facebook"></a>
          </div>

        </div>
      </div>
      <div class="col-1-4 col project-credits">
        <div class="wrap">

        <?php if($project->extra_info_1): ?>
        <?php print $project->extra_info_1; ?>
        <?php endif; ?>

        </div>
      </div>
      <div class="col-1-4 col project-awards">
        <div class="wrap">

        <?php if($project->extra_info_2): ?>
        <?php print $project->extra_info_2; ?>
        <?php endif; ?>

        <?php if($project->tags): ?>
          <p><strong>See Only:</strong>
          <?php foreach($project->tags as $tag): ?>
            <a href="/projects/<?php print strtolower($tag['taxonomy_term']->name); ?>">#<?php print $tag['taxonomy_term']->name; ?></a>
          <?php endforeach; ?>
          </p>
        <?php endif; ?>

        </div>
      </div>
    </div><!-- .grid -->
  </section>

  <section class="project-images">
    <?php if($project->video): ?>
    <div class="video image image-size-100">
      <div class="video-wrap">
        <?php print $project->video; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if($project->has_images): ?>
    <?php foreach($project->images as $image): ?>
    <div class="image image-<?php print $image["classname"] ?>"><?php print $image["markup"] ?></div>
    <?php endforeach; ?>
    <?php endif; ?>
  </section>

</div>

<?php print theme("project_controls", array("project" => $project)); ?>
