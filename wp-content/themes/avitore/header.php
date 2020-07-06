<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<?php $avitore_redux_demo = get_option('redux_demo'); ?>

<head>

    <!-- Meta Tags -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {?>

        <?php if(isset($avitore_redux_demo['favicon']['url'])){?>

            <link rel="shortcut icon" href="<?php echo esc_url($avitore_redux_demo['favicon']['url']); ?>">

        <?php } ?>

    <?php } ?>

    <?php wp_head(); ?> 



</head>

<body <?php body_class(); ?>>

    <!-- start preloader -->

    <div class="preloader"></div>

<!-- Preloader End -->

<!-- header Start -->

<header class="header-style-two">

    <div class="header-wrapper">

      <div class="header-top-area bg-primary-color d-none d-lg-block">

        <div class="container">

          <div class="row">

            <div class="col-lg-6 header-top-left-part">

                <?php if(isset($avitore_redux_demo['header_address'])){?>

                    <span class="address"><i class="webexflaticon flaticon-placeholder-1"></i> <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['header_address']));?></span>

                <?php } ?>

                <?php if(isset($avitore_redux_demo['header_email'])){?>

                  <span class="phone"><i class="webexflaticon flaticon-send"></i> <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['header_email']));?></span>

              <?php } ?>

          </div>

          <div class="col-lg-6 header-top-right-part text-right">

              <ul class="social-links">

                <li><a href="<?php echo esc_url($avitore_redux_demo['header_link_facebook']);?>"><i class="fab fa-facebook-f"></i></a></li>

                <li><a href="<?php echo esc_url($avitore_redux_demo['header_link_twitter']);?>"><i class="fab fa-twitter"></i></a></li>

                <li><a href="<?php echo esc_url($avitore_redux_demo['header_link_linkedin']);?>"><i class="fab fa-linkedin"></i></a></li>

                <li><a href="<?php echo esc_url($avitore_redux_demo['header_link_google']);?>"><i class="fab fa-google-plus"></i></a></li>

            </ul>

            <div class="language">

                <?php if(isset($avitore_redux_demo['header_lang_1'])){?>

                    <a class="language-btn" href="<?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['link_lang_1']));?>"><i class="webexflaticon flaticon-internet"></i> <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['header_lang_1']));?></a>

                <?php } ?>

                <ul class="language-dropdown">

                    <?php if(isset($avitore_redux_demo['header_lang_2'])){?>

                      <li><a href="<?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['link_lang_2']));?>"><?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['header_lang_2']));?></a></li>

                      <?php } ?>

                      <?php if(isset($avitore_redux_demo['header_lang_3'])){?>

                        <li><a href="<?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['link_lang_3']));?>"><?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['header_lang_3']));?></a></li>

                    <?php } ?>

                    <?php if(isset($avitore_redux_demo['header_lang_4'])){?>

                        <li><a href="<?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['link_lang_4']));?>"><?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['header_lang_4']));?></a></li>

                    <?php } ?>

                    <?php if(isset($avitore_redux_demo['header_lang_5'])){?>

                        <li><a href="<?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['link_lang_5']));?>"><?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['header_lang_5']));?></a></li>

                    <?php } ?>

                </ul>

        </div>

    </div>

</div>

</div>

</div>

<div class="header-navigation-area three-layers-header">

    <div class="container">

      <div class="row">

        <div class="col-xl-12 col-lg-12">

          <?php if(isset($avitore_redux_demo['header_logo']['url']) && $avitore_redux_demo['header_logo']['url'] != ''){?>

                <a class="navbar-brand logo" href="<?php echo esc_url(home_url('/')); ?>">

                    <img id="logo-image" class="img-center" src="<?php echo esc_url($avitore_redux_demo['header_logo']['url']);?>" alt="">

                </a>

            <?php }else{?>

                <div class="logo">

                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo (get_template_directory_uri().'/assets/images/logo.png');?>" alt="" /></a>

                </div>

            <?php } ?>

<div class="main-menu">

    <nav id="mobile-menu">

      <?php 

      wp_nav_menu( 

        array( 

            'theme_location' => 'primary',

            'container' => '',

            'menu_class' => '', 

            'menu_id' => '',

            'menu'            => '',

            'container_class' => '',

            'container_id'    => '',

            'echo'            => true,

            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

            'walker'            => new avitore_wp_bootstrap_navwalker(),

            'before'          => '',

            'after'           => '',

            'link_before'     => '',

            'link_after'      => '',

            'items_wrap'      => '<ul  class="%2$s">%3$s</ul>',

            'depth'           => 0,        

        )

    ); ?>

</nav>

</div>

