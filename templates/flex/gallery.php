
<?php $images = get_field('gallery'); if( $images ): ?>

<div class="row">
<div id="gallery">

<?php foreach( $images as $image ): ?>

  <figure class="desktop-4 tablet-2 mobile-1" itemscope itemtype="http://schema.org/ImageObject">

    <a href="<?php echo $image['sizes']['gallery-full']; ?>" itemprop="contentUrl" data-size="<?php echo $image['sizes']['gallery-full-width']; ?>x<?php echo $image['sizes']['gallery-full-height']; ?>">
      <img src="<?php echo $image['sizes']['gallery-thumb']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" itemprop="thumbnail"/>
    </a>
    <figcaption itemprop="caption description"><?php echo $image['caption']; ?></figcaption>

  </figure>

<?php endforeach; ?>

</div>
</div>

<?php endif; ?>
