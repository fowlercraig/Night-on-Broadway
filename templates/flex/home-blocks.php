<?php

if( have_rows('activity') ):

  echo '<div id="activity-blocks" class="row">';

    while ( have_rows('activity') ) : the_row();

        $post_object = get_sub_field('page');
        $post = $post_object;
        setup_postdata( $post ); 
        get_template_part('templates/snippets/activity', 'block');
        wp_reset_postdata(); 

    endwhile;

    echo '</div>';

endif;

?>