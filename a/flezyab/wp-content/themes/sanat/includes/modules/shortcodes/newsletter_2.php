<!--Fluid Section One-->
<section class="fluid-section-one">
    <div class="outer-container clearfix">
        <!--Title Column-->
        <div class="title-column" style="background-image:url('<?php echo esc_url($bg_img); ?>');">
            <div class="inner-column">
                <div class="icon-box">
                    <span class="icon flaticon-envelope-2"></span>
                </div>
                <div class="text"><?php echo wp_kses_post($upper_title); ?></div>
                <h2><?php echo wp_kses_post($title); ?></h2>
            </div>
        </div>
        <!--Form Column-->
        <div class="form-column" style="background-image:url('<?php echo esc_url($bg_img1); ?>');">
            <div class="inner-column">
               <div class="subscribe-form-three">
                    <form method="get" action="http://feedburner.google.com/fb/a/mailverify" accept-charset="utf-8">
                        <div class="form-group">
                            <input type="hidden" id="uri4" name="uri" value="<?php echo esc_attr($id); ?>">
                            <input type="email" name="email" value="" placeholder="<?php esc_attr_e('Your email address', 'sanat'); ?>" required>
                            <button type="submit" class="theme-btn"><span class="fa fa-send"></span></button>
                        </div>
                    </form>
               </div>
            </div>
        </div>
    </div>
</section>
<!--End Fluid Section One-->