<?php
$options = _WSH()->option();
	$text = '';
	$bg = sanat_set($options, '404_page_bg') ? sanat_set($options, '404_page_bg') : get_template_directory_uri().'/images/background/9.jpg';
	$title = sanat_set($options, '404_page_title');
	$page_heading = sanat_set($options, '404_page_heading');
	$page_description = sanat_set($options, '404_page_tag_line');
	$page_text = sanat_set($options, '404_page_text');
    get_header(); 
?>

<!--Page Title-->
<section class="page-title" <?php if($bg):?>style="background-image:url(<?php echo esc_url($bg)?>);"<?php endif;?>>
    <div class="auto-container">
        <h1><?php if($title) echo wp_kses_post($title); else wp_title('');?></h1>
        
		<?php echo wp_kses_post(sanat_get_the_breadcrumb()); ?>
        
    </div>
</section>
<!--End Page Title-->

<!--Error Section-->
<section class="error-section">
    <div class="auto-container">
        <div class="error-title">
            
        <?php 
            if( $page_heading ) {
                echo wp_kses_post($page_heading); 
            }
            else {
                esc_html_e('404', 'sanat');
            }
        ?>
        
        </div>
        <h4><?php if($page_description) echo wp_kses_post($page_description); else esc_html_e('Oops! That page can not be found', 'sanat'); ?></h4>
        <div class="text"><?php if($page_text) echo wp_kses_post($page_text); else esc_html_e('Sorry, but the page you are looking for does not existing', 'sanat'); ?></div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-style-one"><?php esc_html_e('Home Page', 'sanat'); ?></a>
    </div>
</section>
<!--Error Section-->
  		
<?php get_footer(); ?>