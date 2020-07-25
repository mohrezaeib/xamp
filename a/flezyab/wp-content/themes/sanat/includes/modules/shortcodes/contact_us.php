<!--Contact Info Section-->
<section class="contact-info-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Info Column-->
            <div class="info-column col-md-4 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($logo_img); ?>" alt="<?php esc_attr_e( 'Logo', 'sanat' ); ?>" /></a>
                    </div>
                    <div class="text"><?php echo wp_kses_post($text); ?></div>
                    <!--List Style Three-->
                    <ul class="list-style-three">
                        <?php foreach( $atts['contact_info'] as $key => $item ): ?>
                        	<li><span class="icon <?php echo esc_attr($item->icons); ?>"></span><?php echo wp_kses_post($item->description); ?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <!--Form Column-->
            <div class="form-column col-md-8 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2><?php echo wp_kses_post($form_title); ?></h2>
                        <div class="separater"></div>
                    </div>
                    <!-- Default Form -->
                    <div class="default-form">
                        <?php echo do_shortcode($contact_form); ?>
                    </div>
                    <!--End Default Form -->
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Contact Info Section-->