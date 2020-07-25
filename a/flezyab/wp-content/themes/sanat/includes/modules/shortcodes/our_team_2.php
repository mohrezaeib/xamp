<?php  
   $count = 1;
   $paged = get_query_var('paged');
   $query_args = array('post_type' => 'bunch_team' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order, 'paged'=>$paged);
   if( $cat ) $query_args['team_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?> 
<?php if($query->have_posts()):  ?>   

<!-- start our-team -->
<section class="our-team section-padding">
    <div class="container">
        <div class="sec-title centered">
            <h2><?php echo wp_kses_post($title); ?></h2>
            <div class="separater"></div>
            <div class="text"><?php echo wp_kses_post($text); ?></div>
        </div>
        <div class="row clearfix">
            <div class="team-slider team-grids">
                <?php while($query->have_posts()): $query->the_post();
					global $post ; 
					$team_meta = _WSH()->get_meta();
				?>
                <div class="team-grid col-md-3 col-sm-6 col-xs-12">
                    <div class="member-pic-social square-hover-effect-parent">
                        <div class="square-hover-effect">
                            <span class="hover-1"></span>
                            <span class="hover-2"></span>
                            <span class="hover-3"></span>
                            <span class="hover-4"></span>
                        </div>
                        <div class="member-pic">
                            <?php the_post_thumbnail('sanat_299x300'); ?>
                        </div>
                        <?php if($socials = sanat_set($team_meta, 'bunch_team_social')):?>
                        <div class="social">
                            <ul class="social-links">
                                <?php foreach($socials as $key => $value):?>
                                    <li><a href="<?php echo esc_url(sanat_set($value, 'social_link'));?>"><i class="fa <?php echo esc_attr(sanat_set($value, 'social_icon'));?>"></i></a></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <?php endif;?>
                    </div>
                    <div class="member-info">
                        <h3><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_kses_post(sanat_set($team_meta, designation));?></p>
                    </div>
                </div>
                <?php endwhile;?>
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
<!-- end our-team -->

<?php endif; wp_reset_postdata(); ?>