<?php $options = _WSH()->option();
	get_header(); 
	$settings  = sanat_set(sanat_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	$meta2 = _WSH()->get_meta();
	_WSH()->page_settings = $meta;
	if(sanat_set($_GET, 'layout_style')) $layout = sanat_set($_GET, 'layout_style'); else
	$layout = sanat_set( $meta, 'layout', 'right' );
	if( !$layout || $layout == 'full' || sanat_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
	$sidebar = sanat_set( $meta, 'sidebar', 'blog-sidebar' );
	$classes = ( !$layout || $layout == 'full' || sanat_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' content-side col-lg-9 col-md-8 col-sm-12 col-xs-12 ' ;
	_WSH()->post_views( true );
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
					<div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                		<aside class="sidebar">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </aside>
                    </div>
				<?php } ?>
			<?php endif; ?>
            
            <!--Content Side-->	
            <div class="content-side <?php echo esc_attr($classes);?>">
                <div class="thm-unit-test">
					
					<?php while( have_posts() ): the_post();
                        global $post; 
                        $post_meta = _WSH()->get_meta();
                    ?>
                
                    <div class="news-single">
                        <div class="inner-box">
                            <?php if(has_post_thumbnail()): ?>
                                <div class="image">
                                    <?php the_post_thumbnail('sanat_1170x400', array( 'class' => 'img-responsive' ) ); ?>
                                </div>
                            <?php endif; ?>
                            <div class="lower-content">
                               
                                <ul class="post-meta">
                                    <li><span class="icon fa fa-comments-o"></span><?php comments_number( wp_kses_post(__('0 Comments' , 'sanat')), wp_kses_post(__('1 Comment' , 'sanat')), wp_kses_post(__('% Comments' , 'sanat'))); ?></li>
                                    <li><span class="icon fa fa-user"></span><?php the_author(); ?></li>
                                    <li><span class="icon fa fa-calendar"></span><?php echo get_the_date(''); ?></li>
                                </ul>
                                
                                <?php the_content();?>
                                
								<?php if(has_tag()):?>
                                    <span class="tags"><?php the_tags('<span class="tag">Tags: </span> ', ', '); ?></span>
                                <?php endif; ?>
                                
                                <div class="clearfix"></div>
                                
								<?php wp_link_pages(array('before'=>'<div class="paginate-links">'.esc_html__('Pages: ', 'sanat'), 'after' => '</div>', 'link_before'=>'<span>', 'link_after'=>'</span>')); ?>
                                
                                <!--post-share-options-->
                                <div class="post-share-options clearfix">
                                    <div class="inner-container clearfix">
                                        <div class="pull-left">
                                            <?php previous_post_link('%link','<div class="prev-post"><span class="fa fa-long-arrow-left"></span> Prev Post</div>'); ?>
                                        </div>
                                        <div class="pull-right">
                                            <?php next_post_link('%link','<div class="next-post">Next Post <span class="fa fa-long-arrow-right"></span> </div>'); ?>
                                        </div>
                                        
                                        <?php if( sanat_set( $options, 'show_sharing_icon' ) ): ?>
                                            <div class="social">
                                                <?php echo wp_kses_post(bunch_share_us(get_the_id(),$post->post_name ));  ?>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- comment area -->
                        <?php comments_template(); ?><!-- end comments -->   
                    
                	</div>
                   
            		<?php endwhile;?>
                
                </div>
            
            </div>
            <!--Content Side-->
            
            <!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
				<?php if ( is_active_sidebar( $sidebar ) ) { ?>
					<div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                		<aside class="sidebar">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </aside>
                    </div>
				<?php } ?>
			<?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>