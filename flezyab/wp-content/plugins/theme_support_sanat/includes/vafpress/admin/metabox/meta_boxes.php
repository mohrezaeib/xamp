<?php
$options = array();
$options[] = array(
	'id'          => '_bunch_layout_settings',
	'types'       => array('post', 'page', 'product', 'bunch_services' ),
	'title'       => __('Layout Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
					
					array(
						'type' => 'radioimage',
						'name' => 'layout',
						'label' => __('Page Layout', BUNCH_NAME),
						'description' => __('Choose the layout for blog pages', BUNCH_NAME),
						'items' => array(
							array(
								'value' => 'left',
								'label' => __('Left Sidebar', BUNCH_NAME),
								'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cl.png',
							),
							array(
								'value' => 'right',
								'label' => __('Right Sidebar', BUNCH_NAME),
								'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cr.png',
							),
							array(
								'value' => 'full',
								'label' => __('Full Width', BUNCH_NAME),
								'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/1col.png',
							),
							
						),
					),
					
					array(
						'type' => 'select',
						'name' => 'sidebar',
						'label' => __('Sidebar', BUNCH_NAME),
						'default' => '',
						'items' => bunch_get_sidebars(true)	
					),
				),
);
$options[] = array(
	'id'          => '_bunch_header_settings',
	'types'       => array('page', 'post'),
	'title'       => __('Header Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
                    array(
        				'type' => 'select',
        				'name' => 'header_styles',
        				'label' => __('Header Styles', BUNCH_NAME),
        				'default' => 'one',
        				'items' => array(
        					array(
        						'value' => 'one',
        						'label' => __('style 1', BUNCH_NAME),
        					),
        					array(
        						'value' => 'two',
        						'label' => __('Style 2', BUNCH_NAME),
        					),
        					array(
        						'value' => 'three',
        						'label' => __('style 3', BUNCH_NAME),
        					),
        				),
        			),
					array(
						'type' => 'textbox',
						'name' => 'header_title',
						'label' => __('Header Title', BUNCH_NAME),
						'description' => __('Enter the Header title', BUNCH_NAME),
					),
					array(
						'type' => 'upload',
						'name' => 'header_img',
						'label' => __('Header image', BUNCH_NAME),
						'default' => '',
					),
					array(
						'type' => 'toggle',
						'name' => 'breadcrumb',
						'label' => __('Enable Breadcrumb', BUNCH_NAME),
						'description' => __('Enable / disable breadcrumb area in header for KC template', BUNCH_NAME),
					),
					
				),
);

