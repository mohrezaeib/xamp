<?php global $post;
	$query_args = array('post_type' => 'post' , 'showposts' => $num, 'order_by' => $sort, 'order' => $order);
	if( $cat ) $query_args['category_name'] = $cat;
	$query = new WP_Query($query_args);
	
	$query_args1 = array('post_type' => 'post' , 'showposts' => $num1, 'order_by' => $sort1, 'order' => $order1);
	if( $cat1 ) $query_args1['category_name'] = $cat1;
	$query1 = new WP_Query($query_args1); ?>

<?php if($query->have_posts()): ?>

<!--News Section-->
<section class="news-section">
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
            <!--Column-->
            <div class="column col-md-6 col-sm-12 col-xs-12">
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>">
                            	<?php the_post_thumbnail('sanat_570x270'); ?>
                            </a>
                        </div>
                        <div class="lower-content">
                            <h3><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h3>
                            <div class="text"><?php echo wp_kses_post(sanat_trim(get_the_content(), $text_limit)); ?></div>
                            <ul class="post-meta">
                                <li><span class="icon fa fa-comments-o"></span><?php comments_number( wp_kses_post(__('0 Comments' , 'sanat')), wp_kses_post(__('1 Comment' , 'sanat')), wp_kses_post(__('% Comments' , 'sanat'))); ?></li>
                                <li><span class="icon fa fa-user"></span><?php the_author(); ?></li>
                                <li><span class="icon fa fa-calendar"></span><?php echo get_the_date(''); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            
            <!--Column-->
            <div class="column col-md-6 col-sm-12 col-xs-12">
                <?php while($query1->have_posts()): $query1->the_post();
					global $post;
					$posts_meta1 = _WSH()->get_meta(); 
				?>
                <div class="news-block-two">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-5 col-xs-12">
                                <div class="image">
                                    <a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>">
                                    	<?php the_post_thumbnail('sanat_231x235'); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="content-column col-md-7 col-sm-7 col-xs-12">
                                <div class="inner-column">
                                    <h3><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h3>
                                    <div class="text"><?php echo wp_kses_post(sanat_trim(get_the_content(), $text_limit1)); ?></div>
                                    <ul class="post-meta">
                                        <li><span class="icon fa fa-comments-o"></span><?php comments_number( wp_kses_post(__('0 Comments' , 'sanat')), wp_kses_post(__('1 Comment' , 'sanat')), wp_kses_post(__('% Comments' , 'sanat'))); ?></li>
                                        <li><span class="icon fa fa-user"></span><?php the_author(); ?></li>
                                        <li><span class="icon fa fa-calendar"></span><?php echo get_the_date(''); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            
        </div>
    </div>
</section>
<!--End News Section-->

<?php endif; wp_reset_postdata(); ?>