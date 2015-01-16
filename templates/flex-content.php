<?php

// check if the flexible content field has rows of data
if( have_rows('page_modules') ):

     // loop through the rows of data
    while ( have_rows('page_modules') ) : the_row();

        if( get_row_layout() == 'activity_blocks' ):

          include('flex/home-blocks.php');

        elseif( get_row_layout() == 'partners_block' ):

          include('flex/partners.php');

        elseif( get_row_layout() == 'gallery_block' ):

          include('flex/gallery.php');

        elseif( get_row_layout() == 'download' ): 

        	$file = get_sub_field('file');

        endif;

    endwhile;

endif;

?>