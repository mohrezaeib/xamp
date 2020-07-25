<?php


/** Set ABSPATH for execution */
define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );
define( 'WPINC', 'wp-includes' );


/**
 * @ignore
 */
function add_filter() {}

/**
 * @ignore
 */
function esc_attr($str) {return $str;}

/**
 * @ignore
 */
function apply_filters() {}

/**
 * @ignore
 */
function get_option() {}

/**
 * @ignore
 */
function is_lighttpd_before_150() {}

/**
 * @ignore
 */
function add_action() {}

/**
 * @ignore
 */
function did_action() {}

/**
 * @ignore
 */
function do_action_ref_array() {}

/**
 * @ignore
 */
function get_bloginfo() {}

/**
 * @ignore
 */
function is_admin() {return true;}

/**
 * @ignore
 */
function site_url() {}

/**
 * @ignore
 */
function admin_url() {}

/**
 * @ignore
 */
function home_url() {}

/**
 * @ignore
 */
function includes_url() {}

/**
 * @ignore
 */
function wp_guess_url() {}

if ( ! function_exists( 'json_encode' ) ) :
/**
 * @ignore
 */
function json_encode() {}
endif;



/* Convert hexdec color string to rgb(a) string */
 
function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}
$yellow = $_GET['main_color'];

ob_start(); ?>

@charset "utf-8";
/* Theme Color */

a,
.theme_color,
.list-style-one li .icon,
.social-icon-one li a:hover,
.list-style-two li .icon,
.services-block .inner-box .upper-box h3 a:hover,
.main-header .header-top .top-left ul li span,
.main-header .info-box .icon-box,
.footer-lists li a:hover,
.footer-lists li a:before,
.news-widget .post .text a:hover,
.news-widget .post .post-info li .icon,
.team-block .inner-box .lower-box h3 a,
.social-icon-two li a:hover,
.process-block .inner-box .lower-box h3,
.process-block .inner-box .lower-box:hover h3 a,
.services-block-four .inner-box h3 a:hover,
.welcome-section .content-column .inner-column .text h3,
.main-header .header-top .top-right .social-nav li a:hover,
.gallery-section .filters .filter-tabs .filter.active,
.gallery-section .filters .filter-tabs .filter:hover,
.testimonial-block .inner-box .author-box .designation,
.news-block .inner-box .lower-content h3 a:hover,
.news-block .inner-box .lower-content .post-meta li span,
.news-block-two .inner-box .content-column h3 a:hover,
.news-block-two .inner-box .content-column .post-meta li span,
.header-style-two .nav-outer .outer-box .contact-number .icon,
.header-style-three .nav-outer .outer-box .contact-number .icon,
.services-block-two .inner-box .lower-box h3 a:hover,
.testimonial-block-two .inner-box .quote-icon,
.accordion-box .block .icon-outer,
.list-style-three li .icon,
.page-title .page-breadcrumb li a,
.services-block-three .inner-box h3 a:hover,
.services-block-four .inner-box:hover .icon-box,
.testimonial-block-two .inner-box .lower-box .rating,
.news-block-three .inner-box .lower-content h3 a:hover,
.time-counter .time-countdown .counter-column,
.news-block-three .inner-box .lower-content .post-meta li span,
.default-section .testimonial-column .owl-nav .owl-prev:hover,
.default-section .testimonial-column .owl-nav .owl-next:hover,
.accordion-box.style-two .block .acc-btn.active,
.project-list li.social-icons a:hover,
.cat-list li.active a, .cat-list li a:hover,
.sidebar .popular-posts .post a:hover,
.sidebar .popular-tags a:hover,
.news-single .inner-box .lower-content .post-meta li span,
.social-icon-three li a:hover,
.shop-item .inner-box .lower-content .price,
.shop-item .inner-box .lower-content .add-cart:hover,
.shop-item .inner-box .lower-content .rating .fa,
.shop-item .inner-box .lower-content h3 a:hover,
.cart-table tbody tr .remove-btn,
.sidebar-page-container .comments-area .comment-info .comment-time,
.news-single .inner-box .lower-content .post-share-options .tags a:hover,
.sidebar .popular-posts .post .post-thumb .overlay-box,
.accordion-box.style-two .block .acc-btn.active .icon-outer .icon-minus,
.services-single .services-tabs .tab-btns .tab-btn:hover,
.services-single .services-tabs .tab-btns .tab-btn.active-btn,
.range-slider-one .theme-btn:hover,
.sidebar .related-posts .post .rating .fa,
.cart-section .totals-table .total .price,
.checkout-page .default-links li a,
.product-details .basic-details .details-header .rating,
.product-details .basic-details .details-header .item-price,
.sidebar .related-posts .post a, .sidebar .related-posts .post a:hover,
.subscribe-form-three .form-group input[type="submit"], .subscribe-form-three button,
.testimonial-block-two .inner-box .lower-box .author-box .author-inner .designation,
.projects-section .owl-nav .owl-prev:hover, .projects-section .owl-nav .owl-next:hover,
.project-page-section .filters .filter-tabs .filter.active,
.project-page-section .filters .filter-tabs .filter:hover,
.order-box ul li span,
.sidebar-page-container .comments-area .comment .comment-inner .rating,
.shop-comment-form .rating-box .rating a:hover,
.sidebar .search-box .form-group button,
.main-menu .navigation > li.current > a,
.team-grids .member-info h3 a:hover,
.team-grids .social-links li a:hover,
.testimoials-s2-grid .client-info .rating i,
.blog-modern-section .news-block-three .content-column .post-meta li a .icon,
.blog-modern-section .news-block-three .content-column .post-meta li a:hover,
.blog-modern-section .news-block-four .content-column .inner-column h2 a:hover,
.blog-modern-section .news-block-four .content-column .post-meta li a .icon,
.blog-modern-section .news-block-four .content-column .post-meta li a:hover
{
	color: #<?php echo esc_attr($yellow); ?>;
}

