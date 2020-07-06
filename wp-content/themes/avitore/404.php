<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
$avitore_redux_demo = get_option('redux_demo');
get_header('404'); ?> 

<div class="error-area vh d-flex" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg/404.jpg);" data-overlay-light="94">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="error-inner text-center">
            <h1 class="error-title"><?php if(isset($avitore_redux_demo['404_title']) && $avitore_redux_demo['404_title'] != ''){?>
                <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['404_title']));?>
                <?php }else{?>
                <?php echo esc_html__( '404', 'avitore' );
                }?></h1>
            <h2 class="error-text"><?php if(isset($avitore_redux_demo['404_subtitle']) && $avitore_redux_demo['404_subtitle'] != ''){?>
                <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['404_subtitle']));?>
                <?php }else{?>
                <?php echo esc_html__( 'Sorry, something went wrong!', 'avitore' );
                }?></h2>
            <p><?php echo esc_html__( 'This page is temporarily unavailable due to maintenance. We will back very soon thanks for your patience', 'avitore' );?></p>
            <a class="cs-btn-one btn-md btn-primary-color" href="<?php echo esc_url(home_url('/')); ?>"><?php if(isset($avitore_redux_demo['404_text']) && $avitore_redux_demo['404_text'] != ''){?>
                <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['404_text']));?>
                <?php }else{?>
                <?php echo esc_html__( 'Back To Home Page', 'avitore' );
                }?></a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer('404'); ?>

