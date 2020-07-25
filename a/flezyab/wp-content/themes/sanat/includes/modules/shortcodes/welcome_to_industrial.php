<!--Welcome Section-->
<section class="welcome-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Content Column-->
            <div class="content-column col-md-7 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <h2><?php echo wp_kses_post($title); ?></h2>
                    <div class="text">
                        <p><?php echo wp_kses_post($text); ?></p>
                        <h3><?php echo wp_kses_post($sub_title); ?></h3>
                        <p><?php echo wp_kses_post($text1); ?></p>
                    </div>
                    <a href="<?php echo esc_url($btn_link); ?>" class="theme-btn btn-style-three"><?php echo wp_kses_post($btn_title); ?></a>
                </div>
            </div>
            
            <!--image Column-->
            <div class="image-column col-md-5 col-sm-12 col-xs-12">
                <div class="image">
                    <img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e( 'Welcome banner Image', 'sanat' ); ?>" />
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Welcome Section-->