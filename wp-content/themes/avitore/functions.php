<?php
$avitore_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/widget/sidebar-services-menus.php';
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
//Theme Set up:
function avitore_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('avitore', $lang);

  add_theme_support( 'post-thumbnails' );
  // Adds RSS feed links to <head> for posts and comments.
  add_theme_support( 'automatic-feed-links' );
  // Switches default core markup for search form, comment form, and comments
  // to output valid HTML5.
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu: Chosen menu in single, blog, pages ...', 'avitore' ),
    'mobile' =>  esc_html__( 'Mobile Navigation Menu: Chosen mobile menu in single, blog, pages ...', 'avitore' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'avitore_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;
 
function avitore_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'avitore' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Montserrat:300,400,500,600,700,800,900&display=swap|Playfair+Display:400,700,900&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function avitore_theme_scripts_styles() {
	$avitore_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'avitore-fonts', avitore_fonts_url(), array(), '1.0.0' );
    wp_enqueue_style( 'layers', get_template_directory_uri().'/assets/revolution/css/layers.css');
    wp_enqueue_style( 'settings', get_template_directory_uri().'/assets/revolution/css/settings.css');
    wp_enqueue_style( 'navigation', get_template_directory_uri().'/assets/revolution/css/navigation.css');
    wp_enqueue_style( 'avitore-style', get_template_directory_uri().'/assets/css/style.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css');
    wp_enqueue_style( 'avitore-css', get_stylesheet_uri(), array(), '2020-04-20' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
    wp_enqueue_script("jquery1", get_template_directory_uri()."/assets/js/jquery.v1.12.4.min.js",array(),false,true);
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/assets/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("jquery-core", get_template_directory_uri()."/assets/js/jquery-core-plugins.js",array(),false,true);
    wp_enqueue_script("avitore-main", get_template_directory_uri()."/assets/js/main.js",array(),false,true);
    wp_enqueue_script("themepunch-tools", get_template_directory_uri()."/assets/revolution/js/jquery.themepunch.tools.min.js",array(),false,true);
    wp_enqueue_script("themepunch-revolution", get_template_directory_uri()."/assets/revolution/js/jquery.themepunch.revolution.min.js",array(),false,true);
    wp_enqueue_script("slider-v1", get_template_directory_uri()."/assets/revolution/js/slider_v1.js",array(),false,true);
    wp_enqueue_script("extension-actions", get_template_directory_uri()."/assets/revolution/js/extensions/revolution.extension.actions.min.js",array(),false,true);
    wp_enqueue_script("extension-carousel", get_template_directory_uri()."/assets/revolution/js/extensions/revolution.extension.carousel.min.js",array(),false,true);
    wp_enqueue_script("extension-kenburn", get_template_directory_uri()."/assets/revolution/js/extensions/revolution.extension.kenburn.min.js",array(),false,true);
    wp_enqueue_script("extension-layeranimation", get_template_directory_uri()."/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js",array(),false,true);
    wp_enqueue_script("extension-migration", get_template_directory_uri()."/assets/revolution/js/extensions/revolution.extension.migration.min.js",array(),false,true);
    wp_enqueue_script("extension-navigation", get_template_directory_uri()."/assets/revolution/js/extensions/revolution.extension.navigation.min.js",array(),false,true);
    wp_enqueue_script("extension-parallax", get_template_directory_uri()."/assets/revolution/js/extensions/revolution.extension.parallax.min.js",array(),false,true);
    wp_enqueue_script("extension-slideanims", get_template_directory_uri()."/assets/revolution/js/extensions/revolution.extension.slideanims.min.js",array(),false,true);
     wp_enqueue_script("extension-video", get_template_directory_uri()."/assets/revolution/js/extensions/revolution.extension.video.min.js",array(),false,true);
    wp_enqueue_script("magnific-popup", get_template_directory_uri()."/assets/js/jquery.magnific-popup.min.js",array(),false,true);
    wp_enqueue_script("meanmenu", get_template_directory_uri()."/assets/js/jquery.meanmenu.min.js",array(),false,true);
    wp_enqueue_script("scrollUp", get_template_directory_uri()."/assets/js/jquery.scrollUp.min.js",array(),false,true);
    wp_enqueue_script("owl-carousel", get_template_directory_uri()."/assets/js/owl.carousel.min.js",array(),false,true);
    wp_enqueue_script("imagesloaded-pkgd", get_template_directory_uri()."/assets/js/imagesloaded.pkgd.min.js",array(),false,true);
    wp_enqueue_script("counterup", get_template_directory_uri()."/assets/js/jquery.counterup.min.js",array(),false,true);
    wp_enqueue_script("isotope-pkgd", get_template_directory_uri()."/assets/js/isotope.pkgd.min.js",array(),false,true);
    wp_enqueue_script("waypoints", get_template_directory_uri()."/assets/js/waypoints.min.js",array(),false,true);
    wp_enqueue_script("appears", get_template_directory_uri()."/assets/js/appear.js",array(),false,true);
    wp_enqueue_script("wow", get_template_directory_uri()."/assets/js/wow.js",array(),false,true);
   }
   
add_action( 'wp_enqueue_scripts', 'avitore_theme_scripts_styles' );
add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

//Custom Excerpt Function
function avitore_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}


