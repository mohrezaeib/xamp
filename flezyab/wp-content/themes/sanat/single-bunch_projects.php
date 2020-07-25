<?php $options = _WSH()->option();
	get_header(); 
	$settings  = sanat_set(sanat_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	$meta2 = _WSH()->get_meta();
	_WSH()->page_settings = $meta;
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

<?php while( have_posts() ): the_post(); 
	$post_meta = _WSH()->get_meta('bunch_projects');
?> 

<!--Project Single Section-->
<section class="project-single-section">
    <div class="auto-container">
        <div class="inner-box">
        
            <div class="upper-box">
                <div class="single-item-carousel owl-carousel owl-theme">
                    <?php if($projects_img = sanat_set($meta2, 'bunch_projects_image')): ?>
                    	<?php foreach($projects_img as $key => $value):?>
                            <div class="slide">
                                <div class="image">
                                    <img src="<?php echo esc_url(sanat_set($value, 'projects_image'));?>" alt="<?php esc_attr_e('Image', 'sanat'); ?>" />
                                </div>
                            </div>
                    	<?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
            
            <h2><?php the_title(); ?></h2>
            <div class="row clearfix">
                <!--Content Column-->
                <div class="content-column col-md-9 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="text">
                            <?php the_content(); ?>
                        </div>
                        <?php if(sanat_set($options, 'show_sharing_icon')):?>
                            <ul class="social-icon-one">
                                <?php if(sanat_set($options, 'facebook_sharing')):?>
                                <li><a href="http://www.facebook.com/sharer.php?u=<?php echo esc_url(get_permalink(get_the_id())); ?>" target="_blank"><span class="fa fa-facebook-f"></span></a></li>
                                <?php endif;?>
                                
                                <?php if(sanat_set($options, 'twitter_sharing')):?>
                                <li><a href="https://twitter.com/share?url=<?php echo esc_url(get_permalink(get_the_id())); ?>&text=<?php echo esc_attr($post_slug=$post->post_name); ?>" target="_blank"><span class="fa fa-twitter"></span></a></li>
                                <?php endif;?>
                                
                                <?php if(sanat_set($options, 'google_plus_sharing')):?>
                                <li><a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink(get_the_id())); ?>" target="_blank"><span class="fa fa-google-plus"></span></a></li>
                                <?php endif;?>
                                
                                <?php if(sanat_set($options, 'linkedin_sharing')):?>
                                <li><a href="http://www.linkedin.com/shareArticle?url=<?php echo esc_url(get_permalink(get_the_id())); ?>&title=<?php echo esc_attr($post_slug=$post->post_name); ?>"><span class="fa fa-linkedin"></span></a></li>
                                <?php endif;?>
                                
                                <?php if(sanat_set($options, 'pinterest_sharing')):?>
                                <li><a href="https://pinterest.com/pin/create/bookmarklet/?url=<?php echo esc_url(get_permalink(get_the_id())); ?>&description=<?php echo esc_attr($post_slug=$post->post_name); ?>"><span class="fa fa-pinterest"></span></a></li>
                                <?php endif;?>
                                
                                <?php if(sanat_set($options, 'reddit_sharing')):?>
                                <li><a href="http://reddit.com/submit?url=<?php echo esc_url(get_permalink(get_the_id())); ?>&title=<?php echo esc_attr($post_slug=$post->post_name); ?>"><span class="fa fa-reddit"></span></a></li>
                                <?php endif;?>
                                
                                <?php if(sanat_set($options, 'tumblr_sharing')):?>
                                <li><a href="http://www.tumblr.com/share/link?url=<?php echo esc_url(get_permalink(get_the_id())); ?>&name=<?php echo esc_attr($post_slug=$post->post_name); ?>"><span class="fa fa-tumblr"></span></a></li>
                                <?php endif;?>
                                
                                <?php if(sanat_set($options, 'digg_sharing')):?>
                                <li><a href="http://digg.com/submit?url=<?php echo esc_url(get_permalink(get_the_id())); ?>&title=<?php echo esc_attr($post_slug=$post->post_name); ?>"><span class="fa fa-digg"></span></a></li>
                                <?php endif;?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <!--Info Column-->
                <div class="info-column col-md-3 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <ul>
                            <li><strong><?php esc_html_e('Client :', 'sanat'); ?></strong> <?php echo wp_kses_post(sanat_set($meta2, 'client_name')); ?></li>
                            <li><strong><?php esc_html_e('Date :', 'sanat'); ?></strong> <?php echo wp_kses_post(sanat_set($meta2, 'project_date')); ?></li>
                            <li><strong><?php esc_html_e('Link :', 'sanat'); ?></strong> <?php echo wp_kses_post(sanat_set($meta2, 'website_link')); ?></li>
                            <li><strong><?php esc_html_e('Location :', 'sanat'); ?></strong> <?php echo wp_kses_post(sanat_set($meta2, 'location')); ?></li>
                            <li><strong><?php esc_html_e('Value :', 'sanat'); ?></strong> <?php echo wp_kses_post(sanat_set($meta2, 'project_price')); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        
            <!--Options-->
            <div class="post-options">
                <div class="inner-box">
                    <div class="clearfix">
                        <ul>
                            <li class="prev"><?php previous_post_link('%link','<span class="fa fa-long-arrow-left"></span> Prev Post'); ?></li>
                            <li class="next"><?php next_post_link('%link','Next Post <span class="fa fa-long-arrow-right"></span>'); ?></li>
                            <li class="grid"><a href="javascript:;"><span class="icon fa fa-th"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        
        </div>
	</div>
</section>
<!--End Project Modern Section-->

<?php endwhile;?>

<?php get_footer(); ?>