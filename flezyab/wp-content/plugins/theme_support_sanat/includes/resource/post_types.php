<?php
$theme_option = get_option(BUNCH_NAME.'_theme_options');  //printr($options);
$services_slug = bunch_set($theme_option , 'services_permalink' , 'services') ;
$projects_slug = bunch_set($theme_option , 'projects_permalink' , 'projects') ;
$team_slug = bunch_set($theme_option , 'team_permalink' , 'teams') ;
$testimonials_slug = bunch_set($theme_option , 'testimonials_permalink' , 'testimonials') ;
$faqs_slug = bunch_set($theme_option , 'faqs_permalink' , 'faqs') ;
$options = array();

$options['bunch_services'] = array(
								'labels' => array(__('Service', BUNCH_NAME), __('Service', BUNCH_NAME)),
								'slug' => $services_slug ,
								'label_args' => array('menu_name' => __('Services', BUNCH_NAME)),
								'supports' => array( 'title' , 'editor' , 'thumbnail' ),
								'label' => __('Service', BUNCH_NAME),
								'args'=>array(
										'menu_icon'=>'dashicons-products' , 
										'taxonomies'=>array('services_category')
								)
							);
							
$options['bunch_projects'] = array(
								'labels' => array(__('Project', BUNCH_NAME), __('Project', BUNCH_NAME)),
								'slug' => $projects_slug ,
								'label_args' => array('menu_name' => __('Projects', BUNCH_NAME)),
								'supports' => array( 'title' , 'editor' , 'thumbnail'),
								'label' => __('Project', BUNCH_NAME),
								'args'=>array(
											'menu_icon'=>'dashicons-format-gallery' , 
											'taxonomies'=>array('projects_category')
								)
							);							
							
$options['bunch_team'] = array(
								'labels' => array(__('Member', BUNCH_NAME), __('Member', BUNCH_NAME)),
								'slug' => $team_slug ,
								'label_args' => array('menu_name' => __('Teams', BUNCH_NAME)),
								'supports' => array( 'title', 'editor' , 'thumbnail'),
								'label' => __('Member', BUNCH_NAME),
								'args'=>array(
											'menu_icon'=>'dashicons-groups' , 
											'taxonomies'=>array('team_category')
								)
							);
							
$options['bunch_testimonials'] = array(
								'labels' => array(__('Testimonial', BUNCH_NAME), __('Testimonial', BUNCH_NAME)),
								'slug' => $testimonials_slug ,
								'label_args' => array('menu_name' => __('Testimonials', BUNCH_NAME)),
								'supports' => array( 'title' , 'editor' , 'thumbnail' ),
								'label' => __('Testimonial', BUNCH_NAME),
								'args'=>array(
										'menu_icon'=>'dashicons-testimonial' , 
										'taxonomies'=>array('testimonials_category')
								)
							);

$options['bunch_faqs'] = array(
								'labels' => array(__('Faq', BUNCH_NAME), __('Faq', BUNCH_NAME)),
								'slug' => $faqs_slug ,
								'label_args' => array('menu_name' => __('Faqs', BUNCH_NAME)),
								'supports' => array( 'title' , 'editor' , 'thumbnail' ),
								'label' => __('faq', BUNCH_NAME),
								'args'=>array(
										'menu_icon'=>'dashicons-testimonial' , 
										'taxonomies'=>array('faqs_category')
								)
							);
