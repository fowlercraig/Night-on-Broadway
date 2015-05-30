<?php Themewrangler::setup_page();get_header(/***Template Name: 2016 */); ?>

<div class="row">
<div class="desktop-12 tablet-6 mobile-3">

<?php

  get_template_part('templates/page', 'content');
  get_template_part('templates/flex', 'content');

?>

</div>
</div>

<?php get_footer(); ?>