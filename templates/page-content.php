<?php while (have_posts()) : the_post(); ?>
<div class="row">
  <div class="page-content desktop-12 tablet-6 mobile-3">
    <div class="row">
      <div class="desktop-8 content tablet-6 mobile-3">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>
