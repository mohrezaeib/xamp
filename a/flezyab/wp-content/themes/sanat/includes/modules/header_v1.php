<?php $options = _WSH()->option();
	sanat_bunch_global_variable();
?>
 	
    <!-- Main Header-->
    <header class="main-header">
    
    	<!--Header Top-->
    	<div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left pull-left">
                    	<ul class="clearfix">
                        	<?php if(sanat_set($options, 'welcome_text')): ?><li><?php echo wp_kses_post(sanat_set($options, 'welcome_text')); ?></li><?php endif; ?>
                            <?php if(sanat_set($options, 'phone_1')): ?><li><span class="icon flaticon-telephone-handle-silhouette"></span><?php echo wp_kses_post(sanat_set($options, 'phone_1')); ?></li><?php endif; ?>
                        </ul>
                    </div>
                    <!--Top Right-->
                    <div class="top-right pull-right">
                    	
						<?php if(sanat_set($options, 'head_social')): ?>
							<?php if(sanat_set( $options, 'social_media' ) && is_array( sanat_set( $options, 'social_media' ) )): ?>
                            	<ul class="social-nav">
                                    <?php $social_icons = sanat_set( $options, 'social_media' );
										foreach( sanat_set( $social_icons, 'social_media' ) as $social_icon ):
										if( isset( $social_icon['tocopy' ] ) ) continue; ?>
										<li><a href="<?php echo esc_url(sanat_set( $social_icon, 'social_link')); ?>"><span class="fa <?php echo esc_attr(sanat_set( $social_icon, 'social_icon')); ?>"></span></a></li>
									<?php endforeach; ?>
                                </ul>
                            <?php endif;?>
                    	<?php endif;?>
                        
                        <?php if(sanat_set($options, 'search_form')): ?>
                            <!-- Search -->
                            <div class="search-box">
                                <?php get_template_part('searchform2')?>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<?php if(sanat_set($options, 'logo_image')):?>
                            <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(sanat_set($options, 'logo_image'));?>" alt="<?php esc_attr_e('Global Industry', 'sanat');?>" title="<?php esc_attr_e('Global Industry', 'sanat');?>"></a></div>
                        <?php else:?>
                            <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri().'/images/logo.png');?>" alt="<?php esc_attr_e('Global Industry', 'sanat');?>"></a></div>
                        <?php endif;?>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                    	<?php if(sanat_set($options, 'certified_company')): ?>
                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-stamp"></span></div>
                                <ul>
                                    <li><?php echo wp_kses_post(sanat_set($options, 'certified_company')); ?></li>
                                </ul>
                            </div>
                        <?php endif; ?>
                        	
                        <?php if(sanat_set($options, 'great_industry')): ?>
                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-trophy-silhouette"></span></div>
                                <ul>
                                    <?php echo wp_kses_post(sanat_set($options, 'great_industry')); ?>
                                </ul>
                            </div>
                        <?php endif; ?>	
                        
						<?php if(sanat_set($options, 'address')): ?>    
                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-earth-globe"></span></div>
                                <ul>
                                    <li><?php echo wp_kses_post(sanat_set($options, 'address')); ?></li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Header Lower-->
        <div class="header-lower">
            
        	<div class="auto-container">
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
                    
                    <?php if(sanat_set($options, 'button')): ?>
                        <!-- Main Menu End-->
                        <div class="outer-box clearfix">
                            <div class="advisor-box">
                                <a href="<?php echo esc_url(sanat_set($options, 'btn_link')); ?>" class="theme-btn advisor-btn"><span><?php echo wp_kses_post(sanat_set($options, 'btn_title')); ?></span></a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!--End Header Lower-->
        
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