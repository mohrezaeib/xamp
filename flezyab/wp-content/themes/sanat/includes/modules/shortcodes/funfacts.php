<!--Counter Section-->
<section class="counter-section" <?php if ( $bg_img ) : ?>style="background-image:url('<?php echo esc_url($bg_img); ?>')"<?php endif; ?>">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Counter Column-->
            <div class="counter-main-column col-md-8 col-sm-12 col-xs-12">
                <div class="inner-column">
                    
                    <div class="fact-counter">
            
                        <div class="row clearfix">
                        	<?php foreach( $atts['funfact'] as $key => $item ): ?>
                            <!--Column-->
                            <div class="column counter-column col-md-4 col-sm-4 col-xs-12">
                                <div class="inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3500" data-stop="<?php echo wp_kses_post($item->counter_stop); ?>"><?php echo wp_kses_post($item->counter_start); ?></span><?php echo wp_kses_post($item->plus_sign); ?>
                                    </div>
                                    <h4 class="counter-title"><?php echo wp_kses_post($item->title); ?></h4>
                                </div>
                            </div>
                    		<?php endforeach;?>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <!--Image Column-->
            <div class="image-column col-md-4 col-sm-12 col-xs-12">
                <div class="image">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e( 'Fun Fact Image', 'sanat' ); ?>" />
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Counter Section-->