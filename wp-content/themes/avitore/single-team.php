<?php

/**

 * The Template for displaying all single posts

 */

$avitore_redux_demo = get_option('redux_demo');

get_header('style2'); ?>



<?php 

    while (have_posts()): the_post();

    $team_facebook = get_post_meta(get_the_ID(),'_cmb_team_facebook', true);

    $team_twitter = get_post_meta(get_the_ID(),'_cmb_team_twitter', true);

    $team_instagram = get_post_meta(get_the_ID(),'_cmb_team_linkedin', true);

    $team_google = get_post_meta(get_the_ID(),'_cmb_team_instagram', true);

    

    $team_job = get_post_meta(get_the_ID(),'_cmb_team_job', true);

?>



<section class="page-title-section">

    <div class="container">

      <div class="row">

        <div class="col-xl-12 text-center">

          <h2 class="text-uppercase text-white mrb-10"><?php if(isset($avitore_redux_demo['team_details_title']) && $avitore_redux_demo['team_details_title'] != ''){?>

            <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['team_details_title']));?>

        <?php }else{?>

            <?php echo esc_html__( 'Team Details', 'avitore' );

        }?></h2>

          <ul class="mb-0 justify-content-center">

            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white"><?php echo esc_html__( 'Home', 'avitore' );?></a></li>

            <li class="breadcrumb-item text-primary-color"><?php if(isset($avitore_redux_demo['team_details_title']) && $avitore_redux_demo['team_details_title'] != ''){?>

            <?php echo htmlspecialchars_decode(esc_attr($avitore_redux_demo['team_details_title']));?>

        <?php }else{?>

            <?php echo esc_html__( 'Team Details', 'avitore' );

        }?></li>

          </ul>

        </div>

      </div>

    </div>

  </section>

  <!-- Page Title End -->

  <!-- Team Details Section Start -->

  <section class="team-details-page pdt-110 pdb-90">

    <div class="container">

      <div class="row">

        <div class="col-md-12 col-sm-12 col-lg-4">

          <?php if (has_post_thumbnail()) { ?>

          <div class="single-team-img">

            <img class="img-full" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="">

          </div>

          <?php } ?>

          <div class="team-member-info mrt-20">

            <h4 class="team-title mrb-5"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>

            <h6 class="designation text-gray f-weight-400">- <?php echo htmlspecialchars_decode(esc_attr($team_job));?></h6>

            <ul class="social-list list-sm clearfix mrt-20 mrb-md-50">

              <li><a href="<?php echo esc_url($team_facebook); ?>"><i class="fab fa-facebook"></i></a></li>

              <li><a href="<?php echo esc_url($team_twitter); ?>"><i class="fab fa-twitter"></i></a></li>

              <li><a href="<?php echo esc_url($team_instagram); ?>"><i class="fab fa-instagram"></i></a></li>

              <li><a href="<?php echo esc_url($team_google); ?>"><i class="fab fa-google-plus"></i></a></li>

            </ul>

          </div>

        </div>

        <?php the_content(); ?>

        <?php wp_link_pages(); ?>

      </div>

    </div>

  </section>

  <!-- About Section End -->

  <section class="pdt-70 pdb-70 bg-primary-color">

    <div class="section-content">

      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="owl-carousel client-items">

              <?php if(isset($avitore_redux_demo['client_image_1']['url']) ){?>

                <div class="client-item">

                  <img src="<?php echo esc_url($avitore_redux_demo['client_image_1']['url']);?>" alt="">

                </div>

              <?php } ?>

              <?php if(isset($avitore_redux_demo['client_image_2']['url']) ){?>

                <div class="client-item">

                  <img src="<?php echo esc_url($avitore_redux_demo['client_image_2']['url']);?>" alt="">

                </div>

              <?php } ?>

              <?php if(isset($avitore_redux_demo['client_image_3']['url']) ){?>

                <div class="client-item">

                  <img src="<?php echo esc_url($avitore_redux_demo['client_image_3']['url']);?>" alt="">

                </div>

              <?php } ?>

              <?php if(isset($avitore_redux_demo['client_image_4']['url']) ){?>

                <div class="client-item">

                  <img src="<?php echo esc_url($avitore_redux_demo['client_image_4']['url']);?>" alt="">

                </div>

              <?php } ?>

              <?php if(isset($avitore_redux_demo['client_image_5']['url']) ){?>

                <div class="client-item">

                  <img src="<?php echo esc_url($avitore_redux_demo['client_image_5']['url']);?>" alt="">

                </div>

              <?php } ?>

              <?php if(isset($avitore_redux_demo['client_image_6']['url']) ){?>

                <div class="client-item">

                  <img src="<?php echo esc_url($avitore_redux_demo['client_image_6']['url']);?>" alt="">

                </div>

              <?php } ?>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

        <!-- blog-area end -->

<?php endwhile; ?>



<?php

get_footer();

?>