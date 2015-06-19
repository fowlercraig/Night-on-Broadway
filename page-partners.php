<?php Themewrangler::setup_page();get_header(/***Template Name: Partners */); ?>

<div class="text-center">
<?php get_template_part('templates/page', 'header'); ?>
</div>

<?php

  if(get_field('full_width')){
    $pageWidth = 'desktop-12 tablet-6 mobile-3';
  } else {
    $pageWidth = 'desktop-8 tablet-4 mobile-3';
  }

  echo '<div class="row">';
    echo '<main class="'.$pageWidth.' padded">';
      get_template_part('templates/page', 'content');
      get_template_part('templates/flex', 'content');
      get_template_part('templates/flex', 'events');
    echo '</main>';
    if(get_field('full_width')){ } else {
      if(is_page('events')){
        get_sidebar('events');
      } else {
        get_sidebar();
      }

    }
  echo '</div>';

?>

<?php get_footer(); ?>