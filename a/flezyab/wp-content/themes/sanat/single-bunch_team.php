<?php $options = _WSH()->option();
	get_header();
	$meta = _WSH()->get_meta('_bunch_header_settings');
	$bg = sanat_set($meta, 'header_img');
	$title = sanat_set($meta, 'header_title');
?>

<!--Page Title-->
<section class="page-title" <?php if($bg):?>style="background-image:url(<?php echo esc_url($bg)?>);"<?php endif;?>>
    <div class="auto-container">
        <h1><?php if($title) echo wp_kses_post($title); else wp_title('');?></h1>
        
		<?php echo wp_kses_post(sanat_get_the_breadcrumb()); ?>
        
    </div>
</section>
<!--End Page Title-->

<?php while( have_posts() ): the_post(); 
	$team_meta = _WSH()->get_meta();
	$designation = sanat_set($team_meta, 'designation');
?> 

<!--Team Single Section-->
<section class="teacher-single">
	<div class="auto-container">
    	<div class="row clearfix">
    	
        	<!--Image Column-->
            <div class="image-column col-md-5 col-sm-12 col-xs-12">
            	<div class="image">
                	<?php the_post_thumbnail( 'sanatx299x300', array( 'class' => 'img-responsive' ) );  ?>
                </div>
            </div>
            <!--Content Column-->
            <div class="content-column col-md-7 col-sm-12 col-xs-12">
            	<div class="content-inner">
                	<h3><?php the_title(); ?></h3>
                    <div class="designation"><?php echo wp_kses_post( $designation ); ?></div>
                    <?php if($socials = sanat_set($team_meta, 'bunch_team_social')):?>
                        <ul class="social-icon-five">
                            <?php foreach($socials as $key => $value):?>
                                <li><a target="_blank" href="<?php echo esc_url(sanat_set($value, 'social_link'));?>"><span class="fa <?php echo esc_attr(sanat_set($value, 'social_icon'));?>"></span></a></li>
                            <?php endforeach;?>
                        </ul>
                    <?php endif;?>
                    <div class="text">
                    	<?php the_content();  ?>
                    </div>
                    
                    <?php if( $summary = sanat_set( $team_meta, 'bunch_team_summary' ) ) :  ?>
                        <!--Teachers Info-->
                        <div class="teachers-info">
                        
                            <?php foreach( $summary as $key => $value ) : ?>    
                            	<div class="teacher-block">
                                	<div class="inner">
                                    	<div class="title"><?php echo esc_attr(sanat_set($value, 'title'));?></div>
                                        <h3><?php echo esc_attr(sanat_set($value, 'summ_content'));?></h3>
                                    </div>
                                </div>
                            <?php endforeach;?>
                            
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
        
        <!--Options-->
            <div class="post-options">
                <div class="inner-box">
                    <div class="clearfix">
                        <ul>
                            <li class="prev"><?php previous_post_link('%link','<span class="fa fa-long-arrow-left"></span> Prev Post'); ?></li>
                            <li class="next"><?php next_post_link('%link','Next Post <span class="fa fa-long-arrow-right"></span>'); ?></li>
                            <li class="grid"><a href="javascript:;"><span class="icon fa fa-th"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
    </div>
</section>
<!--Team Section-->

<?php endwhile;?>

<?php get_footer(); ?>