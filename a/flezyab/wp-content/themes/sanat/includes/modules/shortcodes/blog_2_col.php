<?php 
	global $post;
	$count = 0;
   	$paged = get_query_var('paged');
	$query_args = array('post_type' => 'post' , 'showposts' => $num, 'order_by' => $sort, 'order' => $order, 'paged'=>$paged);
	if( $cat ) $query_args['category_name'] = $cat;
	$query = new WP_Query($query_args);
?>
<?php if($query->have_posts()): ?>

<!--Blog Page Section-->
<section class="blog-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Content Side-->	
            <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">

				<?php while($query->have_posts()): $query->the_post();
                    global $post;
                    $posts_meta = _WSH()->get_meta(); 
                ?>
                <!--News Block Three-->
                <div class="news-block-three col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <?php the_post_thumbnail('sanat_370x240'); ?>
                            <a class="overlay-link" href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><span class="icon fa fa-link"></span></a>
                        </div>
                        <div class="lower-content padd_btm">
                            <ul class="post-meta">
                                <li><span class="icon fa fa-comments-o"></span><?php comments_number( wp_kses_post(__('0 Comments' , 'sanat')), wp_kses_post(__('1 Comment' , 'sanat')), wp_kses_post(__('% Comments' , 'sanat'))); ?></li>
                                <li><span class="icon fa fa-user"></span><?php the_author(); ?></li>
                                <li><span class="icon fa fa-calendar"></span><?php echo get_the_date(''); ?></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                            <h3><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h3>
                            <div class="text"><?php echo wp_kses_post(sanat_trim(get_the_content(), $text_limit)); ?></div>
                            <a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>" class="theme-btn btn-style-three"><?php esc_html_e('Read More', 'sanat'); ?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                
                <div class="clearfix"></div>
                
                <!--Styled Pagination-->
                <div class="styled-pagination text-center">
                    <?php sanat_the_pagination(array('total'=>$query->max_num_pages, 'next_text' => '<i class="fa fa-angle-right"></i>', 'prev_text' => '<i class="fa fa-angle-left"></i>')); ?>
                </div>
                
            </div>
            
            <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <aside class="sidebar">
            		<?php if ( is_active_sidebar( $sidebar_slug ) ) : ?>
						<?php dynamic_sidebar( $sidebar_slug ); ?>
                	<?php endif; ?>
                </aside>
            </div>
            
        </div>
        
    </div>
</section>
<!--End Blog Page Section-->

<?php endif; wp_reset_postdata(); ?>