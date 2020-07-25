<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_projects' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['projects_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?>
<?php if($query->have_posts()):  ?>  

<!--Projects Section-->
<section class="projects-section" style="background-image:url('<?php echo esc_url($bg_img); ?>')">
    <div class="auto-container">
        <div class="sec-title centered light">
            <h2><?php echo wp_kses_post($title); ?></h2>
            <div class="separater"></div>
        </div>
    </div>
    <div class="outer-container">
        <div class="five-item-carousel owl-carousel owl-theme">
            <?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$project_meta = _WSH()->get_meta();
			?>
            <!--Portfolio Item Two-->
            <div class="portfolio-item-two">
                <div class="inner-box">
                    <figure class="image-box">
                    	<?php the_post_thumbnail('sanat_350x270'); ?>
                    </figure>
                    <!--Overlay Box-->
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="content">
                                <h3><a href="<?php echo esc_url(get_the_permalink(get_the_id()));?>"><?php the_title(); ?></a></h3>
                                <?php $term_list = wp_get_post_terms(get_the_id(), 'projects_category', array("fields" => "names")); ?>
								<div class="tags"><?php echo implode( ', ', (array)$term_list );?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
    
</section>
<!--End Projects Section-->

<?php endif; wp_reset_postdata(); ?>