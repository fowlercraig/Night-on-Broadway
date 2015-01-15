
  <div id="location_<?php echo $location_counter; ?>" class="location desktop-12 tablet-3 mobile-3 sizer-item contained">

    <div class="wrapper">

      <div class="row">

        <div class="desktop-2">
          <img src="/assets/img/orpheum.jpg" alt="" class="left img-responsive rounded"/>
        </div>

        <div class="desktop-10">

      <div class="location-meta">
        <span class="title"><?php the_sub_field('location_name'); ?></span><br>
        <span class="location-address"><?php the_sub_field('event_location'); ?></span>
      </div>

      <div class="location-events">
        <?php if( have_rows('location_events') ): $event_counter = 1; while ( have_rows('location_events') ) : the_row(); ?>
        <div class="event">

          <div class="row">
            <div class="desktop-12 tablet-2 mobile-3 contained">
              <span class="event_time">TK-TKpm — </span>
              <span class="title"><?php the_sub_field('event_name'); ?></span>
              <a href="#location_<?php echo $location_counter; ?>_event_<?php echo $event_counter; ?>" class="popup">| More Info</a>
            </div>
          </div>

          <div id="location_<?php echo $location_counter; ?>_event_<?php echo $event_counter; ?>" class="mfp-hide white-popup-block event-popup">
            <div class="more-info-window">
              <div class="mfp-close"></div>
              <div class="upper"><img src="http://i.imgur.com/N7cvBcd.jpg" class="img-responsive" /></div>
              <div class="lower">
                <span class="title"><?php the_sub_field('event_name'); ?></span><br>
                <span class="event_time">TK-TKpm at The Globe</span>
                <?php the_sub_field('event_description'); ?>
                <a href="#">More info</a>
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