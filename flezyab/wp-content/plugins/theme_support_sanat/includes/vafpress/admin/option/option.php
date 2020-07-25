<?php
return array(
    'title' => __( 'Sanat Theme Options', BUNCH_NAME ),
    'logo' => get_template_directory_uri() . '/images/logo.png',
    'menus' => array(
         // General Settings
         array(
            'title' => __( 'General Settings', BUNCH_NAME ),
            'name' => 'general_settings',
            'icon' => 'font-awesome:fa fa-cogs',
            'menus' => array(
                // general sub settings
				array(
                    'title' => __( 'general Settings', BUNCH_NAME ),
                    'name' => 'general_sub_settings',
                    'icon' => 'font-awesome:fa fa-dashboard',
                    'controls' => array(
                        array(
                            'type' => 'toggle',
                            'name' => 'preloader',
                            'label' => __( 'Preloader', BUNCH_NAME ),
							'default' => 0,
							'description' => __('show or hide Preloader', BUNCH_NAME)
						),
					) 
                ),
				// api key settings
				array(
                    'title' => __( 'API Keys Settings', BUNCH_NAME ),
                    'name' => 'api_key_settings',
                    'icon' => 'font-awesome:fa fa-key',
                    'controls' => array(
                        array(
							'type' => 'textbox',
							'name' => 'map_api_key',
							'label' => __( 'Map Api Key', BUNCH_NAME ),
							'default' => '',
							'description' => __('Enter the map Api key', BUNCH_NAME)
						),
					) 
                ),
			) 
         ),
		 // Skin settings
 		 array(
			'title' => __( 'Skin Settings', BUNCH_NAME ),
			'name' => 'skin_settings',
			'icon' => 'font-awesome:fa-paint-brush',
			'controls' => array(
				// predefined color settings
				 array(
					'type' => 'select',
					'name' => 'color_scheme_style',
					'label' => __( 'Choose Color Scheme Style', BUNCH_NAME ),
					'items' => array(
						array(
							'value' => 'predefined_color',
							'label' => __( 'Predefined Color Scheme', BUNCH_NAME ),
						),
						array(
							'value' => 'custom_color',
							'label' => __( 'Custom Color Scheme', BUNCH_NAME ),
						),
					),
					'default' => 'predefined_color'
				),
				array(
					'type' => 'section',
					'repeating' => true,
					'sortable' => true,
					'title' => __( 'Predefined Color Schemes', BUNCH_NAME ),
					'name' => 'predefined_colors_schemes',
					'description' => __( 'This section is used for theme color settings', BUNCH_NAME ),
					'dependency' => array(
						'field' => 'color_scheme_style',
						'function' => 'vp_dep_style10',
					),
					'fields' => array(
						array(
							'type' => 'radioimage',
							'name' => 'predefined_color_scheme',
							'label' => __( 'Predefined Colors', BUNCH_NAME ),
							'description' => __( 'Choose the Predefined color scheme', BUNCH_NAME ),
							'items' => array(
								array(
									'value' => '#fb4848',
									'label' => __( 'Pink', BUNCH_NAME ),
									'img' => get_template_directory_uri().'/images/vafpress/colors/pink.png' 
								),
								array(
									'value' => '#76c381',
									'label' => __( 'Green', BUNCH_NAME ),
									'img' => get_template_directory_uri().'/images/vafpress/colors/green.png' 
								),
								array(
									'value' => '#d37b46',
									'label' => __( 'Chocolate', BUNCH_NAME ),
									'img' => get_template_directory_uri().'/images/vafpress/colors/chocolate.png' 
								),
								array(
									'value' => '#e281ef',
									'label' => __( 'Purple', BUNCH_NAME ),
									'img' => get_template_directory_uri().'/images/vafpress/colors/purple.png' 
								),
								array(
									'value' => '#f8ca00',
									'label' => __( 'Yellow', BUNCH_NAME ),
									'img' => get_template_directory_uri().'/images/vafpress/colors/yellow.png' 
								),
								array(
									'value' => '#008080',
									'label' => __( 'Seagreen', BUNCH_NAME ),
									'img' => get_template_directory_uri().'/images/vafpress/colors/seagreen.png' 
								),
							) 
						),
					)
				),
				// custom color settings
				array(
					'type' => 'section',
					'repeating' => true,
					'sortable' => true,
					'title' => __( 'Custom Color Scheme', BUNCH_NAME ),
					'name' => 'color_schemes',
					'description' => __( 'This section is used for theme color settings', BUNCH_NAME ),
					'dependency' => array(
						'field' => 'color_scheme_style',
						'function' => 'vp_dep_style11',
					),
					'fields' => array(
						array(
							'type' => 'color',
							'name' => 'main_color_scheme',
							'label' => __( 'Main Custom Color Scheme', BUNCH_NAME ),
							'description' => __( 'Choose the Custom color scheme for the theme.', BUNCH_NAME ),
							'default' => '#ffb200',
						),
					)
				),
			) 
		 ),
		 // Header Settings
         array(
            'title' => __( 'Header Settings', BUNCH_NAME ),
            'name' => 'header_settings',
            'icon' => 'font-awesome:fa fa-cube',
            'menus' => array(
				//logo settings
                array(
                    'title' => __( 'Logo Settings', BUNCH_NAME ),
                    'name' => 'logo_settings',
                    'icon' => 'font-awesome:fa fa-cube',
                    'controls' => array(
                        array(
                             'type' => 'upload',
                            'name' => 'site_favicon',
                            'label' => __( 'Favicon', BUNCH_NAME ),
                            'description' => __( 'Upload the favicon, should be 16x16', BUNCH_NAME ),
                            'default' => get_template_directory_uri().'/images/favicon.ico'
                        ),
						array(
                            'type' => 'section',
                            'repeating' => true,
                            'sortable' => true,
                            'title' => __( 'Logo Sub Settings', BUNCH_NAME ),
                            'name' => 'logo_sub_settings',
                            'description' => __( 'This section is used for logo sub settings', BUNCH_NAME ),
                            'fields' => array(
                                array(
									'type' => 'upload',
									'name' => 'logo_image',
									'label' => __('Logo Image', BUNCH_NAME),
									'description' => __('Insert the logo image', BUNCH_NAME),
									'default' => get_template_directory_uri().'/images/logo.png'
								),
								array(
									'type' => 'upload',
									'name' => 'logo_image_2',
									'label' => __('Logo Image Two', BUNCH_NAME),
									'description' => __('Insert the logo image Two', BUNCH_NAME),
									'default' => get_template_directory_uri().'/images/logo-2.png'
								),
								array(
									'type' => 'upload',
									'name' => 'responsive_logo_image',
									'label' => __('Logo Responsive Image', BUNCH_NAME),
									'description' => __('Insert the Logo Responsive Image', BUNCH_NAME),
									'default' => get_template_directory_uri().'/images/logo-small.png'
								),
							)
						),
					) 
                ),
				//header sub settings
				array(
                    'title' => __( 'Header Settings', BUNCH_NAME ),
                    'name' => 'header_sub_settings',
                    'icon' => 'font-awesome:fa fa-cube',
                    'controls' => array(
                         array(
							'type' => 'radioimage',
							'name' => 'header_style',
							'label' => __( 'Choose Header Style', BUNCH_NAME ),
							'item_max_height' => '200',
							'item_max_width' => '700',
							'items' => array(
								 array(
									'value' => 'header_v1',
									'label' => __( 'Header Style One', BUNCH_NAME ),
									'img' => get_template_directory_uri() . '/images/vafpress/header/header1.png' 
								),
								array(
									'value' => 'header_v2',
									'label' => __( 'Header Style Two', BUNCH_NAME ),
									'img' => get_template_directory_uri() . '/images/vafpress/header/header2.png' 
								),
								array(
									'value' => 'header_v3',
									'label' => __( 'Header Style Three', BUNCH_NAME ),
									'img' => get_template_directory_uri() . '/images/vafpress/header/header3.png' 
								),
							),
							'default' => 'header_v2'
						),
						array(
							'type' => 'section',
							'title' => __('Header Style One Settings', BUNCH_NAME),
							'name' => 'header_v1_settings',
							'dependency' => array(
								'field' => 'header_style',
								'function' => 'vp_dep_style1',
							),
							'fields' => array(
								array(
									'type' => 'textbox',
									'name' => 'welcome_text',
									'label' => __( 'Welcome Text', BUNCH_NAME ),
									'description' => __( 'Enter the Welcome Text', BUNCH_NAME ),
									'default' => 'Turning big ideas into great products' 
								),
								array(
									'type' => 'textbox',
									'name' => 'phone_1',
									'label' => __( 'Phone Number', BUNCH_NAME ),
									'description' => __( 'Enter the phone Number', BUNCH_NAME ),
									'default' => '+44-567-890123' 
								),
								array(
									'type' => 'toggle',
									'name' => 'head_social',
									'label' => __( 'Show / Hide Social Icons', BUNCH_NAME ),
									'default' => 0,
									'description' => __('show or hide Social Icons.', BUNCH_NAME)
								),
								array(
									'type' => 'toggle',
									'name' => 'search_form',
									'label' => __( 'Show / Hide Search Form', BUNCH_NAME ),
									'default' => 0,
									'description' => __('show or hide Search Form.', BUNCH_NAME)
								),
								array(
									'type' => 'textarea',
									'name' => 'certified_company',
									'label' => __('Certified Company', BUNCH_NAME),
									'description' => __('Enter the Certified Company.', BUNCH_NAME),
									'default' => '<strong>Certified Company</strong>ISO 9001: 2010'
								),
								array(
									'type' => 'textarea',
									'name' => 'great_industry',
									'label' => __('Great Industry', BUNCH_NAME),
									'description' => __('Enter the Great Industry.', BUNCH_NAME),
									'default' => '<strong>Great Industrial</strong>Solution Provider'
								),
								array(
									'type' => 'textarea',
									'name' => 'address',
									'label' => __('Address', BUNCH_NAME),
									'description' => __('Enter the Address.', BUNCH_NAME),
									'default' => '<strong>Address</strong>Mountain Drive, Varick Str, UK'
								),
								array(
									'type' => 'toggle',
									'name' => 'button',
									'label' => __( 'Show / Hide Quote Button', BUNCH_NAME ),
									'default' => 0,
									'description' => __('show or hide Quote Button.', BUNCH_NAME)
								),
								array(
									'type' => 'textbox',
									'name' => 'btn_title',
									'label' => __('Button Title', BUNCH_NAME),
									'description' => __('Enter the Button Title.', BUNCH_NAME),
									'default' => 'Get a Quote'
								),
								array(
									'type' => 'textbox',
									'name' => 'btn_link',
									'label' => __('Button Link', BUNCH_NAME),
									'description' => __('Enter the Button Link.', BUNCH_NAME),
									'default' => '#'
								),
							),
						),
						array(
							'type' => 'section',
							'title' => __('Header Style Two Settings', BUNCH_NAME),
							'name' => 'header_v2_settings',
							'dependency' => array(
								'field' => 'header_style',
								'function' => 'vp_dep_style2',
							),
							'fields' => array(
								array(
									'type' => 'textarea',
									'name' => 'address_2',
									'label' => __('Address', BUNCH_NAME),
									'description' => __('Enter the Address.', BUNCH_NAME),
									'default' => '<strong>Address:</strong> Mountain Drive, Varick Str, UK'
								),
								array(
									'type' => 'textarea',
									'name' => 'certified_company_1',
									'label' => __('Certified Company', BUNCH_NAME),
									'description' => __('Enter the Certified Company.', BUNCH_NAME),
									'default' => '<strong>Certified:</strong> ISO 9001: 2010'
								),
								array(
									'type' => 'toggle',
									'name' => 'head_social_1',
									'label' => __( 'Show / Hide Social Icons', BUNCH_NAME ),
									'default' => 0,
									'description' => __('show or hide Social Icons.', BUNCH_NAME)
								),
								array(
									'type' => 'toggle',
									'name' => 'show_phone_no',
									'label' => __( 'Show / Hide Phone Number', BUNCH_NAME ),
									'default' => 0,
									'description' => __('show or hide Phone Number.', BUNCH_NAME)
								),
								array(
									'type' => 'textarea',
									'name' => 'phone_no',
									'label' => __( 'Phone Number', BUNCH_NAME ),
									'description' => __( 'Enter the phone Number', BUNCH_NAME ),
									'default' => 'Call Us Now<strong>+44-567-8901-23</strong>' 
								),
							),
						),
						array(
							'type' => 'section',
							'title' => __('Header Style Three Settings', BUNCH_NAME),
							'name' => 'header_v3_settings',
							'dependency' => array(
								'field' => 'header_style',
								'function' => 'vp_dep_style3',
							),
							'fields' => array(
								array(
									'type' => 'toggle',
									'name' => 'show_phone_no_2',
									'label' => __( 'Show / Hide Phone Number', BUNCH_NAME ),
									'default' => 0,
									'description' => __('show or hide Phone Number.', BUNCH_NAME)
								),
								array(
									'type' => 'textarea',
									'name' => 'phone_no_1',
									'label' => __( 'Phone Number', BUNCH_NAME ),
									'description' => __( 'Enter the phone Number', BUNCH_NAME ),
									'default' => 'Call Us Now<strong>+44-567-8901-23</strong>' 
								),
							),
						),
					) 
                ),
			) 
        ),
		 // Footer Settings
		 array(
			'title' => __( 'Footer Settings', BUNCH_NAME ),
			'name' => 'sub_footer_settings',
			'icon' => 'font-awesome:fa fa-edit',
			'controls' => array(
				array(
					'type' => 'toggle',
					'name' => 'hide_upper_footer',
					'label' => __( 'Hide Upper Footer', BUNCH_NAME ),
					'default' => 0,
					'description' => __('show or hide Upper footer', BUNCH_NAME)
				),
				array(
					'type' => 'toggle',
					'name' => 'hide_bottom_footer',
					'label' => __( 'Hide Bottom Footer', BUNCH_NAME ),
					'default' => 0,
					'description' => __('show or hide Bottom footer', BUNCH_NAME)
				),
				//footer other settings
				array(
					'type' => 'section',
					'repeating' => true,
					'sortable' => true,
					'title' => __( 'Footer Other Settings', BUNCH_NAME ),
					'name' => 'footer_other_settings',
					'description' => __( 'This section is used for the footer settings', BUNCH_NAME ),
					'fields' => array(
						
						array(
							'type' => 'textarea',
							'name' => 'copyright',
							'label' => __( 'Copyright', BUNCH_NAME ),
							'description' => __( 'Enter the Copyright', BUNCH_NAME ),
							'default' => '&copy; Copyright 2018. All Rights Reserved. Designed by Expert_Themes'
						),
					)
				),
			) 
		), 
         // Clients Settings
         array(
            'title' => __( 'Clients', BUNCH_NAME ),
            'name' => 'clients',
            'icon' => 'font-awesome:fa fa-share-square',
            'controls' => array(
                 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Clients', BUNCH_NAME ),
                    'name' => 'clients',
                    'description' => __( 'This section is used to add Clients.', BUNCH_NAME ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter the title of the client.', BUNCH_NAME ), 
                        ),
						 array(
                             'type' => 'textbox',
                            'name' => 'client_link',
                            'label' => __( 'Link', BUNCH_NAME ),
                            'description' => __( 'Enter the Link for client.', BUNCH_NAME ),
                            'default' => '#'
                        ),
                        array(
                            'type' => 'upload',
                            'name' => 'client_img',
                            'label' => __( 'Logo', BUNCH_NAME ),
                            'description' => __( 'choose the brand logo.', BUNCH_NAME ),
                            'default' => '',
							
                         ),  
                    ) 
                ) 
            ) 
        ),
		 // Pages , Blog Pages Settings
         array(
            'title' => __( 'Page Settings', BUNCH_NAME ),
            'name' => 'page_settings',
            'icon' => 'font-awesome:fa fa-file',
            'menus' => array(
                // Search Page Settings 
                array(
                    'title' => __( 'Search Page', BUNCH_NAME ),
                    'name' => 'search_page_settings',
                    'icon' => 'font-awesome:fa fa-search',
                    'controls' => array(
                        array(
                            'type' => 'textbox',
                            'name' => 'search_page_header_title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter Search Page Title.', BUNCH_NAME ),
                            'default' => '',
						),
						array(
                            'type' => 'upload',
                            'name' => 'search_page_header_img',
                            'label' => __( 'Header image', BUNCH_NAME ),
                            'description' => __( 'Enter Search Page Header Image.', BUNCH_NAME ),
                            'default' => '',
							
                        ),
						array(
                             'type' => 'select',
                            'name' => 'search_page_sidebar',
                            'label' => __( 'Sidebar', BUNCH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'bunch_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'search_page_layout',
                            'label' => __( 'Page Layout', BUNCH_NAME ),
                            'description' => __( 'Choose The Layout for Search Page.', BUNCH_NAME ),
                            
                            'items' => array(
                                 array(
                                    'value' => 'left',
                                    'label' => __( 'Left Sidebar', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cl.png' 
                                ),
                                
                                array(
                                    'value' => 'right',
                                    'label' => __( 'Right Sidebar', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cr.png' 
                                ),
                                array(
                                    'value' => 'full',
                                    'label' => __( 'Full Width', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/1col.png' 
                                ),
                                
                            ) 
                        ),
                    ) 
                ),
                // Archive Page Settings 
                array(
                    'title' => __( 'Archive Page', BUNCH_NAME ),
                    'name' => 'archive_page_settings',
                    'icon' => 'font-awesome:fa fa-archive',
                    'controls' => array(
                        array(
                            'type' => 'textbox',
                            'name' => 'archive_page_header_title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter Archive Page Title.', BUNCH_NAME ),
                            'default' => '',
						),
						array(
                            'type' => 'upload',
                            'name' => 'archive_page_header_img',
                            'label' => __( 'Header Image', BUNCH_NAME ),
                            'description' => __( 'Enter Archive Page Header Image', BUNCH_NAME ),
                            'default' => '',
						),
					    array(
                             'type' => 'select',
                            'name' => 'archive_page_sidebar',
                            'label' => __( 'Sidebar', BUNCH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'bunch_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'archive_page_layout',
                            'label' => __( 'Page Layout', BUNCH_NAME ),
                            'description' => __( 'Choose The Layout for Archive Page.', BUNCH_NAME ),
                            
                            'items' => array(
                                 array(
                                    'value' => 'left',
                                    'label' => __( 'Left Sidebar', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cl.png' 
                                ),
                                array(
                                    'value' => 'right',
                                    'label' => __( 'Right Sidebar', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cr.png' 
                                ),
                                array(
                                    'value' => 'full',
                                    'label' => __( 'Full Width', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/1col.png' 
                                ), 
                                
                            ) 
                        ) 
                        
                        
                    ) 
                ),
                // Author Page Settings 
                array(
                     'title' => __( 'Author Page', BUNCH_NAME ),
                    'name' => 'author_page_settings',
                    'icon' => 'font-awesome:fa fa-user',
                    'controls' => array(
                        array(
                            'type' => 'textbox',
                            'name' => 'author_page_header_title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter Author Page Title.', BUNCH_NAME ),
                            'default' => '',
						),
						array(
                            'type' => 'upload',
                            'name' => 'author_page_header_img',
                            'label' => __( 'Header Image', BUNCH_NAME ),
                            'description' => __( 'Enter Author Page Header Image', BUNCH_NAME ),
                            'default' => '',
						),
						array(
                             'type' => 'select',
                            'name' => 'author_page_sidebar',
                            'label' => __( 'Sidebar', BUNCH_NAME ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'bunch_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'author_page_layout',
                            'label' => __( 'Page Layout', BUNCH_NAME ),
                            'description' => __( 'Choose The Layout for Author Page.', BUNCH_NAME ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cl.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cr.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', BUNCH_NAME ),
                                    'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/1col.png' 
                                ),
                            ) 
                        ) 
                    ) 
                ),
                // 404 Page Settings 
                array(
                    'title' => __( '404 Page Settings', BUNCH_NAME ),
                    'name' => '404_page_settings',
                    'icon' => 'font-awesome:fa fa-exclamation-triangle',
                    'controls' => array(
                         array(
                            'type' => 'upload',
                            'name' => '404_page_bg',
                            'label' => __( 'Background Image', BUNCH_NAME ),
                            'description' => __( 'Upload Image for 404 Page Background', BUNCH_NAME ),
                            'default' => get_template_directory_uri().'/images/background/9.jpg' 
                         ),
						 array(
                             'type' => 'textbox',
                            'name' => '404_page_title',
                            'label' => __( 'Page Title', BUNCH_NAME ),
                            'description' => __( 'Enter 404 Error Page Title.', BUNCH_NAME ),
                            'default' => 'Error 404' 
                        ),
                        array(
                             'type' => 'textarea',
                            'name' => '404_page_heading',
                            'label' => __( 'Page Heading', BUNCH_NAME ),
                            'description' => __( 'Enter the Heading you want to show on 404 page', BUNCH_NAME ),
                            'default' => '4<span class="theme_color">0</span>4' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => '404_page_tag_line',
                            'label' => __( 'Page Tagline', BUNCH_NAME ),
                            'description' => __( 'Enter the Tagline you want to show on 404 page', BUNCH_NAME ),
                            'default' => 'Oops! That page can’t be found' 
                        ),
                        array(
                             'type' => 'textarea',
                            'name' => '404_page_text',
                            'label' => __( '404 Page Text', BUNCH_NAME ),
                            'description' => __( 'Enter the Text you want to show on 404 page', BUNCH_NAME ),
                            'default' => 'Sorry, but the page you are looking for does not existing' 
                        ),
                    ) 
                ),
				// Comming Soon Page Settings 
                array(
                    'title' => __( 'Comming Soon Page Settings', BUNCH_NAME ),
                    'name' => 'comming_soon_page_settings',
                    'icon' => 'font-awesome:fa fa-exclamation-triangle',
                    'controls' => array(
                        array(
                            'type' => 'upload',
                            'name' => 'cs_section_img',
                            'label' => __( 'Page Background Image', BUNCH_NAME ),
                            'description' => __( 'Upload Image for Comming Soon Page Background', BUNCH_NAME ),
                            'default' => get_template_directory_uri() . '/images/background/12.jpg' 
                        ),
						array(
                            'type' => 'upload',
                            'name' => 'cs_logo_img',
                            'label' => __( 'Logo Image', BUNCH_NAME ),
                            'description' => __( 'Upload Image for Comming Soon Logo Image', BUNCH_NAME ),
                            'default' => get_template_directory_uri() . '/images/logo-2.png' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => 'cs_section_title',
                            'label' => __( 'Page Heading', BUNCH_NAME ),
                            'description' => __( 'Enter the Heading you want to show on Comming Soon page', BUNCH_NAME ),
                            'default' => 'Comming Soon' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => 'cs_section_count',
                            'label' => __( 'Page Counter ', BUNCH_NAME ),
                            'description' => __( 'Enter the Counter you want to show on Comming Soon page', BUNCH_NAME ),
                            'default' => '2019/8/17' 
                        ),
                        array(
                             'type' => 'textarea',
                            'name' => 'cs_section_text',
                            'label' => __( 'Comming Soon Page Description', BUNCH_NAME ),
                            'description' => __( 'Enter the Text you want to show on Comming Soon page', BUNCH_NAME ),
                            'default' => 'Our Website is under construction. stay tuned for something amazing!. <br> Subscribe to be notified,' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => 'cs_id',
                            'label' => __( 'Feedburner id ', BUNCH_NAME ),
                            'description' => __( 'Enter the Feedburner id', BUNCH_NAME ),
                            'default' => 'themeforest' 
                        ),
                    ) 
                ),
            ) 
        ),
		 // Woocommerce Page Settings 
		 array(
			'title' => __( 'Woocommerce', BUNCH_NAME ),
			'name' => 'woocommerce_page_settings',
			'icon' => 'font-awesome:fa fa-shopping-cart',
			'controls' => array(
				array(
					'type' => 'textbox',
					'name' => 'woocommerce_page_header_title',
					'label' => __( 'Title', BUNCH_NAME ),
					'description' => __( 'Enter Woocommerce general Page Title .', BUNCH_NAME ),
					'default' => '',
				),
				array(
					'type' => 'upload',
					'name' => 'woocommerce_page_header_img',
					'label' => __( 'Header image', BUNCH_NAME ),
					'description' => __( 'Enter woocommerce general Page Header image .', BUNCH_NAME ),
					'default' => '',
				),
				// product cat settings
				array(
					'type' => 'section',
					'repeating' => true,
					'sortable' => true,
					'title' => __( 'Product Category Page', BUNCH_NAME ),
					'name' => 'product_category_page',
					'description' => __( 'This section is used for Product Category Page settings', BUNCH_NAME ),
					'fields' => array(
						array(
							'type' => 'select',
							'name' => 'woocommerce_cat_page_sidebar',
							'label' => __( 'Sidebar', BUNCH_NAME ),
							'items' => array(
								 'data' => array(
									 array(
										 'source' => 'function',
										'value' => 'bunch_get_sidebars_2' 
									) 
								) 
							),
							'default' => array(
								 '{{first}}' 
							) 
						),
						array(
							 'type' => 'radioimage',
							'name' => 'woo_cat_page_layout',
							'label' => __( 'Woocommerce Category Layout', BUNCH_NAME ),
							'description' => __( 'Choose the layout for Category pages', BUNCH_NAME ),
							
							'items' => array(
								 array(
									 'value' => 'left',
									'label' => __( 'Left Sidebar', BUNCH_NAME ),
									'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cl.png', 
								),
								
								array(
									 'value' => 'right',
									'label' => __( 'Right Sidebar', BUNCH_NAME ),
									'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cr.png', 
								),
								array(
									 'value' => 'full',
									'label' => __( 'Full Width', BUNCH_NAME ),
									'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/1col.png', 
								),
								
							) 
						),
					)
				),
				//product single settings
				array(
					'type' => 'section',
					'repeating' => true,
					'sortable' => true,
					'title' => __( 'Product Single Page', BUNCH_NAME ),
					'name' => 'product_single_page',
					'description' => __( 'This section is used for Product Single Page general settings', BUNCH_NAME ),
					'fields' => array(
						array(
							'type' => 'select',
							'name' => 'woocommerce_single_page_sidebar',
							'label' => __( 'Sidebar', BUNCH_NAME ),
							'items' => array(
								 'data' => array(
									 array(
										 'source' => 'function',
										'value' => 'bunch_get_sidebars_2' 
									) 
								) 
							),
							'default' => array(
								 '{{first}}' 
							) 
						),
						array(
							'type' => 'radioimage',
							'name' => 'woocommerce_single_page_layout',
							'label' => __( 'Woocommerce Single Product Layout', BUNCH_NAME ),
							'description' => __( 'Choose the layout for Single pages', BUNCH_NAME ),
							
							'items' => array(
								 array(
									 'value' => 'left',
									'label' => __( 'Left Sidebar', BUNCH_NAME ),
									'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cl.png', 
								),
								
								array(
									 'value' => 'right',
									'label' => __( 'Right Sidebar', BUNCH_NAME ),
									'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/2cr.png', 
								),
								array(
									 'value' => 'full',
									'label' => __( 'Full Width', BUNCH_NAME ),
									'img' => BUNCH_TH_URL.'/includes/vafpress/public/img/1col.png', 
								),
								
							) 
						),
					)
				),
				//woocommerce other settings
				array(
					'type' => 'section',
					'repeating' => true,
					'sortable' => true,
					'title' => __( 'Woocommerce Other Settings', BUNCH_NAME ),
					'name' => 'woocommerce_other_settings',
					'description' => __( 'This section is used for Woocommerce Other general settings', BUNCH_NAME ),
					'fields' => array(
						array(
                            'type' => 'toggle',
                            'name' => 'product_ordering',
                            'label' => __( 'Product Ordering', BUNCH_NAME ),
							'default' => 0,
							'description' => __('show or hide Product Ordering on Shop Page.', BUNCH_NAME)
						),
						array(
							'type' => 'textbox',
							'name' => 'number_of_products_per_page',
							'label' => __( 'Number of Products Per Page', BUNCH_NAME ),
							'description' => __( 'Enter number .', BUNCH_NAME ),
							'default' => '',
						),
						array(
						   'type' => 'select',
						   'name' => 'number_of_product_column',
						   'label' => __( 'Product Columns', BUNCH_NAME ),
						   'items' => array(
									 array(
									 'value' => '2',
									 'label' => __( '2', BUNCH_NAME ),
									),
									array(
									 'value' => '3',
									 'label' => __( '3', BUNCH_NAME ),
									),
									array(
									 'value' => '4',
									 'label' => __( '4', BUNCH_NAME ),
									),
							   ),
							   'default' => '3'
						),
						array(
						   'type' => 'select',
						   'name' => 'number_of_related_products',
						   'label' => __( 'Number Of Related Products', BUNCH_NAME ),
						   'items' => array(
									 array(
									 'value' => '2',
									 'label' => __( '2', BUNCH_NAME ),
									),
									array(
									 'value' => '3',
									 'label' => __( '3', BUNCH_NAME ),
									),
									array(
									 'value' => '4',
									 'label' => __( '4', BUNCH_NAME ),
									),
							   ),
							   'default' => '3'
						  ),
					)
				),
			) 
		),
		 // Social Sharing
         array(
            'title' => __( 'Social Sharing ', BUNCH_NAME ),
            'name' => 'social_sharing',
            'icon' => 'font-awesome:fa fa-share-alt',
            'controls' => array(
                 	array(
						'type' => 'toggle',
						'name' => 'show_sharing_icon',
						'label' => __( 'Show Or Hide Social Sharing Icon ', BUNCH_NAME ),
						'default' => 0,
						'description' => __('Show Or Hide Social Sharing Icon', BUNCH_NAME)
					),
					array(
						'type' => 'toggle',
						'name' => 'facebook_sharing',
						'label' => __( 'Facebook', BUNCH_NAME ),
						'default' => 0,
						'description' => __('show or hide Facebook on blog pages', BUNCH_NAME)
					),
					array(
						'type' => 'toggle',
						'name' => 'twitter_sharing',
						'label' => __( 'Twitter', BUNCH_NAME ),
						'default' => 0,
						'description' => __('show or hide Twitter on blog pages', BUNCH_NAME)
					),
					array(
						'type' => 'toggle',
						'name' => 'linkedin_sharing',
						'label' => __( 'LinkedIn', BUNCH_NAME ),
						'default' => 0,
						'description' => __('show or hide LinkedIn on blog pages', BUNCH_NAME)
					),
					array(
						'type' => 'toggle',
						'name' => 'pinterest_sharing',
						'label' => __( 'Pinterest', BUNCH_NAME ),
						'default' => 0,
						'description' => __('show or hide Pinterest on blog pages', BUNCH_NAME)
					),
					array(
						'type' => 'toggle',
						'name' => 'google_plus_sharing',
						'label' => __( 'Google Plus', BUNCH_NAME ),
						'default' => 0,
						'description' => __('show or hide Google Plus on blog pages', BUNCH_NAME)
					),
					array(
						'type' => 'toggle',
						'name' => 'tumblr_sharing',
						'label' => __( 'Tumblr', BUNCH_NAME ),
						'default' => 0,
						'description' => __('show or hide Tumblr on blog pages', BUNCH_NAME)
					),
					array(
						'type' => 'toggle',
						'name' => 'reddit_sharing',
						'label' => __( 'Reddit', BUNCH_NAME ),
						'default' => 0,
						'description' => __('show or hide Reddit on blog pages', BUNCH_NAME)
					),
					array(
						'type' => 'toggle',
						'name' => 'digg_sharing',
						'label' => __( 'Digg', BUNCH_NAME ),
						'default' => 0,
						'description' => __('show or hide Digg on blog pages', BUNCH_NAME)
					), 
             ) 
         ),
         // Sidebar Creator
         array(
            'title' => __( 'Sidebar Settings', BUNCH_NAME ),
            'name' => 'sidebar-settings',
            'icon' => 'font-awesome:fa fa-bars',
            'controls' => array(
                 array(
                    'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Dynamic Sidebar', BUNCH_NAME ),
                    'name' => 'dynamic_sidebar',
                    'description' => __( 'This section is used for theme color settings', BUNCH_NAME ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'sidebar_name',
                            'label' => __( 'Sidebar Name', BUNCH_NAME ),
                            'description' => __( 'Choose the default color scheme for the theme.', BUNCH_NAME ),
                            'default' => __( 'Dynamic Sidebar', BUNCH_NAME ) 
                        ) 
                    ) 
                ) 
            ) 
        ),
         // Social Media Creator
         array(
            'title' => __( 'Social Media ', BUNCH_NAME ),
            'name' => 'social_media',
            'icon' => 'font-awesome:fa fa-share-square',
            'controls' => array(
                 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Social Media', BUNCH_NAME ),
                    'name' => 'social_media',
                    'description' => __( 'This section is used to add Social Media.', BUNCH_NAME ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', BUNCH_NAME ),
                            'description' => __( 'Enter the title of the social media.', BUNCH_NAME ), 
                        ),
						 array(
                             'type' => 'textbox',
                            'name' => 'social_link',
                            'label' => __( 'Link', BUNCH_NAME ),
                            'description' => __( 'Enter the Link for Social Media.', BUNCH_NAME ),
                            'default' => '#'
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'social_icon',
                            'label' => __( 'Icon', BUNCH_NAME ),
                            'description' => __( 'Choose Icon for Social Media.', BUNCH_NAME ),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value' => 'vp_get_social_medias',
									),
								),
							),
                        )  
                    ) 
                ) 
            ) 
         ),
         // Font settings
         array(
            'title' => __( 'Font Settings', BUNCH_NAME ),
            'name' => 'font_settings',
            'icon' => 'font-awesome:fa fa-font',
            'menus' => array(
                /** heading font settings */
                 array(
                    'title' => __( 'Heading Font', BUNCH_NAME ),
                    'name' => 'heading_font_settings',
                    'icon' => 'font-awesome:fa fa-text-height',
                    'controls' => array(
                         array(
                             'type' => 'toggle',
                            'name' => 'use_custom_font',
                            'label' => __( 'Use Custom Font', BUNCH_NAME ),
                            'description' => __( 'Use custom font or not', BUNCH_NAME ),
                            'default' => 0 
                         ),
                         array(
                            'type' => 'section',
                            'title' => __( 'H1 Settings', BUNCH_NAME ),
                            'name' => 'h1_settings',
                            'description' => __( 'heading 1 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h1_font_family',
                                    'description' => __( 'Select the font family to use for h1', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                
                                array(
                                     'type' => 'color',
                                    'name' => 'h1_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h1', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                         ),
                         array(
                             'type' => 'section',
                            'title' => __( 'H2 Settings', BUNCH_NAME ),
                            'name' => 'h2_settings',
                            'description' => __( 'heading h2 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h2_font_family',
                                    'description' => __( 'Select the font family to use for h2', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h2_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h1', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                         ),
                         array(
                             'type' => 'section',
                            'title' => __( 'H3 Settings', BUNCH_NAME ),
                            'name' => 'h3_settings',
                            'description' => __( 'heading h3 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h3_font_family',
                                    'description' => __( 'Select the font family to use for h3', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h3_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h3', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                         ),
                         array(
                            'type' => 'section',
                            'title' => __( 'H4 Settings', BUNCH_NAME ),
                            'name' => 'h4_settings',
                            'description' => __( 'heading h4 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h4_font_family',
                                    'description' => __( 'Select the font family to use for h4', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h4_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h4', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'title' => __( 'H5 Settings', BUNCH_NAME ),
                            'name' => 'h5_settings',
                            'description' => __( 'heading h5 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h5_font_family',
                                    'description' => __( 'Select the font family to use for h5', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h5_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h5', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'title' => __( 'H6 Settings', BUNCH_NAME ),
                            'name' => 'h6_settings',
                            'description' => __( 'heading h6 font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'h6_font_family',
                                    'description' => __( 'Select the font family to use for h6', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h6_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading h6', BUNCH_NAME ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ) 
                    ) 
                ),
                
                /** body font settings */
                array(
                     'title' => __( 'Body Font', BUNCH_NAME ),
                    'name' => 'body_font_settings',
                    'icon' => 'font-awesome:fa fa-text-width',
                    'controls' => array(
                         array(
                             'type' => 'toggle',
                            'name' => 'body_custom_font',
                            'label' => __( 'Use Custom Font', BUNCH_NAME ),
                            'description' => __( 'Use custom font or not', BUNCH_NAME ),
                            'default' => 0 
                        ),
                        array(
                             'type' => 'section',
                            'title' => __( 'Body Font Settings', BUNCH_NAME ),
                            'name' => 'body_font_settings1',
                            'description' => __( 'body font settings', BUNCH_NAME ),
                            'dependency' => array(
                                 'field' => 'body_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', BUNCH_NAME ),
                                    'name' => 'body_font_family',
                                    'description' => __( 'Select the font family to use for body', BUNCH_NAME ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                
                                array(
                                     'type' => 'color',
                                    'name' => 'body_font_color',
                                    'label' => __( 'Font Color', BUNCH_NAME ),
                                    'description' => __( 'Choose the font color for heading body', BUNCH_NAME ),
                                    'default' => '#686868' 
                                ) 
                            ) 
                        ) 
                    ) 
                ) 
            ) 
        ), 
	) 
);
/**
 *EOF
 */