<?php $options = _WSH()->option();
	sanat_bunch_global_variable();
	$icon_href = (sanat_set( $options, 'site_favicon' )) ? sanat_set( $options, 'site_favicon' ) : get_template_directory_uri().'/images/favicon.ico';
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ):?>
	<link rel="shortcut icon" href="<?php echo esc_url($icon_href);?>" type="image/x-icon">
	<link rel="icon" href="<?php echo esc_url($icon_href);?>" type="image/x-icon">
<?php endif;?>
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="page-wrapper">
 	
    <?php if(sanat_set($options, 'preloader')):?>
		<!-- Preloader -->
		<div class="preloader"></div>
	<?php endif;?>
 	
    <?php if ( function_exists( 'bunch_contact_form7' ) ) {
				$header_style = sanat_set( $options, 'header_style' );
				$meta = _WSH()->get_meta( '_bunch_header_settings' );
				$header_style1 = sanat_set( $meta, 'header_styles' );
				$header_style2 = ( $header_style1 ) ? $header_style1 : $header_style;
				$header_style3 = ( $header_style2 ) ? $header_style2 : 'header_v2';

				if ( 'header_v1' === $header_style3 ) {

					get_template_part( 'includes/modules/header_v1' );

				} elseif ( 'header_v3' === $header_style3 ) { 

					get_template_part( 'includes/modules/header_v3' );

				} elseif( class_exists( 'WooCommerce' ) && is_shop() ) {

					 get_template_part( 'includes/modules/header_v2' );

				 } else {

					get_template_part( 'includes/modules/header_v2' );

				}
	
			} else {
					get_template_part( 'includes/modules/header_v2' );
			}
    
    ?>