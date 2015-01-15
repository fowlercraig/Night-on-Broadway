
  <div class="location desktop-12 tablet-3 mobile-3 sizer-item contained">

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
        <?php if( have_rows('location_events') ): while ( have_rows('location_events') ) : the_row(); ?>
        <div class="event">

          <div class="row">
            <div class="desktop-2 tablet-2 mobile-3"><span class="event_time">4-6pm</span></div>
            <div class="desktop-8 tablet-2 mobile-3"><span class="title"><?php the_sub_field('event_name'); ?></span><a href="#">More Info</a></div>
          </div>

        </div>
        <?php endwhile; endif; ?>
      </div>

    </div>

    </div>

  </div>

</div>