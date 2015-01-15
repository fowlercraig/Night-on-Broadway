<?php Themewrangler::setup_page();get_header(); ?>

<?php get_template_part('templates/page', 'header'); ?>

<?php

  if(get_field('full_width')){
    $pageWidth = 'desktop-12';
  } else {
    $pageWidth = 'desktop-8';
  }

  echo '<div class="row">';
    echo '<main class="'.$pageWidth.' padded">';
      get_template_part('templates/page', 'content');
      get_template_part('templates/flex', 'content');
      get_template_part('templates/flex', 'events');
    echo '</main>';
    if(get_field('full_width')){ } else {
      get_sidebar();
    }
  echo '</div>';

?>

<?php get_footer(); ?>