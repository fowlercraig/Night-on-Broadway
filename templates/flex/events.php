
  <div id="location_<?php echo $location_counter; ?>" class="location desktop-12 tablet-3 mobile-3 sizer-item contained">

    <div class="wrapper">

      <div class="row">

        <div class="desktop-2">
          <?php 
            $location_image = get_sub_field('location_photo');
          ?>
          <?php if( !empty($location_image) ): ?><img src="<?php echo $location_image['sizes']['thumbnail']; ?>" class="left img-responsive rounded" /><?php endif; ?>
        </div>

        <div class="desktop-10">

      <div class="location-meta">
        <span class="title"><?php the_sub_field('location_name'); ?></span><br>
        <span class="location-address"><?php the_sub_field('event_location'); ?></span>
      </div>

      <div class="location-events">
        <?php if( have_rows('location_events') ): $event_counter = 1; while ( have_rows('location_events') ) : the_row(); ?>
        <div class="event">

          <?php 

            if( get_sub_field('recurring_act') ) {

              $uniqueID = get_sub_field('event_identfier');

            } else {

              $uniqueID = $event_counter;

            }

          ?>

          <div class="row">
            <div class="desktop-12 tablet-2 mobile-3 contained">
              <?php if( get_sub_field('event_start_time') ) { ?>
              <span class="event_time"><?php the_sub_field('event_start_time')?>-<?php the_sub_field('event_end_time')?> — </span>
              <?php } ?>
              <span class="title"><?php the_sub_field('event_name'); ?></span>
              <a href="#location_<?php echo $location_counter; ?>_event_<?php echo $uniqueID; ?>" class="popup right">More Info</a>
            </div>
          </div>

          <div id="location_<?php echo $location_counter; ?>_event_<?php echo $uniqueID; ?>" class="mfp-hide white-popup-block event-popup">
            <div class="more-info-window">
              <div class="mfp-close"></div>
              <?php 
                $image = get_sub_field('event_image');
              ?>
              <div class="upper"><?php if( !empty($image) ): ?><img src="<?php echo $image['sizes']['large']; ?>" class="img-responsive" /><?php endif; ?></div>
              <div class="lower">
                <span class="title"><?php the_sub_field('event_name'); ?></span><br>
                <?php the_sub_field('event_description'); ?>
                <?php if( get_sub_field('event_url') ) { ?><a href="<?php the_sub_field('event_url'); ?>">More info</a><?php } ?>
              </div>
            </div>
          </div>

        </div>
        <?php $event_counter++; endwhile; endif; ?>
      </div>

    </div>

    </div>

  </div>

</div>