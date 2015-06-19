<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
  if ( has_post_thumbnail() ) {
    $thumb_url = $thumb_url_array[0];
    $thumb_bg  = 'background-image: url(' . $thumb_url . ');';
  } else {
    $thumb_bg  = '';
  }
  if (get_sub_field('button_text')){
    $buttonText = get_sub_field('button_text');
  } else {
    $buttonText = 'Check It';
  }
?>

<div class="activity <?php the_sub_field('width'); ?> tablet-6 mobile-3" style="<?php echo $thumb_bg; ?>">
  <div class="meta text-center">
    <div class="centered">
      <div class="row">
        <div class="desktop-8 tablet-6 mobile-3 centered">
          <h3 class="title"><?php the_title(); ?></h3>
          <a href="<?php the_permalink(); ?>" class="button"><?php echo $buttonText; ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
