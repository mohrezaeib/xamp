<?php sanat_bunch_global_variable();
	$options = _WSH()->option();
	get_header(); 
	$settings  = _WSH()->option(); 
	if(sanat_set($_GET, 'layout_style')) $layout = sanat_set($_GET, 'layout_style'); else
	$layout = sanat_set( $settings, 'search_page_layout', 'right' );
	$sidebar = sanat_set( $settings, 'search_page_sidebar', 'default-sidebar' );
	_WSH()->page_settings = array('layout'=>$layout, 'sidebar'=>$sidebar);
	$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
	$layout = ( $layout ) ? $layout : 'right';
	$classes = ( !$layout || $layout == 'full' || sanat_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12 ' ;
	$bg = sanat_set($settings, 'search_page_header_img');
	$title = sanat_set($settings, 'search_page_header_title');
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
            
            <?php if(have_posts()):?>
            <!--Content Side-->	
            <div class="content-side <?php echo esc_attr($classes);?>">
                
                <!--Default Section-->
                <div class="blog-classic">
                    
                    <!--Blog Post-->
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
                    <div class="styled-pagination">
                        <div class="inner-container clearfix">
                            <div class="clearfix text-center">
                                <?php sanat_the_pagination(); ?>
            				</div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
			
			<?php else : ?>
                <div class="<?php echo esc_attr($classes);?>">
                    <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sanat' ); ?></p>
                    <aside class="sidebar">
                    <?php get_search_form(); ?>
                    </aside>
                </div>
			<?php endif; ?>
            <!--Content Side-->
            
            <!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
				<?php if ( is_active_sidebar( $sidebar ) ) { ?>
					<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                		<aside class="sidebar">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </aside>
                    </div>
				<?php } ?>
			<?php endif; ?>
            <!--Sidebar-->
        </div>
    </div>
</div>

<?php get_footer(); ?>