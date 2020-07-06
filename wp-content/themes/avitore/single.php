<?php
/**
 * The Template for displaying all single posts
 */
$avitore_redux_demo = get_option('redux_demo');
get_header('style2'); ?>

<?php 
    while (have_posts()): the_post();
    $single_facebook = get_post_meta(get_the_ID(),'_cmb_single_facebook', true);
    $single_twitter = get_post_meta(get_the_ID(),'_cmb_single_twitter', true);
    $single_linkedin = get_post_meta(get_the_ID(),'_cmb_single_linkedin', true);
    $single_instagram = get_post_meta(get_the_ID(),'_cmb_single_instagram', true);
?>

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
          <h2 class="text-uppercase text-white mrb-10"><?php the_title();?></h2>
          <ul class="mb-0 justify-content-center">
            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white"><?php echo esc_html__( 'Home', 'avitore' );?></a></li>
            <li class="breadcrumb-item text-primary-color"><?php if(isset($avitore_redux_demo['blog_details_title']) && $avitore_redux_demo['blog_details_title'] != ''){?>
                    <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['blog_details_title']));?>
                    <?php }else{?>
                    <?php echo esc_html__( 'Blog Details', 'avitore' );
                    }
                    ?></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Title End -->
  <!-- Service Details Section Start -->
  <section class="blog-single-news pdt-110 pdb-90">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-7">
          <div class="single-news-details news-wrapper mrb-30">
            <?php if (has_post_thumbnail()) { ?>
            <div class="news-thumb">
              <img class="img-full" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">
            </div>
            <?php } ?>
            <div class="single-news-content">
              <div class="news-bottom-meta mrt-20 mrb-15">
                <span class="entry-author mrr-20"><i class="far fa-user mrr-10 text-primary-color"></i><?php the_author_posts_link(); ?></span>
                <span class="entry-date"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i><?php the_time(get_option( 'date_format'));?></span>
              </div>
              <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
              </div>
              <div class="single-news-tag-social-area">
                <div class="single-news-tags f-left f-left-none mrb-lg-20">
                  <ul class="list">
                    <li><span class="mrr-5"><?php echo esc_html__( 'Tags:', 'avitore' )?></span></li>
                    <?php echo get_the_tag_list('<li>','</li><li>','</li>'); ?>
                  </ul>
                </div>
              </div>
              <div class="comments-area">
                <?php comments_template();?>
              </div>
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
  </section>
        <!-- blog-area end -->
<?php endwhile; ?>

<?php
get_footer();
?>