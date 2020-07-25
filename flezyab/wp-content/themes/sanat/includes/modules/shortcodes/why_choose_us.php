<!--Product Section-->
<section class="product-section <?php if($style_two == 'option_1') echo 'alternate'; ?>">
    <div class="upper-box" style="background-image:url('<?php echo esc_url($bg_img); ?>')">
        <div class="auto-container">
            <h2><?php echo wp_kses_post($title); ?></h2>
        </div>
    </div>
    <div class="auto-container">
        <div class="lower-box">
            <div class="clearfix">
                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e( 'Footer Logo', 'sanat' ); ?>" />
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h3><?php echo wp_kses_post($title1); ?></h3>
                        <div class="text">
                            <?php echo wp_kses_post($text); ?>
                        </div>
                        <div class="row clearfix">
                            <div class="column col-md-6 col-sm-6 col-xs-12">
                                <ul class="list-style-one">
                                    <?php $count = 0; foreach( $atts['services'] as $key => $item ): ?>
                                    <?php if(($count%2) == 0 && $count != 0):?>
                                </ul>
                            </div>
                            <div class="column col-md-6 col-sm-6 col-xs-12">
                                <ul class="list-style-one">
                                    <?php endif; ?>
                                    <li><span class="icon <?php echo esc_attr($item->icons); ?>"></span><?php echo wp_kses_post($item->title2); ?></li>
                                    <?php $count++; endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Product Section-->