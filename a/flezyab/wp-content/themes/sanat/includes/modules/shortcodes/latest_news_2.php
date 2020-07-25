<?php global $post;
	$query_args = array('post_type' => 'post' , 'showposts' => $num, 'order_by' => $sort, 'order' => $order);
	if( $cat ) $query_args['category_name'] = $cat;
	$query = new WP_Query($query_args);
?>
<?php if($query->have_posts()): ?>

<!--News Section Two-->
<section class="news-section-two">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2><?php echo wp_kses_post($title); ?></h2>
            <div class="separater"></div>
        </div>
        <div class="row clearfix">
            <?php while($query->have_posts()): $query->the_post();
				global $post;
				$posts_meta = _WSH()->get_meta(); 
			?>
            <!--News Block Three-->
            <div class="news-block-three col-md-4 col-sm-6 col-xs-12">
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
        </div>
    </div>
</section>
<!--End News Section-->

<?php endif; wp_reset_postdata(); ?>