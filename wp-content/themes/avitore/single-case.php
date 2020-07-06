<?php
/**
 * The Template for displaying all single posts
 */
$avitore_redux_demo = get_option('redux_demo');
get_header('style2'); ?>

<?php 
    while (have_posts()): the_post();
    $countdown_title = get_post_meta(get_the_ID(),'_cmb_countdown_title', true);
    $countdown_time = get_post_meta(get_the_ID(),'_cmb_countdown_time', true);
    $events_price = get_post_meta(get_the_ID(),'_cmb_events_price', true);
    $events_time = get_post_meta(get_the_ID(),'_cmb_events_time', true);
    $events_date = get_post_meta(get_the_ID(),'_cmb_events_date', true);
    $events_user = get_post_meta(get_the_ID(),'_cmb_events_user', true);
    $upcoming_title = get_post_meta(get_the_ID(),'_cmb_upcoming_title', true);
    $upcoming_subtitle = get_post_meta(get_the_ID(),'_cmb_upcoming_subtitle', true);
    $events_image = get_post_meta(get_the_ID(),'_cmb_events_image', true);
?>  
<section class="page-title-section">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 text-center">
          <h2 class="text-uppercase text-white mrb-10"><?php if(isset($avitore_redux_demo['project_details_title']) && $avitore_redux_demo['project_details_title'] != ''){?>
            <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['project_details_title']));?>
        <?php }else{?>
            <?php echo esc_html__( 'Case Details', 'avitore' );
        }?></h2>
          <ul class="mb-0 justify-content-center">
            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white"><?php echo esc_html__( 'Home', 'avitore' );?></a></li>
            <li class="breadcrumb-item text-primary-color"><?php if(isset($avitore_redux_demo['project_details_title']) && $avitore_redux_demo['project_details_title'] != ''){?>
            <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['project_details_title']));?>
        <?php }else{?>
            <?php echo esc_html__( 'Case Details', 'avitore' );
        }?></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Page Title End -->
  <!-- Project Details Section Start -->
  <section class="project-details-page pdt-110 pdb-90">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 col-lg-7">
          <?php the_content(); ?>
          <?php wp_link_pages(); ?>
        </div>
        <div class="col-xl-4 col-lg-5 sidebar-right">
          <?php get_sidebar('case');?>
        </div>
      </div>
    </div>
  </section>

<?php endwhile; ?>
<?php
get_footer();
?>