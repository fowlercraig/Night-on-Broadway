<?php

// check if the flexible content field has rows of data
if( have_rows('events') ):

    echo '<div id="events-grid" class="row"><div class="desktop-8"><div class="row">';

    while ( have_rows('events') ) : the_row();

        if( get_row_layout() == 'event_location' ):

          include('flex/events.php');

        elseif( get_row_layout() == 'gallery_block' ):

          include('flex/gallery.php');

        elseif( get_row_layout() == 'download' ): 

        	$file = get_sub_field('file');

        endif;

    endwhile;

    echo '</div></div></div>';

endif;

?>
