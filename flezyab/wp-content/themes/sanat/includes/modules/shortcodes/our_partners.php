<!--Clients Section-->
<section class="clients-section <?php if ( $remove_top ) :  ?>remove_top_padding<?php endif;  ?><?php if ( $remove_bottom ) :  ?>remove_bottom_padding<?php endif;  ?>">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Title Column-->
            <div class="title-column col-md-3 col-sm-12 col-xs-12">
                <h2><?php echo wp_kses_post($title); ?></h2>
            </div>
            <!--Clients Column-->
            <div class="clients-column col-md-9 col-sm-12 col-xs-12">
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <?php foreach( $atts['sponsors'] as $key => $item ): ?>
                        <li class="slide-item"><figure class="image-box"><a href="<?php echo esc_url($item->link); ?>"><img src="<?php echo esc_url($item->image); ?>" alt="<?php esc_attr_e( 'Partner Image', 'sanat' ); ?>"></a></figure></li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End Clients Section-->