.sticky-header .main-menu .navigation > li:hover > a{
	color:#<?php echo esc_attr($yellow); ?> !important;
}

.testimoials-s2-grid {
    border: 2px solid #<?php echo esc_attr($yellow); ?>;
}

/*Background Color*/
.btn-style-one,
.sec-title .separater:before,
.btn-style-two:hover,
.scroll-to-top:hover,
.main-menu .navigation > li:before,
.project-list li .icon,
.testimonial-section .owl-dots .owl-dot,
.fact-counter .column .counter-title:before,
.team-block .inner-box:hover .lower-box,
.subscribe-form .form-group input[type="submit"],
.subscribe-form .form-group button,
.header-style-two .header-top,
.btn-style-three:hover,
.subscribe-section:before,
.services-block-three .inner-box .icon-box,
.services-section-two .owl-dots .owl-dot,
.range-slider-one .ui-state-default,
.range-slider-one .ui-widget-content .ui-state-default,
.services-block-four .inner-box .icon-box,
.comming-soon .content .content-inner .logo:after,
.process-block .inner-box .upper-box .icon-box .block-number,
.accordion-box .block .acc-btn.active .icon-outer .icon-minus,
.main-header .header-lower .outer-box .advisor-box .advisor-btn span,
.comming-soon .emailed-form .form-group input[type="submit"],
.comming-soon .emailed-form button,
.styled-pagination li.prev a:hover,
.styled-pagination li.next a:hover,
.blog-cat li a:after,
.brochure-box:hover,
.cart-section .coupon-btn,
.cart-section .cart-options .cart-btn:hover,
.cart-section .cart-options .cart-btn,
.sidebar-title .separater:after,
.cart-section .coupon-btn:hover,
.shipping-form button,
.shipping-form button:hover,
.cart-section .totals-table .proceed-btn,
.cart-section .totals-table .proceed-btn:hover,
.ui-state-active, .ui-widget-content .ui-state-active,
.shop-item .inner-box .image .overlay-box .cart-option li a,
.sidebar-page-container .comments-area .comment .comment-reply,
.shop-single .product-details .prod-tabs .tab-btns .tab-btn:hover,
.shop-single .product-details .prod-tabs .tab-btns .tab-btn.active-btn,
.subscribe-form-two button,
.sidebar-page-container .comments-area .comment .comment-reply a,
.pagination > li > .current,
.pagination > li > span:focus,
.pagination > li > a:focus, 
.pagination > li > a:hover,
.pagination > li > span:hover,
.main-header .sticky-header .main-menu .navigation > li.current > a,
.testimonial-block-two .inner-box .lower-box .author-box .author-inner .image:after,
.portfolio-item-two .overlay-inner,
.services-block-two .inner-box .upper-box .image .overlay-box,
.team-block-two .inner-box .overlay-box,
.news-block-three .inner-box .image .overlay-link,
.services-block .inner-box .lower-box .image .overlay-box,
.default-portfolio-item .overlay-box,
.blog-modern-section .news-block-three .content-column .inner-column .post-date,
.blog-modern-section .news-block-three .content-column .inner-column:before,
.blog-modern-section .news-block-four .content-column .inner-column .post-date,
.blog-modern-section .news-block-four .content-column .inner-column:before {
	background-color: #<?php echo esc_attr($yellow); ?>;
}

.testimoials-s2-grid:after{
    background: #<?php echo esc_attr($yellow); ?> url("../images/icons/quote.png") no-repeat center center;
}

.main-slider .tp-bannertimer.tp-bottom {
    background: #<?php echo esc_attr($yellow); ?> !important;
}

.color-trigger, .color-palate-head {
    background: #<?php echo esc_attr($yellow); ?> none repeat scroll 0 0 !important;
}

/*Border Color*/