$options[] = array(
	'id'          => '_bunch_header_settings',
	'types'       => array('bunch_projects'),
	'title'       => __('Header Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
	array(
		array(
			'type' => 'textbox',
			'name' => 'header_title',
			'label' => __('Header Title', BUNCH_NAME),
			'description' => __('Enter the Header title', BUNCH_NAME),
		),
		array(
			'type' => 'upload',
			'name' => 'header_img',
			'label' => __('Header image', BUNCH_NAME),
			'default' => '',
		),					
	),
);
/*$options[] =  array(
	'id'          => _WSH()->set_meta_key('post'),
	'types'       => array('post'),
	'title'       => __('Post Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(		
					array(
					'type' => 'select',
					'name' => 'arrow_view',
					'label' => __('Arrow Layout for "Top Blog Posts" shortcode', BUNCH_NAME),
					'default' => 'img_left',
					'items' => array(
									array(
										'value' => 'img_left',
										'label' => __('Image Left', BUNCH_NAME),
									),
									array(
										'value' => 'img_right',
										'label' => __('Image Right', BUNCH_NAME),
									),
									array(
										'value' => 'img_top',
										'label' => __('Image Top', BUNCH_NAME),
									),
								),
					),
					array(
						'type' => 'textarea',
						'name' => 'description',
						'label' => __('Post Description', BUNCH_NAME),
						'default' => '',
						'description' => __('Enter the post description for detail page.', BUNCH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'video',
						'label' => __('Video Embed Code', BUNCH_NAME),
						'default' => '',
						'description' => __('If post format is video then this embed code will be used in content', BUNCH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'audio',
						'label' => __('Audio Embed Code', BUNCH_NAME),
						'default' => '',
						'description' => __('If post format is AUDIO then this embed code will be used in content', BUNCH_NAME)
					),
					array(
						'type' => 'textarea',
						'name' => 'quote',
						'label' => __('Quote', BUNCH_NAME),
						'default' => '',
						'description' => __('If post format is quote then the content in this textarea will be displayed', BUNCH_NAME)
					),
							
					
			),
);*/
/* Page options */
/** Slides Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_slide'),
	'types'       => array('bunch_slide'),
	'title'       => __('Slides Options', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
	
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'bunch_slide_text',
					'title'     => __('Slide Content', BUNCH_NAME),
					'fields'    => array(
						
						array(
							'type' => 'textarea',
							'name' => 'slide_text',
							'label' => __('Slide Text', BUNCH_NAME),
							'default' => '',
							
						),
					),
				),
			),
		);

/** Services Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_services'),
	'types'       => array( 'bunch_services' ),
	'title'       => __('Services Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => 
			array(
				array(
					'type' => 'fontawesome',
					'name' => 'fontawesome',
					'label' => __('Service Icon', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'sub_title',
					'label' => __('Field area', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'bunch_services_accordion',
					'title'     => __('Our Accordion', BUNCH_NAME),
					'fields'    => array(
						
						array(
							'type' => 'textbox',
							'name' => 'acc_title',
							'label' => __('Title', BUNCH_NAME),
							'default' => '',
						),
						array(
							'type' => 'textarea',
							'name' => 'acc_text',
							'label' => __('Text', BUNCH_NAME),
							'default' => '',
						),
					),
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'bunch_services_tabs',
					'title'     => __('Our Services Tabs', BUNCH_NAME),
					'fields'    => array(
						
						array(
							'type' => 'textbox',
							'name' => 'btn_title',
							'label' => __('Button Title', BUNCH_NAME),
							'default' => '',
						),
						array(
							'type' => 'textarea',
							'name' => 'description',
							'label' => __('Description', BUNCH_NAME),
							'default' => '',
						),
					),
				),
		),
);

/** Projets Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_projects'),
	'types'       => array('bunch_projects'),
	'title'       => __('Projects Settings', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
				array(
					'type' => 'select',
					'name' => 'extra_width',
					'label' => __('Image Size adjustment for shortcode', BUNCH_NAME),
					'default' => 'normal_width',
					'items' =>  array(
								array(
									'value' => 'extra_width',
									'label' => __('Extra Width', BUNCH_NAME),
								),
								array(
									'value' => 'normal_width',
									'label' => __('Normal Width', BUNCH_NAME),
								),
							),
				),
				array(
				'type' => 'select',
				'name' => 'extra_height',
				'label' => __('Image Size adjustment for shortcode', BUNCH_NAME),
				'default' => 'normal_height',
				'items' =>  array(
							array(
								'value' => 'extra_height',
								'label' => __('Extra height', BUNCH_NAME),
							),
							array(
								'value' => 'normal_height',
								'label' => __('Normal Height', BUNCH_NAME),
							),
						),
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'bunch_projects_image',
					'title'     => __('Projects Images', BUNCH_NAME),
					'fields'    => array(
						array(
							'type' => 'upload',
							'name' => 'projects_image',
							'label' => __('Project Images', BUNCH_NAME),
							'default' => '',
						),
					),
				),
				array(
					'type' => 'textbox',
					'name' => 'client_name',
					'label' => __('Author Name', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'project_date',
					'label' => __('Project Date', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'website_link',
					'label' => __('Project Link', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'location',
					'label' => __('Project Location', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'project_price',
					'label' => __('Project Value', BUNCH_NAME),
					'default' => '',
				),
		),
);

/** Team Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_team'),
	'types'       => array('bunch_team'),
	'title'       => __('Team Options', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
				array(
					'type' => 'textbox',
					'name' => 'designation',
					'label' => __('Designation', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'bunch_team_social',
					'title'     => __('Social Profile', BUNCH_NAME),
					'fields'    => array(
						
						array(
							'type' => 'fontawesome',
							'name' => 'social_icon',
							'label' => __('Social Icon', BUNCH_NAME),
							'default' => '',
						),
						array(
							'type' => 'textbox',
							'name' => 'social_link',
							'label' => __('Link', BUNCH_NAME),
							'default' => '',
							
						),
					),
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'bunch_team_summary',
					'title'     => __('Summary Area', BUNCH_NAME),
					'fields'    => array(
						array(
							'type' => 'textbox',
							'name' => 'title',
							'label' => __('Title', BUNCH_NAME),
							'default' => '',
						),
						array(
							'type' => 'textbox',
							'name' => 'summ_content',
							'label' => __('Content', BUNCH_NAME),
							'default' => '',
						),
					),
				),
		),
);

/** Testimonial Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('bunch_testimonials'),
	'types'       => array('bunch_testimonials'),
	'title'       => __('Testimonials Options', BUNCH_NAME),
	'priority'    => 'high',
	'template'    => array(
				array(
					'type' => 'select',
					'name' => 'testimonial_rating',
					'label' => __('Client Rating', BUNCH_NAME),
					'description' => __('Choose the Client Rating', BUNCH_NAME),
					'items' => array( 
						array(
							'value'=>'1',
							'label'=>'1'
						), 
						array(
							'value'=>'2',
							'label'=>'2'
						), 
						array(
							'value'=>'3',
							'label'=>'3'
						), 
						array(
							'value'=>'4',
							'label'=>'4'
						), 
						array(
							'value'=>'5',
							'label'=>'5'
						), 
					),
				'default' => '5'
				),
				array(
					'type' => 'textbox',
					'name' => 'designation',
					'label' => __('Designation', BUNCH_NAME),
					'default' => '',
				),
				array(
					'type' => 'textbox',
					'name' => 'ext_url',
					'label' => __('Read More Link', BUNCH_NAME),
					'default' => '',
				),
		),
);
 
 return $options; 