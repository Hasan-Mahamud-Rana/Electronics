<!-- <div class="promo">
<?php //get_sidebar( 'footertop' ); ?>
<?php //get_sidebar( 'footermenu' ); ?>
</div> -->
<?php get_sidebar( 'footerlocation' ); ?>
</section>
<a class="exit-off-canvas"></a> </div>
</div>
<script>
jQuery(document).foundation();
</script>
<?php if ( is_front_page() ) { ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.6/jquery.mousewheel.min.js"></script>
<script src="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.5/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/homepage.js"></script>
<?php } ?>
<?php if ( is_page( 'losninger' )) { ?>
<!--[if lt IE 9]>
  <script>
    document.createElement('figure');
    document.createElement('figcaption');
  </script>
<![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/losninger.js"></script>
<?php } ?>
<?php if ( is_page( 'viking-commerce' )) { ?>
<!--[if lt IE 9]>
  <script>
    document.createElement('figure');
    document.createElement('figcaption');
  </script>
<![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/viking-commerce.js"></script>
<?php } ?>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<script id="CookieConsent" src="https://policy.cookieinformation.com/uc.js" data-cbid="874980f8-2470-4103-9ea0-79333f15e01a" type="text/javascript"></script>
</body>
</html>