.btn-style-one,
.btn-style-two:hover,
.main-menu .navigation > li > ul,
.list-style-two li .icon,
.btn-style-three:hover,
.brochure-box:hover,
.portfolio-item-two .overlay-inner,
.main-menu .navigation > li > ul > li > ul,
.projects-section .owl-nav .owl-prev:hover,
.projects-section .owl-nav .owl-next:hover,
.default-section .testimonial-column .owl-nav .owl-prev:hover,
.default-section .testimonial-column .owl-nav .owl-next:hover,
.default-form .form-group input[type="text"]:focus,
.default-form .form-group input[type="password"]:focus,
.default-form .form-group input[type="tel"]:focus,
.default-form .form-group input[type="email"]:focus,
.default-form .form-group select:focus,
.default-form .form-group textarea:focus,
.list-style-three li .icon,
.styled-pagination li.prev a:hover,
.styled-pagination li.next a:hover,
.sidebar-page-container .comments-area .comment-box:hover,
.comment-form .form-group input[type="text"]:focus,
.comment-form .form-group input[type="password"]:focus,
.comment-form .form-group input[type="tel"]:focus,
.comment-form .form-group input[type="email"]:focus,
.comment-form .form-group select:focus,
.comment-form .form-group textarea:focus,
.range-slider-one .ui-state-default,
.range-slider-one .ui-widget-content .ui-state-default,
.shop-comment-form .form-group input[type="text"]:focus,
.shop-comment-form .form-group input[type="password"]:focus,
.shop-comment-form .form-group input[type="tel"]:focus,
.shop-comment-form .form-group input[type="email"]:focus,
.shop-comment-form .form-group select:focus,
.shop-comment-form .form-group textarea:focus,
.shipping-form .form-group input[type="text"]:focus,
.shipping-form .form-group input[type="password"]:focus,
.shipping-form .form-group input[type="tel"]:focus,
.shipping-form .form-group input[type="email"]:focus,
.shipping-form .form-group select:focus,
.shipping-form .form-group textarea:focus,
.ui-state-active, .ui-widget-content .ui-state-active,
.checkout-form input:focus, .checkout-form select:focus,
.checkout-form textarea:focus,
.login-form .form-group input[type="text"]:focus,
.login-form .form-group input[type="password"]:focus,
.login-form .form-group input[type="tel"]:focus,
.login-form .form-group input[type="email"]:focus,
.login-form .form-group select:focus,
.login-form .form-group textarea:focus
{
	border-color: #<?php echo esc_attr($yellow); ?>;
}

.faq-section .prod-tabs .tab-btns{
    border-top-color:#<?php echo esc_attr($yellow); ?>;
}

.subscribe-section .title-column:after,
.header-style-two .main-menu .navigation > li > a:after,
.main-menu .navigation > li:after{
	border-bottom-color:#<?php echo esc_attr($yellow); ?>;
}

.subscribe-section .title-column:after{
	border-left-color:#<?php echo esc_attr($yellow); ?>;
}


.fluid-section-one .title-column:before{
	background-color:<?php echo hex2rgba($yellow, 0.8);?>;
}


@media only screen and (max-width: 767px){

    .main-menu .navbar-header .navbar-toggle{
		border-color:#<?php echo esc_attr($yellow);?>;
	}
	
	.main-menu .navbar-header .navbar-toggle,
	.main-menu .navbar-collapse > .navigation,
	.main-menu .navbar-collapse > .navigation > li > ul,
	.main-menu .navbar-collapse > .navigation > li > ul > li > ul,
	.main-menu .navbar-collapse > .navigation > li > a,
	.main-menu .navbar-collapse > .navigation > li > ul > li > a,
	.main-menu .navbar-collapse > .navigation > li > ul > li > ul > li > a,
	.main-menu .navbar-collapse > .navigation > li > a:hover,
	.main-menu .navbar-collapse > .navigation > li > a:active,
	.main-menu .navbar-collapse > .navigation > li > a:focus,
	.main-menu .navbar-collapse > .navigation > li:hover > a,
	.main-menu .navbar-collapse > .navigation > li > ul > li:hover > a,
	.main-menu .navbar-collapse > .navigation > li > ul > li > ul > li:hover > a,
	.main-menu .navbar-collapse > .navigation > li.current > a,
	.main-menu .navbar-collapse > .navigation > li.current-menu-item > a,
	.header-style-two.inner-header .main-menu .navigation > li > a{
		background-color:#<?php echo esc_attr($yellow);?>;
	}
	
}

.woocommerce .woocommerce-info,
.woocommerce .woocommerce-error,
.woocommerce .woocommerce-info,
.woocommerce .woocommerce-message
{
	border-top-color: #<?php echo esc_attr($yellow);?> !important;
}


.woocommerce .f-shop-detail .summary .star-rating
{
	color: #<?php echo esc_attr($yellow);?> !important;
}
<?php 

$out = ob_get_clean();
$expires_offset = 31536000; // 1 year
header('Content-Type: text/css; charset=UTF-8');
header('Expires: ' . gmdate( "D, d M Y H:i:s", time() + $expires_offset ) . ' GMT');
header("Cache-Control: public, max-age=$expires_offset");
header('Vary: Accept-Encoding'); // Handle proxies
header('Content-Encoding: gzip');

echo gzencode($out);
exit;