<?php $options = _WSH()->option();
	get_header();
	$settings  = sanat_set(sanat_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	if(sanat_set($_GET, 'layout_style')) $layout = sanat_set($_GET, 'layout_style'); else
	$layout = sanat_set( $meta, 'layout', 'right' );
	$sidebar = sanat_set( $meta, 'sidebar', 'default-sidebar' );
	$layout = ($layout) ? $layout : 'right';
	$sidebar = ($sidebar) ? $sidebar : 'default-sidebar';
	$classes = ( !$layout || $layout == 'full' || sanat_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12 ' ;
	$bg = sanat_set($meta1, 'header_img');
	$title = sanat_set($meta1, 'header_title');
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
            
            <!--Content Side-->	
            <div class="content-side <?php echo esc_attr($classes);?>">
                
                <!--Default Section-->
                <div class="blog-classic">
                
                    <!--Blog Post-->
                    <div class="thm-unit-test">
						
						<?php while( have_posts() ): the_post();?>
                            <!-- blog post item -->
                            <?php the_content(); ?>
                            <div class="clearfix"></div>
                            <div class="post-share-options clearfix">
                                <div class="inner-container clearfix">
                                    <div class="pull-left prev">
                                        <?php previous_post_link('%link','<div class="prev-post"><span class="fa fa-long-arrow-left"></span> Prev Post</div>'); ?>
                                    </div>
                                    <div class="pull-right next">
                                        <?php next_post_link('%link','<div class="next-post">Next Post <span class="fa fa-long-arrow-right"></span> </div>'); ?>
                                    </div>

                                </div>
                            </div>
                            <?php comments_template(); ?><!-- end comments -->
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