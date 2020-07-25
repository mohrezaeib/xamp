<?php  
   $count = 1;
   $query_args = array('post_type' => 'bunch_team' , 'showposts' => $num , 'order_by' => $sort , 'order' => $order);
   if( $cat ) $query_args['team_category'] = $cat;
   $query = new WP_Query($query_args) ; 
   ?> 
<?php if($query->have_posts()):  ?>   

<!--Team Section-->
<section class="team-section" style="background-image:url('<?php echo esc_url($bg_img); ?>')">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title light centered">
            <h2><?php echo wp_kses_post($title); ?></h2>
            <div class="separater"></div>
        </div>
        <div class="row clearfix">
            <?php while($query->have_posts()): $query->the_post();
				global $post ; 
				$team_meta = _WSH()->get_meta();
			?>
            <!--News Block-->
            <div class="team-block col-md-3 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image">
                        <?php the_post_thumbnail('sanat_265x400'); ?>
                        <?php if($socials = sanat_set($team_meta, 'bunch_team_social')):?>
                        <ul class="social-icon-one">
                            <?php foreach($socials as $key => $value):?>
                                <li><a href="<?php echo esc_url(sanat_set($value, 'social_link'));?>"><span class="fa <?php echo esc_attr(sanat_set($value, 'social_icon'));?>"></span></a></li>
                            <?php endforeach;?>
                        </ul>
                        <?php endif;?>
                    </div>
                    <div class="lower-box">
                        <h3><a href="<?php echo esc_url(get_the_permalink(get_the_id())); ?>"><?php the_title(); ?></a></h3>
                        <div class="designation"><?php echo wp_kses_post(sanat_set($team_meta, designation));?></div>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
        </div>

    </div>
</section>
<!--End Team Section-->

<?php endif; wp_reset_postdata(); ?>