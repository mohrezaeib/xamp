<?php sanat_bunch_global_variable();
	$options = _WSH()->option();
	get_header(); 
	$meta = _WSH()->get_term_meta( '_bunch_category_settings' );
	if(sanat_set($_GET, 'layout_style')) $layout = sanat_set($_GET, 'layout_style'); else
	$layout = sanat_set( $meta, 'layout', 'right' );
	$sidebar = sanat_set( $meta, 'sidebar', 'blog-sidebar' );
	$view = sanat_set( $meta, 'view', 'list' ) ? sanat_set( $meta, 'view', 'list' ) : 'list';
	_WSH()->page_settings = array('layout'=>$layout, 'sidebar'=>$sidebar);
	$classes = ( !$layout || $layout == 'full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12 ';
	$bg = sanat_set($meta, 'header_img');
	$title = sanat_set($meta, 'header_title');
?>

<!--Page Title-->
<section class="page-title" <?php if($bg):?>style="background-image:url(<?php echo esc_url($bg)?>);"<?php endif;?>>
    <div class="auto-container">
        <h1><?php if($title) echo wp_kses_post($title); else wp_title('');?></h1>
        <?php echo wp_kses_post(sanat_get_the_breadcrumb()); ?>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
        
			<!-- sidebar area -->
			<?php if( $layout == 'left' ): ?>
				<?php if ( is_active_sidebar( $sidebar ) ) { ?>
					<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                		<aside class="sidebar">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </aside>
                    </div>
				<?php } ?>
			<?php endif; ?>
			<!-- sidebar area -->
            
			<!-- Left Content -->
			<div class="content-side <?php echo esc_attr($classes);?>">
           		
                <!--Default Section-->
                <div class="blog-classic">
            		
                    <div class="thm-unit-test">
						
						<?php while( have_posts() ): the_post();?>
                            <!-- blog post item -->
                            <!-- Post -->
                            <div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                                <?php get_template_part( 'blog' ); ?>
                            <!-- blog post item -->
                            </div><!-- End Post -->
                        <?php endwhile;?> 
                    
                    </div>
                    
                    <!--Styled Pagination-->
                    <div class="styled-pagination text-center clearfix">
                        <?php sanat_the_pagination(); ?>
                    </div>
                
                </div>
			
            </div>
			<!-- sidebar area -->
			
			<!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
				<?php if ( is_active_sidebar( $sidebar ) ) { ?>
					<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                		<aside class="sidebar">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </aside>
                    </div>
				<?php }?>
			<?php endif; ?>
			<!-- sidebar area -->
		</div>
	</div>
</div>
<?php get_footer(); ?>