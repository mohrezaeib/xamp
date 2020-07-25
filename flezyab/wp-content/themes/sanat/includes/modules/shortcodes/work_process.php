<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_services' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['services_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?> 
<?php if($query->have_posts()):  ?>

<!--Work Section-->
<section class="work-section" style="background-image:url('<?php echo esc_url($bg_img); ?>')">
    <div class="auto-container">
        <div class="sec-title light centered">
            <h2><?php echo wp_kses_post($title); ?></h2>
            <div class="separater"></div>
        </div>
        
        <div class="row clearfix">
            <?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$service_meta = _WSH()->get_meta();
			?>
            <!--Process Block-->
            <div class="process-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="upper-box">
                        <div class="icon-box">
                            <span class="icon <?php echo str_replace("icon ", "", sanat_set($service_meta, 'fontawesome'));?>"></span>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h3>
                        <div class="text"><?php echo wp_kses_post(sanat_trim(get_the_content(), $text_limit)); ?></div>
                    </div>
                </div>
            </div>
            <?php $count++; endwhile;?>
        </div>
        
    </div>
</section>
<!--End Work Section-->

<?php endif; wp_reset_postdata(); ?>