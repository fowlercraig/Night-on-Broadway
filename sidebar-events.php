<aside id="sidebar" role="complementary" class="desktop-4 padded">
  <?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
  <div id="primary" class="widget-area">
    <ul class="xoxo">
      <?php dynamic_sidebar( 'event-widget-area' ); ?>
    </ul>
  </div>
  <?php endif; ?>
</aside>
