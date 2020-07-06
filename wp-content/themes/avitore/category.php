<?php
/*
 * The Template for displaying all posts
 * 
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
          <h2 class="text-uppercase text-white mrb-10"><?php printf( esc_html__( 'Category Archives: %s', 'avitore' ), single_cat_title( '', false ) ); ?></h2>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Title End -->
  <!-- Service Details Section Start -->
  <div class="service-details-page pdt-110 pdb-90 blog-page">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-7">
          <div class="row">
            <?php 
                while (have_posts()): the_post();
            ?> 
              <div class="news-wrapper mrb-50 mrb-sm-40">
                <?php if (has_post_thumbnail()) { ?>
                <div class="news-thumb">
                  <img class="img-full" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
                </div>
                <?php } ?>
                <div class="news-details pdt-25">
                  <div class="news-description mb-20">
                    <div class="news-bottom-meta mrb-15">
                      <span class="entry-author mrr-20"><i class="far fa-user mrr-10 text-primary-color"></i><?php the_author_posts_link(); ?></span>
                      <span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i><?php the_time(get_option( 'date_format'));?></span>
                    </div>
                    <h4 class="the-title mrb-20"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <p class="the-content"><?php if(isset($avitore_redux_demo['blog_excerpt'])){?>
                                    <?php echo esc_attr(avitore_excerpt2($avitore_redux_demo['blog_excerpt'])); ?>
                                    <?php }else{?>
                                    <?php echo esc_attr(avitore_excerpt2(40)); 
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
        <div class="col-xl-4 col-lg-5 sidebar-right">
          <aside class="news-sidebar-widget">
            <?php get_sidebar();?>
          </aside>
        </div>
      </div>
    </div>
  </div>

<?php
    get_footer();
?>