<?php Themewrangler::setup_page();get_header(); ?>

<div class="row">
<div class="desktop-12">
  <article>
    <div class="page-header"><h1><?php _e( 'Not Found', 'blankslate' ); ?></h1></div>
    <div class="page-content"><p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p></div>
    <?php get_search_form(); ?>
  </article>
</div>
</div>

<?php get_footer(); ?>