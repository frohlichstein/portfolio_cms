<!-- Horizontal layout, place these items where you will! -->

<div class="project-info">

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
                    <?php print theme("project_share", array("project" => $project)); ?>
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

            </div>
        </div>

    </div>

</div>


<?php if($project->video): ?>
<div class="video"><?php print $project->video; ?></div>
<?php endif; ?>

<?php if($project->has_images): ?>
  <?php foreach($project->images as $image): ?>
  <div class="image"><?php print $image ?></div>
  <?php endforeach; ?>
<?php endif; ?>

<?php print theme("project_controls", array("project" => $project)); ?>
