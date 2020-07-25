<?php /* Template Name: King Composer Page */
	get_header() ;
	$options = _WSH()->option();
	$meta = _WSH()->get_meta('_bunch_header_settings');
	$bg = (sanat_set($meta, 'header_img')) ? sanat_set($meta, 'header_img') : get_template_directory_uri().'/images/background/9.jpg';
	$title = sanat_set($meta, 'header_title');
?>
<?php if(sanat_set($meta, 'breadcrumb')):?>

<!--Page Title-->
<section class="page-title" <?php if($bg):?>style="background-image:url(<?php echo esc_url($bg)?>);"<?php endif;?>>
    <div class="auto-container">
        <h1><?php if($title) echo wp_kses_post($title); else wp_title('');?></h1>
        
		<?php echo wp_kses_post(sanat_get_the_breadcrumb()); ?>
        
    </div>
</section>
<!--End Page Title-->

<?php endif;?>
<?php while( have_posts() ): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile;  ?>
<?php get_footer() ; ?>