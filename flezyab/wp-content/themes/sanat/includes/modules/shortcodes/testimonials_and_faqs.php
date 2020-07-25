<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['testimonials_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?> 
<?php if($query->have_posts()):  ?>   

<!--Default Section-->
<section class="default-section" <?php if ( $bg_img ) : ?>style="background-image:url('<?php echo esc_url($bg_img); ?>')"<?php endif; ?>">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Testimonial Column-->
            <div class="testimonial-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2><?php echo wp_kses_post($title); ?></h2>
                        <div class="separater"></div>
                    </div>
                
                    <div class="single-item-carousel owl-carousel owl-theme">
                        <?php while($query->have_posts()): $query->the_post();
							global $post ; 
							$testimonial_meta = _WSH()->get_meta();
						?>
                        <!--Testimonial Block Two-->
                        <div class="testimonial-block-two">
                            <div class="inner-box">
                                <div class="quote-icon">
                                    <span class="icon flaticon-quote-left"></span>
                                </div>
                                <div class="text"><?php echo wp_kses_post(sanat_trim(get_the_content(), $text_limit)); ?></div>
                                <div class="lower-box">
                                    <div class="author-box">
                                        <div class="author-inner">
                                            <div class="image">
                                                <?php the_post_thumbnail('sanat_70x70'); ?>
                                            </div>
                                            <h3><?php the_title(); ?></h3>
                                            <div class="designation"><?php echo wp_kses_post(sanat_set($testimonial_meta, 'designation')); ?> </div>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <?php
											$ratting = sanat_set($testimonial_meta, 'testimonial_rating');
											for ($x = 1; $x <= 5; $x++) {
											if($x <= $ratting) echo '<span class="fa fa-star"></span>'; else echo '<span class="fa fa-star-o"></span>'; 
											}
										?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $count++; endwhile;?>
                    </div>
                </div>
            </div>
            
            <!--Accordian Column-->
            <div class="accordian-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2><?php echo wp_kses_post($title1); ?></h2>
                        <div class="separater"></div>
                    </div>
                    
                    <!--Accordian Box-->
                    <ul class="accordion-box">
                        <?php foreach( $atts['accordion'] as $key => $item ): ?>
                            <!--Block-->
                            <li class="accordion block <?php if($key == 2) echo 'active-block'; ?>">
                                <div class="acc-btn <?php if($key == 2) echo 'active'; ?>"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div><?php echo wp_kses_post($item->acc_title); ?></div>
                                <div class="acc-content <?php if($key == 2) echo 'current'; ?>">
                                    <div class="content">
                                        <div class="text"><?php echo wp_kses_post($item->acc_text); ?></div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Default Section-->

<?php endif; wp_reset_postdata(); ?>