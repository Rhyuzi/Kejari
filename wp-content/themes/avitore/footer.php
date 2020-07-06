<?php $avitore_redux_demo = get_option('redux_demo'); ?>
<footer class="footer">
    <?php if(isset($avitore_redux_demo['footer_image']) && $avitore_redux_demo['footer_image'] != ''){?>
        <div class="footer-main-area" style="background-image:url(<?php echo esc_url($avitore_redux_demo['footer_image']['url']);?>)">
    <?php }else{ ?>
        <div class="footer-main-area" style="background-image:url(<?php echo (get_template_directory_uri().'/assets/img/footer-bg.png');?>)">
    <?php } ?>
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-6 col-md-6">
            <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                <?php dynamic_sidebar( 'footer-area-1' ); ?>
            <?php endif; ?>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 pd-left50">
            <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>
                <?php dynamic_sidebar( 'footer-area-2' ); ?>
            <?php endif; ?>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 pd-left30">
            <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>
                <?php dynamic_sidebar( 'footer-area-3' ); ?>
            <?php endif; ?>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>
                <?php dynamic_sidebar( 'footer-area-4' ); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
<div class="footer-bottom-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="text-center">
        <?php if(isset($avitore_redux_demo['footer_text'])){?>
          <span class="text-light-gray"><?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['footer_text']));?></span>
        <?php } ?>
      </div>
  </div>
</div>
</div>
</div>
</footer>

<div class="back-to-top bg-primary-color">
        <i class="fab fa-angle-up"></i>
    </div>

<?php wp_footer(); ?>
</body>
</html>