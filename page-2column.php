<?php Themewrangler::setup_page();get_header(/***Template Name: 2 Column */); ?>

<?php get_template_part('templates/page', 'header'); ?>

<main class="page row">
  <div class="page-content desktop-7 tablet-4 mobile-3">
  	<?php if(get_field('gallery_location') == "top"): echo '<hr class="invisible">'; include locate_template('templates/flex/gallery.php'); endif; ?>
  	<?php the_post(); the_content(); ?>
  	<?php if(get_field('gallery_location') == "bottom"): include locate_template('templates/flex/gallery.php'); endif; ?>
  </div>
  <div class="sidebar desktop-4 tablet-2 mobile-3 right"><?php the_field('sidebar_content'); ?></div>
</main>

<?php get_footer(); ?>