<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<?php $avitore_redux_demo = get_option('redux_demo'); ?>

<head>

    <!-- Meta Tags -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {

        ?>

    <link rel="shortcut icon" href="<?php if(isset($avitore_redux_demo['favicon']['url'])){?><?php echo esc_url($avitore_redux_demo['favicon']['url']); ?><?php }?>">

    <?php }?>

    <?php wp_head(); ?> 



</head>

<?php if(isset($avitore_redux_demo['404_image']['url']) && $avitore_redux_demo['404_image']['url'] != ''){?> 

<body class="error-page" <?php body_class(); ?> style="background: url(<?php echo esc_url($avitore_redux_demo['404_image']['url']);?>) no-repeat;

    background-position: center center;

    background-size: cover;">

<?php }else{?>

<body class="error-page" <?php body_class(); ?> >

<?php } ?>

	<div class="preloader"></div>

        <!-- end preloader -->

