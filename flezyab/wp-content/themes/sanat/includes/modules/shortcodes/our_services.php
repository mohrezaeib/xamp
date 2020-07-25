<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_services' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['services_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?> 
<?php if($query->have_posts()):  ?>   

<!--Services Section-->
<section class="services-section">
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
			?>
            <!--Services Block-->
            <div class="services-block col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="lower-box">
                        <div class="image">
                            <?php the_post_thumbnail('sanat_370x240'); ?>
                            <div class="overlay-box">
                                <div class="text"><?php echo wp_kses_post(sanat_trim(get_the_content(), $text_limit)); ?></div>
                                <a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>" class="link-btn"><span class="fa fa-link"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="upper-box">
                        <span class="icon <?php echo str_replace("icon ", "", sanat_set($service_meta, 'fontawesome'));?>"></span>
                        <h3><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h3>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
</section>
<!--End Services Section-->

<?php endif; wp_reset_postdata(); ?>