// Widget Sidebar
function avitore_widgets_init() {
	register_sidebar( array(
    'name'          => esc_html__( 'Primary Sidebar', 'avitore' ),
    'id'            => 'sidebar-1',        
		'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'avitore' ),        
		'before_widget' => '<div id="%1$s" class="single-widget mb-30 %2$s">',        
		'after_widget'  => '</div>',        
		'before_title'  => '<h3 class="widget-title">',        
		'after_title'   => '</h3>'
    ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Case Sidebar', 'avitore' ),
    'id'            => 'sidebar-2',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'avitore' ),        
    'before_widget' => '<div id="%1$s" class="%2$s">',        
    'after_widget'  => '</div>',        
    'before_title'  => '<h3 class="widget-title">',        
    'after_title'   => '</h3>'
    ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Service Sidebar', 'avitore' ),
    'id'            => 'sidebar-3',        
    'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'avitore' ),        
    'before_widget' => '<div id="%1$s" class="%2$s">',        
    'after_widget'  => '</div>',        
    'before_title'  => '<h3 class="widget-title">',        
    'after_title'   => '</h3>'
    ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget One', 'avitore' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'avitore' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget Two', 'avitore' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'avitore' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget Three', 'avitore' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'avitore' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => esc_html__( 'Footer Widget Four', 'avitore' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'avitore' ),
    'before_widget' => '<div id="%1$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ) );
  
}
add_action( 'widgets_init', 'avitore_widgets_init' );

//function tag widgets
function avitore_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'avitore_tag_cloud_widget' );
function avitore_excerpt() {
  $avitore_redux_demo = get_option('redux_demo');
  if(isset($avitore_redux_demo['blog_excerpt'])){
    $limit = $avitore_redux_demo['blog_excerpt'];
  }else{
    $limit = 80;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function avitore_excerpt2() {

    $limit = 40;
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function avitore_excerpt3() {

    $limit = 15;
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


//pagination
function avitore_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => htmlspecialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'avitore' )),
    'next_text' => htmlspecialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'avitore' )),   
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination-list">', $return );
}

function avitore_search_form( $form ) {
    $form = '
  

  <form action="' . esc_url(home_url('/')) . '" id="searchform-all" method="get">
    <div>
      <input type="search" class="form-control" placeholder="'.esc_html__('Search...', 'avitore').'" name="s" id="s">
        <div class="input-box">
          <input type="submit" value="" id="searchsubmit"><i class="fa fa-search"></i>
        </div>
    </div>
  </form>
	';
    return $form;
}
add_filter( 'get_search_form', 'avitore_search_form' );
//Custom comment List:




add_filter( 'avatar_defaults', 'newgravatar' );

function newgravatar ($avatar_defaults) {
$myavatar = get_template_directory_uri().'/assets/images/boy.jpg';
$avatar_defaults[$myavatar] = "Boy";
return $avatar_defaults;
}

// Comment Form
function avitore_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
   
  <li class="comment">
    <article class="comment-body">
      <div class="comment-author-thumb f-left">
        <?php echo get_avatar($comment,$size='70' ); ?>
      </div>
      <div class="comment-content">
        <h6 class="comment-author"><?php printf( get_comment_author_link()) ?></h6>
        <div class="comment-meta">
          <div class="comment-metadata">
            
              <span>
                <i class="far fa-calendar-alt text-primary-color mrr-5"></i> <?php comment_time('F j, Y'); ?> <i class="far fa-clock text-primary-color mrl-10 mrr-5"></i> <?php comment_time('g:i a'); ?> </span>
             
            </div>
          </div>
          <?php comment_text() ?>
          <div class="reply">
            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
          </div>
        </div>
      </article>
    </li>
<?php
}



/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'avitore_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function avitore_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'avitore' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Classic Editor', 'avitore' ),
            'slug'      => 'classic-editor',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Widget Importer & Exporter', 'avitore' ),
            'slug'      => 'widget-importer-&-exporter',
            'required'  => true,
        ), 
      array(
            'name'                     => esc_html__( 'Contact Form 7', 'avitore' ),
            'slug'                     => 'contact-form-7',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/contact-form-7.zip',
        ),
      array(
            'name'                     => esc_html__( 'Avitore Common', 'avitore' ),
            'slug'                     => 'avitore-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/avitore-common.zip',
        ),
      array(
            'name'                     => esc_html__( 'Elementor', 'avitore' ),
            'slug'                     => 'elementor',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/elementor.zip',
        ),
      array(
            'name'                     => esc_html__( 'Avitore Elementor', 'avitore' ),
            'slug'                     => 'avitore-elementor',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/avitore-elementor.zip',
        ),
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'avitore' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'avitore' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'avitore' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'avitore' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'avitore' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'avitore' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'avitore' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'avitore' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'avitore' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'avitore' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'avitore' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'avitore' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'avitore' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'avitore' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'avitore' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'avitore' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'avitore' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}



function avitore_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import avitore',
            'import_file_url'            => 'http://shtheme.com/import/avitore/content.xml',
            'import_widget_file_url'     => 'http://shtheme.com/import/avitore/widget.json',
            'import_notice'              => esc_html__( 'Import data example avitore', 'avitore' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'avitore_import_files' );



function avitore_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'primary' );
    

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home 1' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'avitore_after_import_setup' );


?>