<div class="side-panel-content">

    <div class="close-icon">

        <button><i class="webex-icon-cross"></i></button>

    </div>

    <?php if(isset($avitore_redux_demo['header_logo_2']['url']) && $avitore_redux_demo['header_logo_2']['url'] != ''){?>

        <div class="side-panel-logo mrb-30">

            <a href="<?php echo esc_url(home_url('/')); ?>">

                <img src="<?php echo esc_url($avitore_redux_demo['header_logo_2']['url']);?>" alt="" />

            </a>

        </div>

    <?php }else{?>

        <div class="side-panel-logo mrb-30">

            <a href="<?php echo esc_url(home_url('/')); ?>">

                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-sidebar-dark.png" alt="" />

            </a>

        </div>

    <?php } ?>

    <div class="side-info mrb-30">

      <div class="side-panel-element mrb-25">

        <?php if(isset($avitore_redux_demo['side_panel_title'])){?>

        <h4 class="mrb-10"><?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['side_panel_title']));?></h4>

        <?php } ?>

        <ul class="list-items">

            <?php if(isset($avitore_redux_demo['side_panel_address'])){?>

                <li><span class="fa fa-globe mrr-10 text-primary-color"></span><?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['side_panel_address']));?></li>

            <?php } ?>

            <?php if(isset($avitore_redux_demo['side_panel_email'])){?>

                <li><span class="fa fa-envelope-o mrr-10 text-primary-color"></span><?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['side_panel_email']));?></li>

            <?php } ?>

            <?php if(isset($avitore_redux_demo['side_panel_phone'])){?>

                <li><span class="fa fa-phone mrr-10 text-primary-color"></span><?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['side_panel_phone']));?></li>

            <?php } ?>

      </ul>

  </div>

  <div class="side-panel-element mrb-30">

    <?php if(isset($avitore_redux_demo['side_panel_title_2'])){?>

    <h4 class="mrb-15"><?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['side_panel_title_2']));?></h4>

    <?php } ?>

    <ul class="pintarest-list">

        <?php if(isset($avitore_redux_demo['header_image_1']['url']) && $avitore_redux_demo['header_image_1']['url'] != ''){?>

            <li><a href="#"><img class="img-full" src="<?php echo esc_url($avitore_redux_demo['header_image_1']['url']);?>" alt=""></a></li>

        <?php }else{?>

            <li><a href="#"><img class="img-full" src="<?php echo get_template_directory_uri();?>/assets/img/side-panel/1.jpg" alt=""></a></li>

        <?php } ?>

        <?php if(isset($avitore_redux_demo['header_image_2']['url']) && $avitore_redux_demo['header_image_2']['url'] != ''){?>

            <li><a href="#"><img class="img-full" src="<?php echo esc_url($avitore_redux_demo['header_image_2']['url']);?>" alt=""></a></li>

        <?php }else{?>

            <li><a href="#"><img class="img-full" src="<?php echo get_template_directory_uri();?>/assets/img/side-panel/2.jpg" alt=""></a></li>

        <?php } ?>

        <?php if(isset($avitore_redux_demo['header_image_3']['url']) && $avitore_redux_demo['header_image_3']['url'] != ''){?>

            <li><a href="#"><img class="img-full" src="<?php echo esc_url($avitore_redux_demo['header_image_3']['url']);?>" alt=""></a></li>

        <?php }else{?>

            <li><a href="#"><img class="img-full" src="<?php echo get_template_directory_uri();?>/assets/img/side-panel/3.jpg" alt=""></a></li>

        <?php } ?>

        <?php if(isset($avitore_redux_demo['header_image_4']['url']) && $avitore_redux_demo['header_image_4']['url'] != ''){?>

            <li><a href="#"><img class="img-full" src="<?php echo esc_url($avitore_redux_demo['header_image_4']['url']);?>" alt=""></a></li>

        <?php }else{?>

            <li><a href="#"><img class="img-full" src="<?php echo get_template_directory_uri();?>/assets/img/side-panel/4.jpg" alt=""></a></li>

        <?php } ?> 

        <?php if(isset($avitore_redux_demo['header_image_5']['url']) && $avitore_redux_demo['header_image_5']['url'] != ''){?>

            <li><a href="#"><img class="img-full" src="<?php echo esc_url($avitore_redux_demo['header_image_5']['url']);?>" alt=""></a></li>

        <?php }else{?>

            <li><a href="#"><img class="img-full" src="<?php echo get_template_directory_uri();?>/assets/img/side-panel/5.jpg" alt=""></a></li>

        <?php } ?> 

        <?php if(isset($avitore_redux_demo['header_image_6']['url']) && $avitore_redux_demo['header_image_6']['url'] != ''){?>

            <li><a href="#"><img class="img-full" src="<?php echo esc_url($avitore_redux_demo['header_image_6']['url']);?>" alt=""></a></li>

        <?php }else{?>

            <li><a href="#"><img class="img-full" src="<?php echo get_template_directory_uri();?>/assets/img/side-panel/6.jpg" alt=""></a></li>

        <?php } ?> 

    </ul>

</div>

</div>

<?php if(isset($avitore_redux_demo['side_panel_title_3'])){?>

<h4 class="mrb-15"><?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['side_panel_title_3']));?></h4>

<?php } ?> 

    <ul class="social-list">

        <?php if(isset($avitore_redux_demo['header_link_facebook'])){?>

            <li><a href="<?php echo esc_url($avitore_redux_demo['header_link_facebook']);?>"><i class="fab fa-facebook"></i></a></li>

        <?php } ?> 

        <?php if(isset($avitore_redux_demo['header_link_twitter'])){?>

            <li><a href="<?php echo esc_url($avitore_redux_demo['header_link_twitter']);?>"><i class="fab fa-twitter"></i></a></li>

        <?php } ?>

        <?php if(isset($avitore_redux_demo['header_link_instagram'])){?>

            <li><a href="<?php echo esc_url($avitore_redux_demo['header_link_instagram']);?>"><i class="fab fa-instagram"></i></a></li>

        <?php } ?>

        <?php if(isset($avitore_redux_demo['header_link_google'])){?>

             <li><a href="<?php echo esc_url($avitore_redux_demo['header_link_google']);?>"><i class="fab fa-google-plus"></i></a></li>

        <?php } ?>

    </ul>

</div>

<div class="mobile-menu"></div>

</div>

</div>

</div>

</div>

</div>

</header>