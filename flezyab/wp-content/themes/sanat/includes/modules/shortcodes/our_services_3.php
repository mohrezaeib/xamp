<?php  
   $count = 0;
   $query_args = array('post_type' => 'bunch_services' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['services_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?> 
<?php if($query->have_posts()):  ?>   

<!--Services Section Three-->
<section class="services-section-three">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2><?php echo wp_kses_post($title); ?></h2>
            <div class="separater"></div>
            <div class="text"><?php echo wp_kses_post($text); ?></div>
        </div>
        <div class="row clearfix">
            <?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$service_meta = _WSH()->get_meta();
				if($count > 5){
					$count = 0;
				}
				if($count > 2){
					$class = 'services-block-four';
					$text = wp_trim_words(get_the_content(), '5');
				}
				else{
					$class = 'services-block-three';
					$text = wp_trim_words(get_the_content(), $text_limit);
				}
			?>
            <!--Services Block Three-->
            <div class="<?php echo esc_attr($class); ?> col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon <?php echo str_replace("icon ", "", sanat_set($service_meta, 'fontawesome'));?>"></span>
                    </div>
                    <h3><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h3>
                    <div class="text"><?php echo wp_kses_post($text); ?></div>
                </div>
            </div>
            <?php $count++; endwhile;?>
        </div>
    </div>
</section>
<!--End Services Section Three-->

<?php endif; wp_reset_postdata(); ?>