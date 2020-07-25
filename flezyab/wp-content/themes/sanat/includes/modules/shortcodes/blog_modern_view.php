<?php 
	global $post;
	$count = 0;
   	$paged = get_query_var('paged');
	$query_args = array('post_type' => 'post' , 'showposts' => $num, 'order_by' => $sort, 'order' => $order, 'paged'=>$paged);
	if( $cat ) $query_args['category_name'] = $cat;
	$query = new WP_Query($query_args);
?>
<?php if($query->have_posts()): ?>

<!--Blog Modern Section-->
<section class="blog-modern-section">
    <div class="auto-container">
        
        <?php while($query->have_posts()): $query->the_post();
			global $post;
			$posts_meta = _WSH()->get_meta(); 
			if($count % 2 == 0):
		?>        
        <!--News Block Three-->
        <div class="news-block-three">
            <div class="clearfix">
                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image">
                        <a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_post_thumbnail('globalindustry_585x305'); ?></a>
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="post-date"><?php echo get_the_date('d'); ?><span><?php echo get_the_date('M'); ?></span></div>
                        <h2><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h2>
                        <div class="text"><?php echo wp_kses_post(sanat_trim(get_the_content(), $text_limit)); ?> </div>
                        <ul class="post-meta">
                            <li><a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments'); ?>"><span class="icon fa fa-commenting-o"></span><?php comments_number( wp_kses_post(__('0 Comments' , 'sanat')), wp_kses_post(__('1 Comment' , 'sanat')), wp_kses_post(__('% Comments' , 'sanat'))); ?></a></li>
                            <li><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><span class="icon fa fa-user"></span><?php the_author(); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php else : ?>
        <!--News Block Four-->
        <div class="news-block-four">
            <div class="clearfix">
                <!--Image Column-->
                <div class="image-column pull-right col-md-6 col-sm-12 col-xs-12">
                    <div class="image">
                        <a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_post_thumbnail('sanat_585x305'); ?></a>
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column pull-left col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="post-date"><?php echo get_the_date('d'); ?><span><?php echo get_the_date('M'); ?></span></div>
                        <h2><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h2>
                        <div class="text"><?php echo wp_kses_post(sanat_trim(get_the_content(), $text_limit)); ?> </div>
                        <ul class="post-meta">
                            <li><a href="<?php echo esc_url(get_permalink(get_the_id()).'#comments'); ?>"><span class="icon fa fa-commenting-o"></span><?php comments_number( wp_kses_post(__('0 Comments' , 'sanat')), wp_kses_post(__('1 Comment' , 'sanat')), wp_kses_post(__('% Comments' , 'sanat'))); ?></a></li>
                            <li><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>"><span class="icon fa fa-user"></span><?php the_author(); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
		<?php endif; $count++; endwhile; ?>
        
        <br><br>
        <!--Styled Pagination-->
        <div class="styled-pagination text-center">
			<?php sanat_the_pagination(array('total'=>$query->max_num_pages, 'next_text' => '<i class="fa fa-angle-right"></i>', 'prev_text' => '<i class="fa fa-angle-left"></i>')); ?>
        </div>              
        <!--End Styled Pagination-->
        
    </div>
</section>
<!--End Modern Section Section-->

<?php endif; wp_reset_postdata(); ?>