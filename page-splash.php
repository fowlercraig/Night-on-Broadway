<?php Themewrangler::setup_page();get_header( 'splash'/***Template Name: Splash Page */); ?>

  <?php 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
  ?>

  <div id="bg-header" style="background-image: url(<?php echo $thumb_url; ?>)"></div>
  <div id="button-wrapper"><?php the_field('additional_content'); ?></div>
  <div id="wrapper">
    <div class="row">
      <div class="desktop-6 desktop-push-3 text-center">
        <?php 

          get_template_part('templates/page', 'content');
          get_template_part('templates/flex', 'content');

        ?>
      </div>
    </div>
  </div>

<?php get_footer('splash'); ?>