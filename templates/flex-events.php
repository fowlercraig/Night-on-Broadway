<?php

// check if the flexible content field has rows of data
if( have_rows('events') ):

    $location_counter = 1; 

    echo '<div id="events-grid" class="row">';

    while ( have_rows('events') ) : the_row();

        if( get_row_layout() == 'event_location' ):

          include('flex/events.php');

        elseif( get_row_layout() == 'gallery_block' ):

          include('flex/gallery.php');

        elseif( get_row_layout() == 'download' ): 

        	$file = get_sub_field('file');

        endif;

        $location_counter++;

    endwhile;

    echo '</div>';

endif;

?>
