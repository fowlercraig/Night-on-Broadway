</div>
</div>
</section>

<footer id="foot">
  <div class="row">
    <div class="desktop-8">
      <a class="green" id="logo" href="/"><?php bloginfo('name'); ?> &copy; <?php the_time('Y'); ?></a> |
      <a class="green" href="http://wearegiants.com">Designed by WeAreGiants.</a>
    </div>
  </div>
</footer><!--Footer-->

</div><!-- Wrapper -->

<div class="side-menu toggle">
  <div class="side-wrapper">
    <nav class="side-nav">
      <a class="target show-mobile toggle_linked ss-gizmo ss-plus rotate-45" data-swap-target=".toggle" data-swap-linked='.toggle_linked'></a>
      <?php wp_nav_menu( array( 'theme_location'=>'main-menu','items_wrap'=> '%3$s','container_class'=>'menu desktop-9 tablet-6 mobile-3','walker' => new MV_Cleaner_Walker_Nav_Menu() ) ); ?>
    </nav>
  </div>
</div>

<?php wp_footer(); ?>
<?php include locate_template('/lib/photoswipe.php' );?>

<script src="//platform.twitter.com/oct.js" type="mce-text/javascript"></script><script type="mce-text/javascript">
// <![CDATA[
twttr.conversion.trackPid('l5dta');
// ]]>
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6024076552740&amp;amp;cd[value]=0.00&amp;amp;cd[currency]=USD&amp;amp;noscript=1" /></noscript></p>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35986901-14', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>