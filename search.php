<?php Themewrangler::setup_page();get_header(); ?>

<div class="row">
<div class="desktop-12">
  <div class="page-header"><h1><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1></div>
  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'entry' ); ?>
  <?php endwhile; ?>
  <?php else : ?>
  <div class="page-content"><p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p></div>
  <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>