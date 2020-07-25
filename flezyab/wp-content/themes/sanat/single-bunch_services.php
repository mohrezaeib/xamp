<?php $options = _WSH()->option();
	get_header(); 
	$settings  = sanat_set(sanat_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true) , 'bunch_page_options') , 0);
	$meta = _WSH()->get_meta('_bunch_layout_settings');
	$meta1 = _WSH()->get_meta('_bunch_header_settings');
	$meta2 = _WSH()->get_meta();
	_WSH()->page_settings = $meta;
	if(sanat_set($_GET, 'layout_style')) $layout = sanat_set($_GET, 'layout_style'); else
	$layout = sanat_set( $meta, 'layout', 'right' );
	if( !$layout || $layout == 'full' || sanat_set($_GET, 'layout_style')=='full' ) $sidebar = ''; else
	$sidebar = sanat_set( $meta, 'sidebar', 'blog-sidebar' );
	$classes = ( !$layout || $layout == 'full' || sanat_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-lg-8 col-md-8 col-sm-12 col-xs-12 ' ;
	_WSH()->post_views( true );
	$bg = sanat_set($meta1, 'header_img');
	$title = sanat_set($meta1, 'header_title');
	$text = sanat_set($meta1, 'header_text');
?>

<!--Page Title-->
<section class="page-title" <?php if($bg):?>style="background-image:url(<?php echo esc_url($bg)?>);"<?php endif;?>>
    <div class="auto-container">
        <h1><?php if($title) echo wp_kses_post($title); else wp_title('');?></h1>
        <?php echo wp_kses_post(sanat_get_the_breadcrumb()); ?>
    </div>
</section>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- sidebar area -->
			<?php if( $layout == 'left' ): ?>
				<?php if ( is_active_sidebar( $sidebar ) ) { ?>
					<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                		<aside class="sidebar">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </aside>
                    </div>
				<?php } ?>
			<?php endif; ?>
            
            <!--Content Side-->	
            <div class="content-side <?php echo esc_attr($classes);?>">
                
				<?php while( have_posts() ): the_post();
					global $post; 
					$service_meta = _WSH()->get_meta();
				?>
                
                    <div class="services-single">
                        <div class="inner-box">
                            
							<?php if(has_post_thumbnail()): ?>
                                <div class="image">
                                    <?php the_post_thumbnail('sanat_1170x400'); ?>
                                    <div class="icon-box">
                                        <span class="icon flaticon-settings-gears"></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <div class="lower-content">
                                <h2><?php the_title(); ?></h2>
                                <div class="text">
                                    <?php the_content();?>
                                </div>
                            </div>
                            
                            <?php if($accordion = sanat_set($service_meta, 'bunch_services_accordion')):?>
                                <!--Accordian Box-->
                                <ul class="accordion-box style-two">
                                    <?php foreach($accordion as $key => $value):?>
                                    <!--Block-->
                                    <li class="accordion block <?php if($key == 1) echo 'active-block'; ?>">
                                        <div class="acc-btn <?php if($key == 1) echo 'active'; ?>"><div class="icon-outer"><span class="icon icon-plus fa fa-plus-circle"></span> <span class="icon icon-minus fa fa-minus-circle"></span></div><?php echo wp_kses_post(sanat_set($value, 'acc_title')); ?></div>
                                        <div class="acc-content <?php if($key == 1) echo 'current'; ?>">
                                            <div class="content">
                                                <div class="text"><?php echo wp_kses_post(sanat_set($value, 'acc_text')); ?></div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach;?>
                                </ul>
                                <!--End Accordian Box-->
                            <?php endif;?>
                            
                            <?php if($tabs = sanat_set($service_meta, 'bunch_services_tabs')):?>
                                <!--Services Info Tabs-->
                                <div class="services-info-tabs">
                                    <!--Services Tabs-->
                                    <div class="services-tabs tabs-box">
                                    
                                        <!--Tab Btns-->
                                        <ul class="tab-btns tab-buttons clearfix">
                                            <?php foreach($tabs as $keys => $value):?>
                                            	<li data-tab="#prod-details<?php echo esc_attr($keys); ?>" class="tab-btn <?php if($keys == 1) echo 'active-btn'; ?>"><?php echo wp_kses_post(sanat_set($value, 'btn_title')); ?></li>
                                            <?php endforeach;?>
                                        </ul>
                                        
                                        <!--Tabs Container-->
                                        <div class="tabs-content">
                                            <?php foreach($tabs as $keys => $value):?>
                                                <!--Tab / Active Tab-->
                                                <div class="tab <?php if($keys == 1) echo 'active-tab'; ?>" id="prod-details<?php echo esc_attr($keys); ?>">
                                                    <div class="content">
                                                        <?php echo wp_kses_post(sanat_set($value, 'description')); ?>
                                                    </div>
                                                </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--End Product Info Tabs-->
                            <?php endif;?> 
                        </div>
                    </div>
                    
            	<?php endwhile;?>
                
            </div>
            <!--Content Side-->
            
            <!-- sidebar area -->
			<?php if( $layout == 'right' ): ?>
				<?php if ( is_active_sidebar( $sidebar ) ) { ?>
					<div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                		<aside class="sidebar">
                            <?php dynamic_sidebar( $sidebar ); ?>
                        </aside>
                    </div>
				<?php } ?>
			<?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>