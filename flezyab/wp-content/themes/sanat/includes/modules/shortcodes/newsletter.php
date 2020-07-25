<!--Subscribe Section-->
<section class="subscribe-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="title-column col-md-6 col-sm-12 col-xs-12">
                <h2><?php echo wp_kses_post($title); ?></h2>
                <div class="text"><?php echo wp_kses_post($text); ?></div>
            </div>
            <div class="column col-md-6 col-sm-12 col-xs-12">
                <div class="subscribe-form-two">
                    <form method="get" action="http://feedburner.google.com/fb/a/mailverify" accept-charset="utf-8">
                        <div class="form-group">
                            <input type="hidden" id="uri3" name="uri" value="<?php echo esc_attr($id); ?>">
                            <input type="email" name="email" value="" placeholder="<?php esc_attr_e('Your email address', 'sanat'); ?>" required>
                            <button type="submit" class="theme-btn"><?php esc_html_e('Subscribe', 'sanat'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Subscribe Section-->