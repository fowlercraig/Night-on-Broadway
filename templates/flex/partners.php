<?php $images = get_sub_field('partners'); if( $images ): ?>

<div class="row" id="partners">
  <div class="desktop-10 tablet-6 mobile-3 centered">
    <div class="row">
      <?php foreach( $images as $image ): ?>
      <a href="<?php echo $image['description']; ?>" class="partner <?php echo $image['caption']; ?> contained">
      <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />
      </a>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="desktop-12 tablet-6 mobile-3"><?php the_sub_field('simple_partners');?>
</div>
<?php endif; ?>