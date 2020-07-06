<?php

/*

 * Template Name: Blog Without Sidebar

 * Description: A Page Template with a Page Builder design.

 */

 $avitore_redux_demo = get_option('redux_demo');

get_header('style2'); ?>



<?php if(isset($avitore_redux_demo['blog_image']['url']) && $avitore_redux_demo['blog_image']['url'] != ''){?>

    <section class="page-title-section" style="padding: 110px 0;

    background-color: #f8f8f8;

    background-image: url(<?php echo esc_url($avitore_redux_demo['blog_image']['url']);?>);

    color: #fff;">

<?php }else{?> 

    <section class="page-title-section">

<?php } ?>  

    <div class="container">

      <div class="row">

        <div class="col-xl-12 text-center">

          <h2 class="text-uppercase text-white mrb-10"><?php if(isset($avitore_redux_demo['blog_title']) && $avitore_redux_demo['blog_title'] != ''){?>

            <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['blog_title']));?>

        <?php }else{?>

            <?php echo esc_html__( 'Blog Without Sidebar', 'avitore' );

        }?></h2>

          <ul class="mb-0 justify-content-center">

            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white"><?php echo esc_html__( 'Home', 'avitore' );?></a></li>

            <li class="breadcrumb-item text-primary-color"><?php if(isset($avitore_redux_demo['blog_title']) && $avitore_redux_demo['blog_title'] != ''){?>

                    <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['blog_title']));?>

                    <?php }else{?>

                    <?php echo esc_html__( 'Blog Without Sidebar', 'avitore' );

                    }

                    ?></li>

          </ul>

        </div>

      </div>

    </div>

  </section>

  <!-- Page Title End -->

  <!-- News Section Start -->

  <section class="pdt-110 pdb-70 blog-section1">
    <div class="section-content">
      <div class="container">
        <div class="row">
          <?php 

            $args = array(   

              'post_type' => 'post', 

            );  

            $wp_query = new WP_Query($args);

            while ($wp_query -> have_posts()) : $wp_query -> the_post();  

            $home_title = get_post_meta(get_the_ID(),'_cmb_home_title', true);  

             ?>  
          <div class="col-md-6 col-lg-4 col-xl-4">
            <div class="news-wrapper mrb-50 mrb-sm-40">
              <?php if (has_post_thumbnail()) { ?>
              <div class="news-thumb small-image">
                <img class="img-full" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
              </div>
              <?php } ?>
              <div class="news-details pdt-25">
                <div class="news-description mb-20">
                  <div class="news-bottom-meta mrb-15">
                    <span class="entry-author mrr-20"><i class="far fa-user mrr-10 text-primary-color"></i><?php the_author_posts_link(); ?></span>
                    <span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i><?php the_time(get_option( 'date_format'));?></span>
                  </div>
                  <h4 class="the-title mrb-20"><a href="<?php the_permalink();?>"><?php echo esc_attr($home_title); ?></a></h4>
                  <p class="the-content"><?php if(isset($avitore_redux_demo['blog_excerpt'])){?>
                                    <?php echo esc_attr(avitore_excerpt3($avitore_redux_demo['blog_excerpt'])); ?>
                                    <?php }else{?>
                                    <?php echo esc_attr(avitore_excerpt3(12)); 
                                    }
                                    ?></p>
                </div>
                <div class="news-link">
                  <a href="<?php the_permalink();?>"><?php if(isset($avitore_redux_demo['read_more'])){?>
                                        <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['read_more']));?>
                                        <?php }else{?>
                                        <?php echo esc_html__( 'Read more', 'avitore' );
                                        }
                                        ?> <i class="fal fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>  
        </div>
        <div class="row">
            <div class="col-xl-12">
              <nav class="pagination-nav pdt-30">
                <?php avitore_pagination();?>
              </nav>
            </div>
          </div>
      </div>
    </div>
  </section>



<?php

    get_footer();

?>