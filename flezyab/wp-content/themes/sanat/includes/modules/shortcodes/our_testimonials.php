<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['testimonials_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?> 
<?php if($query->have_posts()):  ?>   

<!--Testimonial Section-->
<section class="testimonial-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2><?php echo wp_kses_post($title); ?></h2>
            <div class="separater"></div>
            <div class="text"><?php echo wp_kses_post($text); ?></div>
        </div>
        <div class="two-item-carousel owl-carousel owl-theme">
            <?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$testimonial_meta = _WSH()->get_meta();
			?>
            <!--Testimonial Block-->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="quote-icon">
                        <span class="icon fa fa-quote-left"></span>
                    </div>
                    <div class="text"><?php echo wp_kses_post(sanat_trim(get_the_content(), $text_limit)); ?></div>
                    <div class="author-box">
                        <div class="inner">
                            <div class="image"><?php the_post_thumbnail('sanat_50x50'); ?></div>
                            <h3><?php the_title(); ?></h3>
                            <div class="designation"><?php echo wp_kses_post(sanat_set($testimonial_meta, 'designation')); ?> </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $count++; endwhile;?>
        </div>
    </div>
</section>
<!--End Testimonial Section-->

<?php endif; wp_reset_postdata(); ?>