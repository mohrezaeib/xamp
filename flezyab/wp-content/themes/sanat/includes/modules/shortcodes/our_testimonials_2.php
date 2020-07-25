<?php  
   $count = 1;
   $paged = get_query_var('paged');
   $query_args = array('post_type' => 'bunch_testimonials' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order, 'paged'=>$paged);
   if( $cat ) $query_args['testimonials_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?> 
<?php if($query->have_posts()):  ?>   

<!-- start testimoials-s2 -->
<section class="section-padding testimonials-s2-grid-view-section">
    <div class="container">
        <div class="sec-title centered">
            <h2><?php echo wp_kses_post($title); ?></h2>
            <div class="separater"></div>
            <div class="text"><?php echo wp_kses_post($text); ?></div>
        </div>
        <div class="row clearfix">
            <div class="testimoials-s2-grids testimoials-s2-grid-view">
                <?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$testimonial_meta = _WSH()->get_meta();
				?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="testimoials-s2-grid">
                        <div class="client-quote">
                            <p><?php echo wp_kses_post(sanat_trim(get_the_content(), $text_limit)); ?></p>
                        </div>
                        <div class="client-info">
                            <div class="details">
                                <div class="pic">
                                    <?php the_post_thumbnail('sanat_70x70'); ?>
                                </div>
                                <div class="info">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php echo wp_kses_post(sanat_set($testimonial_meta, 'designation')); ?></p>
                                </div>
                            </div>
                            <div class="rating">
                                <?php
									$ratting = sanat_set($testimonial_meta, 'testimonial_rating');
									for ($x = 1; $x <= 5; $x++) {
									if($x <= $ratting) echo '<i class="fa fa-star"></i>'; else echo '<i class="fa fa-star-o"></i>'; 
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $count++; endwhile;?>
            </div>
            <div class="clearfix"></div>
            <br><br>
            <!--Styled Pagination-->
            <div class="styled-pagination text-center">
    			<?php sanat_the_pagination(array('total'=>$query->max_num_pages, 'next_text' => '<i class="fa fa-angle-right"></i>', 'prev_text' => '<i class="fa fa-angle-left"></i>')); ?>
            </div>              
            <!--End Styled Pagination-->
        </div>
    </div> <!-- end container -->
</section>
<!-- end testimoials-s2 -->

<?php endif; wp_reset_postdata(); ?>