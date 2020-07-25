<?php $options = _WSH()->option();
	sanat_bunch_global_variable();
?>
 	
   <!-- Main Header / Header Style Three-->
    <header class="main-header header-style-three">
    	
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <?php if(sanat_set($options, 'logo_image_2')):?>
                            <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(sanat_set($options, 'logo_image_2'));?>" alt="<?php esc_attr_e('Global Industry', 'sanat');?>" title="<?php esc_attr_e('Global Industry', 'sanat');?>"></a></div>
                        <?php else:?>
                            <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo-2.png');?>" alt="<?php esc_attr_e('Global Industry', 'sanat');?>"></a></div>
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
                        
                        <?php if(sanat_set($options, 'show_phone_no_2')): ?>
                            <!--Outer Box-->
                            <div class="outer-box">
                                <div class="contact-number">
                                    <span class="icon flaticon-technology-3"></span>
                                    <?php echo wp_kses_post(sanat_set($options, 'phone_no_1')); ?>
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