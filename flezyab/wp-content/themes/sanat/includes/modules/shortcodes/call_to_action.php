<!--Call To Action Section-->
<section class="call-to-action-section" style="background-image:url('<?php echo esc_url($bg_img); ?>')">
    <div class="auto-container">
        <div class="row clearfix">
            
            <div class="column col-md-9 col-sm-12 col-xs-12">
                <div class="text"><?php echo wp_kses_post($title); ?></div>
            </div>
            <div class="btn-column col-md-3 col-sm-12 col-xs-12">
                <a href="<?php echo esc_url($btn_link); ?>" class="theme-btn btn-style-one"><?php echo wp_kses_post($btn_title); ?></a>
            </div>
            
        </div>
    </div>
</section>
<!--End Call To Action Section-->