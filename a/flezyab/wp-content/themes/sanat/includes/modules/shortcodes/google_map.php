<?php wp_enqueue_script( 'sanat-map-script', get_template_directory_uri().'/js/map-script.js', array(), false, true );  ?>

<!--Map Section-->
<section class="map-section">
    <div class="auto-container1">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="3"
                data-lat="<?php echo esc_js($lat); ?>"
                data-lng="<?php echo esc_js($long); ?>"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="<?php echo esc_js($mark_title); ?>"
                data-icon-path="<?php echo esc_js($image); ?>"
                data-content="<?php echo esc_js($address); ?><br><a href='mailto:<?php echo esc_attr(sanitize_email($email)); ?>'><?php echo esc_attr(sanitize_email($email)); ?></a>">
            </div>
        </div>
        
        <!--Map Info Box-->
        <div class="map-info-box">
            <div class="info-inner">
                <!--List Style Two-->
                <ul class="list-style-two">
                    <?php foreach( $atts['information'] as $key => $item ): ?>
                    <li><span class="icon <?php echo esc_attr($item->icons); ?>"></span><?php echo wp_kses_post($item->description); ?></li>
                    <?php endforeach;?>
                </ul>
                
            </div>
        </div>
        
    </div>
</section>
<!--End Map Section-->