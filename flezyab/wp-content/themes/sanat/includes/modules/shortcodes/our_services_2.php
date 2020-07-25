<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_services' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['services_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?> 
<?php if($query->have_posts()):  ?>   

<!--Services Section Two-->
<section class="services-section-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="three-item-carousel owl-carousel owl-theme">
				<?php while($query->have_posts()): $query->the_post();
                    global $post ; 
                    $service_meta = _WSH()->get_meta();
                ?>
                <!--Services Block Two-->
                <div class="services-block-two">
                    <div class="inner-box">
                        <div class="upper-box">
                            <div class="image">
                                <?php the_post_thumbnail('sanat_370x250'); ?>
                                <div class="icon-box">
                                    <span class="icon <?php echo str_replace("icon ", "", sanat_set($service_meta, 'fontawesome'));?>"></span>
                                </div>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="text"><?php echo wp_kses_post(sanat_trim(get_the_content(), $text_limit)); ?></div>
                                        <a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>" class="read-more"><?php esc_html_e('Read More', 'sanat'); ?> <span class="fa fa-angle-double-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h3>
                            <div class="title"><?php echo wp_kses_post(sanat_set($service_meta, 'sub_title')); ?></div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
</section>
<!--End Services Section Two-->

<?php endif; wp_reset_postdata(); ?>