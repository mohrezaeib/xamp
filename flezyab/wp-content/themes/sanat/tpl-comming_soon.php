<?php /* Template Name: Comming Soon Page */
	$options = _WSH()->option();
	get_header('comming-soon') ;
	$bg = (sanat_set($options, 'cs_section_img')) ? sanat_set($options, 'cs_section_img') : get_template_directory_uri().'/images/background/12.jpg';
	$logo_img = (sanat_set($options, 'cs_logo_img')) ? sanat_set($options, 'cs_logo_img') : get_template_directory_uri().'/images/logo-2.png';
	$title = sanat_set($options, 'cs_section_title');
	$count = sanat_set($options, 'cs_section_count');
	$text = sanat_set($options, 'cs_section_text');
	$id = sanat_set($options, 'cs_id');
?>

<!--Comming Soon Page-->
<section class="comming-soon" style="background-image:url('<?php echo esc_url($bg);?>')">
    <div class="auto-container">
        <div class="content">
            <div class="content-inner">
                <div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($logo_img);?>" alt="<?php esc_attr_e( 'Comming Soon Page Logo', 'sanat' ); ?>" /></a></div>
                <h2><?php if($title) echo wp_kses_post($title); else esc_html_e('Comming Soon', 'sanat');?></h2>
                <div class="time-counter"><div class="time-countdown clearfix" data-countdown="<?php if($count) echo esc_attr($count); else esc_html_e('2019/8/17', 'sanat');?>"></div></div>
                <div class="text"><?php if($text): echo wp_kses_post($text); else : esc_html_e('Our Website is under construction. stay tuned for something amazing!.', 'sanat');?> <br> <?php esc_html_e('Subscribe to be notified,', 'sanat'); endif;?></div>
                <!--Emailed Form-->
                <div class="emailed-form">
                    <form method="post" action="http://feedburner.google.com/fb/a/mailverify" accept-charset="utf-8">
                        <div class="form-group">
                            <input type="hidden" id="uri2" name="uri" value="<?php echo wp_kses_post($id); ?>">
                            <input type="email" name="email" value="" placeholder="<?php esc_attr_e('Enter your email', 'sanat');?>" required>
                            <button type="submit" class="theme-btn"><?php esc_html_e('Submit', 'sanat');?></button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?php while( have_posts() ): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile;  ?>
<?php get_footer('comming-soon') ; ?>