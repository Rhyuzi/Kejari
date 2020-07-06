<?php
/**
 * The Template for displaying all single posts
 */
$avitore_redux_demo = get_option('redux_demo');
get_header('style2'); ?>

<?php 
    while (have_posts()): the_post();
    $postid = get_the_ID();
    $content1 = get_the_content();
    $service_image = get_post_meta(get_the_ID(),'_cmb_service_image', true);
?>

<section class="page-title-section">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 text-center">
        <h2 class="text-uppercase text-white mrb-10"><?php the_title(); ?></h2>
        <ul class="mb-0 justify-content-center">
          <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white"><?php echo esc_html__( 'Home', 'avitore' );?></a></li>
          <li class="breadcrumb-item text-primary-color"><?php the_title(); ?></li>
        </ul>
      </div>
    </div>
  </div>
</section>
  <!-- Page Title End -->
  <!-- Service Details Section Start -->
  <section class="service-details-page pdt-110 pdb-90">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 sidebar-right">
          <?php get_sidebar('service');?>
        </div>
        <div class="col-xl-8 col-lg-7">
          <div class="blog-standared-img slider-blog">
            <img class="img-full" src="<?php echo esc_url($service_image);?>" alt="">
          </div>
          <?php echo $content1 ;?>
        </div>
      </div>
    </div>
  </section>
        <!-- blog-area end -->
<?php endwhile; ?>

<?php
get_footer();
?>