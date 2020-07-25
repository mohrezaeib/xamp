<?php $options = _WSH()->option();
	sanat_bunch_global_variable();
?>
 	
    <!-- Main Header / Header Style Two-->
    <header class="main-header header-style-two">
    	<?php if((sanat_set($options, 'address_2')) || (sanat_set($options, 'certified_company_1'))): ?>
            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container">
                    <div class="clearfix">
                        <!--Top Left-->
                        <div class="top-left pull-left">
                            <ul class="clearfix">
                                <li><?php echo wp_kses_post(sanat_set($options, 'address_2')); ?></li>
                                <li><?php echo wp_kses_post(sanat_set($options, 'certified_company_1')); ?></li>
                            </ul>
                        </div>
                        
                        <?php if(sanat_set($options, 'head_social_1')): ?>
                            <?php if(sanat_set( $options, 'social_media' ) && is_array( sanat_set( $options, 'social_media' ) )): ?>
                                <!--Top Right-->
                                <div class="top-right pull-right">
                                    <ul class="social-nav">
                                        <?php $social_icons = sanat_set( $options, 'social_media' );
                                            foreach( sanat_set( $social_icons, 'social_media' ) as $social_icon ):
                                            if( isset( $social_icon['tocopy' ] ) ) continue; ?>
                                            <li><a href="<?php echo esc_url(sanat_set( $social_icon, 'social_link')); ?>"><span class="fa <?php echo esc_attr(sanat_set( $social_icon, 'social_icon')); ?>"></span></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        <?php endif;?>
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <?php if(sanat_set($options, 'logo_image')):?>
                            <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(sanat_set($options, 'logo_image'));?>" alt="<?php esc_attr_e('Global Industry', 'sanat');?>" title="<?php esc_attr_e('Global Industry', 'sanat');?>"></a></div>
                        <?php else:?>
                            <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png');?>" alt="<?php esc_attr_e('Global Industry', 'sanat');?>"></a></div>
                        <?php endif;?>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                    
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
										'container_class'=>'navbar-collapse collapse navbar-right',
										'menu_class'=>'nav navbar-nav',
										'fallback_cb'=>false, 
										'items_wrap' => '%3$s', 
										'container'=>false,
                                        'depth' => 3,
										'walker'=> new Bootstrap_walker()  
									) ); ?>
                                 </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                        <?php if(sanat_set($options, 'show_phone_no')): ?>
                        <!--Outer Box-->
                        <div class="outer-box">
                            <div class="contact-number">
                            	<span class="icon flaticon-technology-3"></span>
                                <?php echo wp_kses_post(sanat_set($options, 'phone_no')); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <!--Nav Outer End-->
                    
            	</div>    
            </div>
        </div>
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<?php if(sanat_set($options, 'responsive_logo_image')):?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="img-responsive"><img src="<?php echo esc_url(sanat_set($options, 'responsive_logo_image'));?>" alt="<?php esc_attr_e('Global Industry', 'sanat');?>" title="<?php esc_attr_e('Global Industry', 'sanat');?>"></a>
                    <?php else:?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="img-responsive"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo-small.png');?>" alt="<?php esc_attr_e('Global Industry', 'sanat');?>"></a>
                    <?php endif;?>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
									'container_class'=>'navbar-collapse collapse navbar-right',
									'menu_class'=>'nav navbar-nav',
									'fallback_cb'=>false, 
									'items_wrap' => '%3$s', 
									'container'=>false,
									'walker'=> new Bootstrap_walker()  
								) ); ?>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->