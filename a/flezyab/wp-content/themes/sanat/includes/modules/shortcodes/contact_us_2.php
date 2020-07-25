<?php $options = _WSH()->option(); 
?>

<!--Contact Section-->
<section class="contact-section">
    <div class="auto-container">
        <div class="sec-title">
            <h2><?php echo wp_kses_post($title); ?></h2>
            <div class="separater"></div>
        </div>
        <div class="row clearfix">
            <div class="form-column col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="inner-column">
                    
                    <!-- Default Form -->
                    <div class="default-form contact-form">
                        <!--Default Form-->
                        <?php echo do_shortcode($contact_form); ?>
                    </div>
                    <!--End Default Form -->
                    
                </div>
            </div>
            <div class="info-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <!--List Style Three-->
                <ul class="list-style-three">
                    <?php foreach( $atts['contact_info'] as $key => $item ): ?>
                    <li><span class="icon <?php echo esc_attr($item->icons); ?>"></span><?php echo wp_kses_post($item->description); ?></li>
                    <?php endforeach;?>
                </ul>
                
                <?php if($show_social): ?>
					<?php if(sanat_set($options, 'head_social_1')): ?>
                        <?php if(sanat_set( $options, 'social_media' ) && is_array( sanat_set( $options, 'social_media' ) )): ?>
                        <ul class="social-icon-two">
                            <li class="follow"><?php esc_html_e('Follow us :', 'sanat'); ?></li>
                            <?php $social_icons = sanat_set( $options, 'social_media' );
								foreach( sanat_set( $social_icons, 'social_media' ) as $social_icon ):
								if( isset( $social_icon['tocopy' ] ) ) continue; ?>
								<li><a href="<?php echo esc_url(sanat_set( $social_icon, 'social_link')); ?>"><span class="fa <?php echo esc_attr(sanat_set( $social_icon, 'social_icon')); ?>"></span></a></li>
							<?php endforeach; ?>
                        </ul>
                		<?php endif;?>
                    <?php endif;?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section-->