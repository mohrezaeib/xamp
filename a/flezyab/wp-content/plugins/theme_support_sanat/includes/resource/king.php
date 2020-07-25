<?php
/**
 * Kingcomposer array
 *
 * @package Student WP
 * @author Shahbaz Ahmed <shahbazahmed9@hotmail.com>
 * @version 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}

$orderby = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Order By", BUNCH_NAME),
				"name"			=>	"sort",
				'options'		=>	array('date'=>esc_html__('Date', BUNCH_NAME),'title'=>esc_html__('Title', BUNCH_NAME) ,'name'=>esc_html__('Name', BUNCH_NAME) ,'author'=>esc_html__('Author', BUNCH_NAME),'comment_count' =>esc_html__('Comment Count', BUNCH_NAME),'random' =>esc_html__('Random', BUNCH_NAME) ),
				"description"	=>	esc_html__("Enter the sorting order.", BUNCH_NAME)
			);
$order = array(
				"type"			=>	"select",
				"label"			=>	esc_html__("Order", BUNCH_NAME),
				"name"			=>	"order",
				'options'		=>	(array('ASC'=>esc_html__('Ascending', BUNCH_NAME),'DESC'=>esc_html__('Descending', BUNCH_NAME) ) ),			
				"description"	=>	esc_html__("Enter the sorting order.", BUNCH_NAME)
			);
$number = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Number', BUNCH_NAME ),
				"name"			=>	"num",
				"description"	=>	esc_html__('Enter Number of posts to Show.', BUNCH_NAME )
			);
$text_limit = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Text Limit', BUNCH_NAME ),
				"name"			=>	"text_limit",
				"description"	=>	esc_html__('Enter text limit of posts to Show.', BUNCH_NAME )
			);
$title = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Title', BUNCH_NAME ),
				"name"			=>	"title",
				"description"	=>	esc_html__('Enter section title.', BUNCH_NAME )
			);
$sub_title = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Sub-Title', BUNCH_NAME ),
				"name"			=>	"sub_title",
				"description"	=>	esc_html__('Enter section subtitle.', BUNCH_NAME )
			);
$text  = array(
				"type"			=>	"textarea",
				"label"			=>	esc_html__('Text', BUNCH_NAME ),
				"name"			=>	"text",
				"description"	=>	esc_html__('Enter text to show.', BUNCH_NAME )
			);
$btn_title = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Button Title', BUNCH_NAME ),
				"name"			=>	"btn_title",
				"description"	=>	esc_html__('Enter section Button title.', BUNCH_NAME )
			);
$btn_link = array(
				"type"			=>	"text",
				"label"			=>	esc_html__('Button Link', BUNCH_NAME ),
				"name"			=>	"btn_link",
				"description"	=>	esc_html__('Enter section Button Link.', BUNCH_NAME )
			);
$bg_img = array(
				"type"			=>	"attach_image_url",
				"label"			=>	esc_html__('Background Image', BUNCH_NAME ),
				"name"			=>	"bg_img",
				'admin_label' 	=> 	false,
				"description"	=>	esc_html__('Choose Background image Url.', BUNCH_NAME )
			);

$options = array();


// Revslider Start.
$options['bunch_revslider']	=	array(
					'name' => esc_html__('Revslider', BUNCH_NAME),
					'base' => 'bunch_revslider',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show  Revolution slider.', BUNCH_NAME),
					'params' => array(
								array(
									'type' => 'dropdown',
									'label' => esc_html__('Choose Slider', BUNCH_NAME ),
									'name' => 'slider_slug',
									'options' => bunch_get_rev_slider( 0 ),
									'description' => esc_html__('Choose Slider', BUNCH_NAME )
								),
							),
						);
//Our Services
$options['bunch_our_services']	=	array(
					'name' => esc_html__('Our Services', BUNCH_NAME),
					'base' => 'bunch_our_services',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Services.', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								$number,
								$text_limit,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'services_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);
//Why Choose Us
$options['bunch_why_choose_us']	=	array(
					'name' => esc_html__('Why Choose Us', BUNCH_NAME),
					'base' => 'bunch_why_choose_us',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Why Choose Us.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'General', BUNCH_NAME ) => array(
									$bg_img,
									array(
										'type' => 'textarea',
										'label' => esc_html__( 'Title', BUNCH_NAME ),
										'name' => 'title',
										'description' => esc_html__( 'Enter The Title.', BUNCH_NAME ),
									),
									array(
										"type"			=>	"checkbox",
										"label"			=>	esc_html__('Style Two', BUNCH_NAME ),
										"name"			=>	"style_two",
										'options' => array(
											'option_1' => 'Style Two',
										),
										"description"	=>	esc_html__('Choose whether you want to show The Different Spacing.', BUNCH_NAME  )
									),
								),
								esc_html__( 'Why You Choose Us', BUNCH_NAME ) => array(
									array(
										"type"			=>	"attach_image_url",
										"label"			=>	esc_html__('Image', BUNCH_NAME ),
										"name"			=>	"image",
										'admin_label' 	=> 	false,
										"description"	=>	esc_html__('Choose Image Url.', BUNCH_NAME )
									),
									array(
										'type' => 'text',
										'label' => esc_html__( 'Title', BUNCH_NAME ),
										'name' => 'title1',
										'description' => esc_html__( 'Enter The Title.', BUNCH_NAME ),
									),
									array(
										'type' => 'textarea',
										'label' => esc_html__( 'Description', BUNCH_NAME ),
										'name' => 'text',
										'description' => esc_html__( 'Enter The Description.', BUNCH_NAME ),
									),
									array(
										'type' => 'group',
										'label' => esc_html__( 'Our Services', BUNCH_NAME ),
										'name' => 'services',
										'description' => esc_html__( 'Enter Our Services.', BUNCH_NAME ),
										'params' => array(
												array(
													'type' => 'icon_picker',
													'label' => esc_html__( 'Icon', BUNCH_NAME ),
													'name' => 'icons',
													'description' => esc_html__( 'Enter The Icon.', BUNCH_NAME ),
												),
												array(
													'type' => 'text',
													'label' => esc_html__( 'Title', BUNCH_NAME ),
													'name' => 'title2',
													'description' => esc_html__( 'Enter The Title.', BUNCH_NAME ),
												),
											),
										),
									),
								),
							);
//Our Projects
$options['bunch_our_projects']	=	array(
					'name' => esc_html__('Our Projects', BUNCH_NAME),
					'base' => 'bunch_our_projects',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Our Projects.', BUNCH_NAME),
					'params' => array(
								$title,
								$number,
								array(
								   "type" => "textfield",
								   "label" => __('Excluded Categories ID', BUNCH_NAME ),
								   "name" => "exclude_cats",
								   "description" => __('Enter Excluded Categories ID seperated by commas(13,14).', BUNCH_NAME )
								),
								$orderby,
								$order,
							),
						);
//Our Testimonials
$options['bunch_our_testimonials']	=	array(
					'name' => esc_html__('Our Testimonials', BUNCH_NAME),
					'base' => 'bunch_our_testimonials',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Testimonials.', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								$number,
								$text_limit,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'testimonials_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);
//Funfacts
$options['bunch_funfacts']	=	array(
					'name' => esc_html__('Our Funfacts', BUNCH_NAME),
					'base' => 'bunch_funfacts',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Funfacts.', BUNCH_NAME),
					'params' => array(
					            array(
									"type"			=>	"attach_image_url",
									"label"			=>	esc_html__('Background Image', BUNCH_NAME ),
									"name"			=>	"bg_img",
									'admin_label' 	=> 	false,
									"description"	=>	esc_html__('Upload Background Image.', BUNCH_NAME )
								),
								array(
									"type"			=>	"attach_image_url",
									"label"			=>	esc_html__('Man Image', BUNCH_NAME ),
									"name"			=>	"image",
									'admin_label' 	=> 	false,
									"description"	=>	esc_html__('Choose Man Image Url.', BUNCH_NAME )
								),
								array(
									'type' => 'group',
									'label' => esc_html__( 'Our Funfact', BUNCH_NAME ),
									'name' => 'funfact',
									'description' => esc_html__( 'Enter Our Funfact.', BUNCH_NAME ),
									'params' => array(
										array(
											'type' => 'text',
											'label' => esc_html__( 'Counter Start', BUNCH_NAME ),
											'name' => 'counter_start',
											'description' => esc_html__( 'Enter The Counter Start.', BUNCH_NAME ),
										),
										array(
											'type' => 'text',
											'label' => esc_html__( 'Counter Stop', BUNCH_NAME ),
											'name' => 'counter_stop',
											'description' => esc_html__( 'Enter The Counter Stop.', BUNCH_NAME ),
										),
										array(
											'type' => 'text',
											'label' => esc_html__( 'Plus And Percent Sign', BUNCH_NAME ),
											'name' => 'plus_sign',
											'description' => esc_html__( 'Enter The Plus And Percent Sign.', BUNCH_NAME ),
										),
										$title,
									),
								),
							),
						);
//Latest News
$options['bunch_latest_news']	=	array(
					'name' => esc_html__('Latest News', BUNCH_NAME),
					'base' => 'bunch_latest_news',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Latest News.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'General', BUNCH_NAME ) => array(
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Title', BUNCH_NAME ),
										"name"			=>	"title",
										"description"	=>	esc_html__('Enter The Title.', BUNCH_NAME )
									),
								),
								esc_html__( 'Blog Left', BUNCH_NAME ) => array(
									$text_limit,
									$number,
									array(
										"type" => "dropdown",
										"label" => __( 'Category', BUNCH_NAME),
										"name" => "cat",
										"options" =>  bunch_get_categories(array( 'taxonomy' => 'category'), true),
										"description" => __( 'Choose Category.', BUNCH_NAME)
									),
									$orderby,
									$order,
								),
								esc_html__( 'Blog Right', BUNCH_NAME ) => array(
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Number', BUNCH_NAME ),
										"name"			=>	"num1",
										"description"	=>	esc_html__('Enter Number of posts to Show.', BUNCH_NAME )
									),
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Number Of Text', BUNCH_NAME ),
										"name"			=>	"text_limit1",
										"description"	=>	esc_html__('Enter Number of Text to Show.', BUNCH_NAME )
									),
									array(
										"type" => "dropdown",
										"label" => __('Category', BUNCH_NAME),
										"name" => "cat1",
										"options" =>  bunch_get_categories(array('taxonomy' => 'category'), true),
										"description" => __('Choose Category.', BUNCH_NAME)
									),
									array(
										"type"			=>	"select",
										"label"			=>	esc_html__("Order By", BUNCH_NAME),
										"name"			=>	"sort1",
										'options'		=>	array('date'=>esc_html__('Date', BUNCH_NAME),'title'=>esc_html__('Title', BUNCH_NAME) ,'name'=>esc_html__('Name', BUNCH_NAME) ,'author'=>esc_html__('Author', BUNCH_NAME),'comment_count' =>esc_html__('Comment Count', BUNCH_NAME),'random' =>esc_html__('Random', BUNCH_NAME) ),
										"description"	=>	esc_html__("Enter the sorting order.", BUNCH_NAME)
									),
									array(
										"type"			=>	"select",
										"label"			=>	esc_html__("Order", BUNCH_NAME),
										"name"			=>	"order1",
										'options'		=>	(array('ASC'=>esc_html__('Ascending', BUNCH_NAME),'DESC'=>esc_html__('Descending', BUNCH_NAME) ) ),			
										"description"	=>	esc_html__("Enter the sorting order.", BUNCH_NAME)
									),
								),
							),
						);
//Our Team
$options['bunch_our_team']	=	array(
					'name' => esc_html__('Our Team', BUNCH_NAME),
					'base' => 'bunch_our_team',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Team.', BUNCH_NAME),
					'params' => array(
								$bg_img,
								$title,
								$number,
								$text_limit,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'team_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);
//Our Partners
$options['bunch_our_partners']	=	array(
					'name' => esc_html__('Our Partners', BUNCH_NAME),
					'base' => 'bunch_our_partners',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Partners.', BUNCH_NAME),
					'params' => array(
								$title,
								array(
									'type' => 'group',
									'label' => esc_html__( 'Our Sponsors', BUNCH_NAME ),
									'name' => 'sponsors',
									'description' => esc_html__( 'Enter The Our Sponsors.', BUNCH_NAME ),
									'params' => array(
										array(
											"type"			=>	"attach_image_url",
											"label"			=>	esc_html__('Sponsors Image', BUNCH_NAME ),
											"name"			=>	"image",
											'admin_label' 	=> 	false,
											"description"	=>	esc_html__('Choose Sponsors Image Url.', BUNCH_NAME )
										),
										array(
											'type' => 'text',
											'label' => esc_html__( 'External Link', BUNCH_NAME ),
											'name' => 'link',
											'description' => esc_html__( 'Enter The External Link.', BUNCH_NAME ),
										),
									),
								),
								array(
									"type"			=>	"toggle",
									"label"			=>	esc_html__( 'Remove Top Padding', BUNCH_NAME ),
									"name"			=>	"remove_top",
									"description"	=>	esc_html__( 'Remove Top Padding.', BUNCH_NAME )
								),
								array(
									"type"			=>	"toggle",
									"label"			=>	esc_html__( 'Remove Bottom Padding', BUNCH_NAME ),
									"name"			=>	"remove_bottom",
									"description"	=>	esc_html__( 'Remove Bottom Padding.', BUNCH_NAME )
								),
							),
						);
//Google Map
$options['bunch_google_map']	=	array(
					'name' => esc_html__('Google Map', BUNCH_NAME),
					'base' => 'bunch_google_map',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Google Map.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'General', BUNCH_NAME ) => array(
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Latitude', BUNCH_NAME ),
										"name"			=>	"lat",
										"description"	=>	esc_html__('Enter The Latitude.', BUNCH_NAME )
									),
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Longitude', BUNCH_NAME ),
										"name"			=>	"long",
										"description"	=>	esc_html__('Enter The Longitude.', BUNCH_NAME )
									),
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Mark Title', BUNCH_NAME ),
										"name"			=>	"mark_title",
										"description"	=>	esc_html__('Enter The Mark Title.', BUNCH_NAME )
									),
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Mark Address', BUNCH_NAME ),
										"name"			=>	"address",
										"description"	=>	esc_html__('Enter The Mark Address.', BUNCH_NAME )
									),
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Email', BUNCH_NAME ),
										"name"			=>	"email",
										"description"	=>	esc_html__('Enter The Email.', BUNCH_NAME )
									),
									array(
										"type"			=>	"attach_image_url",
										"label"			=>	esc_html__('Marker Image', BUNCH_NAME ),
										"name"			=>	"image",
										'admin_label' 	=> 	false,
										"description"	=>	esc_html__('Choose Marker image Url.', BUNCH_NAME )
									),
								),
								esc_html__( 'Contact Info', BUNCH_NAME ) => array(
									array(
										'type' => 'group',
										'label' => esc_html__( 'Our Information', BUNCH_NAME ),
										'name' => 'information',
										'description' => esc_html__( 'Enter The Our Information.', BUNCH_NAME ),
										'params' => array(
													array(
														'type' => 'icon_picker',
														'label' => esc_html__( 'Icon', BUNCH_NAME ),
														'name' => 'icons',
														'description' => esc_html__( 'Enter The Icon.', BUNCH_NAME ),
													),
													array(
														"type"			=>	"textarea",
														"label"			=>	esc_html__('Description', BUNCH_NAME ),
														"name"			=>	"description",
														"description"	=>	esc_html__('Enter The Description.', BUNCH_NAME )
													),
												),
											),
										),
									),
								);
//Our Services 2
$options['bunch_our_services_2']	=	array(
					'name' => esc_html__('Our Services 2', BUNCH_NAME),
					'base' => 'bunch_our_services_2',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Services 2.', BUNCH_NAME),
					'params' => array(
								$number,
								$text_limit,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'services_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);
//Welcome to Industrial
$options['bunch_welcome_to_industrial']	=	array(
					'name' => esc_html__('Welcome to Industrial', BUNCH_NAME),
					'base' => 'bunch_welcome_to_industrial',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Welcome to Industrial.', BUNCH_NAME),
					'params' => array(
								array(
									"type"			=>	"textarea",
									"label"			=>	esc_html__('Title', BUNCH_NAME ),
									"name"			=>	"title",
									"description"	=>	esc_html__('Enter The Title.', BUNCH_NAME )
								),
								$text,
								$sub_title,
								array(
									"type"			=>	"textarea",
									"label"			=>	esc_html__('Description', BUNCH_NAME ),
									"name"			=>	"text1",
									"description"	=>	esc_html__('Enter The Description.', BUNCH_NAME )
								),
								$btn_title,
								$btn_link,
								array(
									"type"			=>	"attach_image_url",
									"label"			=>	esc_html__('About Image', BUNCH_NAME ),
									"name"			=>	"image",
									'admin_label' 	=> 	false,
									"description"	=>	esc_html__('Choose The About image Url.', BUNCH_NAME )
								),
							),
						);
//Our Projects 2
$options['bunch_our_projects_2']	=	array(
					'name' => esc_html__('Our Projects 2', BUNCH_NAME),
					'base' => 'bunch_our_projects_2',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Projects 2.', BUNCH_NAME),
					'params' => array(
								$bg_img,
								$title,
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'projects_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);
//Newsletter
$options['bunch_newsletter']	=	array(
					'name' => esc_html__('Newsletter', BUNCH_NAME),
					'base' => 'bunch_newsletter',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Newsletter.', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('FeedBurner ID', BUNCH_NAME ),
									"name"			=>	"id",
									"description"	=>	esc_html__('Enter The FeedBurner ID.', BUNCH_NAME ),
									'value' => 'themeforest',
								),
							),
						);
//Testimonials and Faqs
$options['bunch_testimonials_and_faqs']	=	array(
					'name' => esc_html__('Testimonials and Faqs', BUNCH_NAME),
					'base' => 'bunch_testimonials_and_faqs',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Testimonials and Faqs.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'General', BUNCH_NAME ) => array(
                                    $bg_img,
									$title,
									$number,
									$text_limit,
									array(
										"type" => "dropdown",
										"label" => __( 'Category', BUNCH_NAME),
										"name" => "cat",
										"options" =>  bunch_get_categories(array( 'taxonomy' => 'testimonials_category'), true),
										"description" => __( 'Choose Category.', BUNCH_NAME)
									),
									$order,
									$orderby,
								),
								esc_html__( 'Our Faqs', BUNCH_NAME ) => array(
									array(
										'type' => 'text',
										'label' => esc_html__( 'Title', BUNCH_NAME ),
										'name' => 'title1',
										'description' => esc_html__( 'Enter The Title.', BUNCH_NAME ),
									),
									array(
										'type' => 'group',
										'label' => esc_html__( 'Our Accordion', BUNCH_NAME ),
										'name' => 'accordion',
										'description' => esc_html__( 'Enter The Our Accordion.', BUNCH_NAME ),
										'params' => array(
											array(
												'type' => 'text',
												'label' => esc_html__( 'Title', BUNCH_NAME ),
												'name' => 'acc_title',
												'description' => esc_html__( 'Enter The Title.', BUNCH_NAME ),
											),
											array(
												'type' => 'textarea',
												'label' => esc_html__( 'Text', BUNCH_NAME ),
												'name' => 'acc_text',
												'description' => esc_html__( 'Enter The Text.', BUNCH_NAME ),
											),
										),
									),
								),
							),
						);
//Call To Action
$options['bunch_call_to_action']	=	array(
					'name' => esc_html__('Call To Action', BUNCH_NAME),
					'base' => 'bunch_call_to_action',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Call To Action.', BUNCH_NAME),
					'params' => array(
								$bg_img,
								array(
									'type' => 'textarea',
									'label' => esc_html__( 'Title', BUNCH_NAME ),
									'name' => 'title',
									'description' => esc_html__( 'Enter The Title.', BUNCH_NAME ),
								),
								$btn_title,
								$btn_link,
							),
						);
//Our Services 3
$options['bunch_our_services_3']	=	array(
					'name' => esc_html__('Our Services 3', BUNCH_NAME),
					'base' => 'bunch_our_services_3',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Services 3.', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								$number,
								$text_limit,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'services_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);
//Work Process
$options['bunch_work_process']	=	array(
					'name' => esc_html__('Work Process', BUNCH_NAME),
					'base' => 'bunch_work_process',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Work Process.', BUNCH_NAME),
					'params' => array(
								$bg_img,
								$title,
								$number,
								$text_limit,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'services_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);
//Latest News Two
$options['bunch_latest_news_2']	=	array(
					'name' => esc_html__('Latest News Two', BUNCH_NAME),
					'base' => 'bunch_latest_news_2',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Latest News Two.', BUNCH_NAME),
					'params' => array(
								$title,
								$number,
								$text_limit,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);
//Contact Us
$options['bunch_contact_us']	=	array(
					'name' => esc_html__('Contact Us', BUNCH_NAME),
					'base' => 'bunch_contact_us',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Contact Us.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'Contact Information', BUNCH_NAME ) => array(
									array(
										"type"			=>	"attach_image_url",
										"label"			=>	esc_html__('Logo Image', BUNCH_NAME ),
										"name"			=>	"logo_img",
										'admin_label' 	=> 	false,
										"description"	=>	esc_html__('Choose The Logo image Url.', BUNCH_NAME )
									),
									array(
										"type"			=>	"textarea",
										"label"			=>	esc_html__('Text', BUNCH_NAME ),
										"name"			=>	"text",
										"description"	=>	esc_html__('Enter The Text.', BUNCH_NAME )
									),
									array(
										'type' => 'group',
										'label' => esc_html__( 'Contact Information', BUNCH_NAME ),
										'name' => 'contact_info',
										'description' => esc_html__( 'Enter The Contact Information.', BUNCH_NAME ),
										'params' => array(
											array(
												'type' => 'icon_picker',
												'label' => esc_html__( 'Icon', BUNCH_NAME ),
												'name' => 'icons',
												'description' => esc_html__( 'Enter The Icon.', BUNCH_NAME ),
											),
											array(
												"type"			=>	"textarea",
												"label"			=>	esc_html__('Info Description', BUNCH_NAME ),
												"name"			=>	"description",
												"description"	=>	esc_html__('Enter The Info Description.', BUNCH_NAME )
											),
										),
									),
								),
								esc_html__( 'Contact Form', BUNCH_NAME ) => array(
									array(
										"type"			=>	"text",
										"label"			=>	esc_html__('Form Title', BUNCH_NAME ),
										"name"			=>	"form_title",
										"description"	=>	esc_html__('Enter The Form Title.', BUNCH_NAME )
									),
									array(
										"type"			=>	"textarea",
										"label"			=>	esc_html__('Contact Form', BUNCH_NAME ),
										"name"			=>	"contact_form",
										"description"	=>	esc_html__('Enter The Contact Form.', BUNCH_NAME )
									),
								),
							),
						);
//Newsletter Two
$options['bunch_newsletter_2']	=	array(
					'name' => esc_html__('Newsletter Two', BUNCH_NAME),
					'base' => 'bunch_newsletter_2',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Newsletter Two.', BUNCH_NAME),
					'params' => array(
								$bg_img,
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Upper Title', BUNCH_NAME ),
									"name"			=>	"upper_title",
									"description"	=>	esc_html__('Enter The Upper Title.', BUNCH_NAME )
								),
								$title,
								array(
									"type"			=>	"attach_image_url",
									"label"			=>	esc_html__('Background Image', BUNCH_NAME ),
									"name"			=>	"bg_img1",
									'admin_label' 	=> 	false,
									"description"	=>	esc_html__('Choose The Right Side Background image Url.', BUNCH_NAME )
								),
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('FeedBurner ID', BUNCH_NAME ),
									"name"			=>	"id",
									"description"	=>	esc_html__('Enter The FeedBurner ID.', BUNCH_NAME ),
									'value' => 'themeforest',
								),
							),
						);
//Services 3 Column
$options['bunch_services_3_col']	=	array(
					'name' => esc_html__('Services 3 Column', BUNCH_NAME),
					'base' => 'bunch_services_3_col',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Services 3 Column.', BUNCH_NAME),
					'params' => array(
								$number,
								$text_limit,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'services_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);

//Our Projects 3
$options['bunch_our_projects_3']	=	array(
					'name' => esc_html__('Our Projects 3', BUNCH_NAME),
					'base' => 'bunch_our_projects_3',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Our Projects 3.', BUNCH_NAME),
					'params' => array(
								$number,
								array(
								   "type" => "textfield",
								   "label" => __('Excluded Categories ID', BUNCH_NAME ),
								   "name" => "exclude_cats",
								   "description" => __('Enter Excluded Categories ID seperated by commas(13,14).', BUNCH_NAME )
								),
								$orderby,
								$order,
							),
						);
//Blog 2 Column
$options['bunch_blog_2_col']	=	array(
					'name' => esc_html__('Blog 2 Column', BUNCH_NAME),
					'base' => 'bunch_blog_2_col',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Blog 2 Column.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'Right Sidebar', BUNCH_NAME ) => array(
								   array(
									   'type' => 'dropdown',
									   'label' => esc_html__( 'Choose Sidebar', BUNCH_NAME ),
									   'name' => 'sidebar_slug',
									   'options' => sanat_bunch_get_sidebars(),
									   'description' => esc_html__( 'Choose Sidebar.', BUNCH_NAME ),
								   ),
								),
								esc_html__( 'Our Blog', BUNCH_NAME ) => array(
    								$number,
    								$text_limit,
    								array(
    									"type" => "dropdown",
    									"label" => __( 'Category', BUNCH_NAME),
    									"name" => "cat",
    									"options" =>  bunch_get_categories(array( 'taxonomy' => 'category'), true),
    									"description" => __( 'Choose Category.', BUNCH_NAME)
    								),
    								$order,
    								$orderby,
								),
							),
						);
//Blog List View
$options['bunch_blog_list_view']	=	array(
					'name' => esc_html__('Blog List View', BUNCH_NAME),
					'base' => 'bunch_blog_list_view',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Blog List View.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'Right Sidebar', BUNCH_NAME ) => array(
								   array(
									   'type' => 'dropdown',
									   'label' => esc_html__( 'Choose Sidebar', BUNCH_NAME ),
									   'name' => 'sidebar_slug',
									   'options' => sanat_bunch_get_sidebars(),
									   'description' => esc_html__( 'Choose Sidebar.', BUNCH_NAME ),
								   ),
								),
								esc_html__( 'Our Blog', BUNCH_NAME ) => array(
    								$number,
    								$text_limit,
    								array(
    									"type" => "dropdown",
    									"label" => __( 'Category', BUNCH_NAME),
    									"name" => "cat",
    									"options" =>  bunch_get_categories(array( 'taxonomy' => 'category'), true),
    									"description" => __( 'Choose Category.', BUNCH_NAME)
    								),
    								$order,
    								$orderby,
								),
							),
						);
//Contact Us 2
$options['bunch_contact_us_2']	=	array(
					'name' => esc_html__('Contact Us 2', BUNCH_NAME),
					'base' => 'bunch_contact_us_2',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Contact Us 2.', BUNCH_NAME),
					'params' => array(
								esc_html__( 'General', BUNCH_NAME ) => array(
									$title,
									array(
										"type"			=>	"textarea",
										"label"			=>	esc_html__('Contact Form', BUNCH_NAME ),
										"name"			=>	"contact_form",
										"description"	=>	esc_html__('Enter The Contact Form.', BUNCH_NAME )
									),
								),
								esc_html__( 'Contact Information', BUNCH_NAME ) => array(
									array(
										'type' => 'group',
										'label' => esc_html__( 'Contact Information', BUNCH_NAME ),
										'name' => 'contact_info',
										'description' => esc_html__( 'Enter The Contact Information.', BUNCH_NAME ),
										'params' => array(
											array(
												'type' => 'icon_picker',
												'label' => esc_html__( 'Icon', BUNCH_NAME ),
												'name' => 'icons',
												'description' => esc_html__( 'Enter The Icon.', BUNCH_NAME ),
											),
											array(
												"type"			=>	"textarea",
												"label"			=>	esc_html__('Description', BUNCH_NAME ),
												"name"			=>	"description",
												"description"	=>	esc_html__('Enter The Description.', BUNCH_NAME )
											),
										),
									),
									array(
										"type"			=>	"toggle",
										"label"			=>	esc_html__('Show Or Hide Social Icons', BUNCH_NAME ),
										"name"			=>	"show_social",
										"description"	=>	esc_html__('Show Or Hide Social Icons.', BUNCH_NAME )
									),
								),
							),
						);
//Google Map Two
$options['bunch_google_map_2']	=	array(
					'name' => esc_html__('Google Map Two', BUNCH_NAME),
					'base' => 'bunch_google_map_2',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Google Map Two.', BUNCH_NAME),
					'params' => array(
					        esc_html__( 'Google Map', BUNCH_NAME ) => array(
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Latitude', BUNCH_NAME ),
									"name"			=>	"lat",
									"description"	=>	esc_html__('Enter The Latitude.', BUNCH_NAME )
								),
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Longitude', BUNCH_NAME ),
									"name"			=>	"long",
									"description"	=>	esc_html__('Enter The Longitude.', BUNCH_NAME )
								),
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Mark Title', BUNCH_NAME ),
									"name"			=>	"mark_title",
									"description"	=>	esc_html__('Enter The Mark Title.', BUNCH_NAME )
								),
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Address', BUNCH_NAME ),
									"name"			=>	"address",
									"description"	=>	esc_html__('Enter The Address.', BUNCH_NAME )
								),
								array(
									"type"			=>	"text",
									"label"			=>	esc_html__('Email Address', BUNCH_NAME ),
									"name"			=>	"email",
									"description"	=>	esc_html__('Enter The Email Address.', BUNCH_NAME )
								),
								array(
									"type"			=>	"attach_image_url",
									"label"			=>	esc_html__('Marker Image', BUNCH_NAME ),
									"name"			=>	"img",
									'admin_label' 	=> 	false,
									"description"	=>	esc_html__('Choose Marker image Url.', BUNCH_NAME )
								),
								array(
									"type"			=>	"checkbox",
									"label"			=>	esc_html__('Style Two', BUNCH_NAME ),
									"name"			=>	"style_two",
									'options' => array(
										'option_1' => 'Style Two',
									),
									"description"	=>	esc_html__('Choose whether you want to show The Different Style.', BUNCH_NAME  )
								),
							),
							esc_html__( 'Contact Info', BUNCH_NAME ) => array(
    							array(
    								'type' => 'group',
    								'label' => esc_html__( 'Our Information', BUNCH_NAME ),
    								'name' => 'information',
    								'description' => esc_html__( 'Enter The Our Information.', BUNCH_NAME ),
    								'params' => array(
										array(
											'type' => 'icon_picker',
											'label' => esc_html__( 'Icon', BUNCH_NAME ),
											'name' => 'icons',
											'description' => esc_html__( 'Enter The Icon.', BUNCH_NAME ),
										),
										array(
											"type"			=>	"textarea",
											"label"			=>	esc_html__('Description', BUNCH_NAME ),
											"name"			=>	"description",
											"description"	=>	esc_html__('Enter The Description.', BUNCH_NAME )
										),
									),
								),
							),
					),
				);
//Our Team 2
$options['bunch_our_team_2']	=	array(
					'name' => esc_html__('Our Team 2', BUNCH_NAME),
					'base' => 'bunch_our_team_2',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Team 2.', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								$number,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'team_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);
//Our Testimonials 2
$options['bunch_our_testimonials_2']	=	array(
					'name' => esc_html__('Our Testimonials 2', BUNCH_NAME),
					'base' => 'bunch_our_testimonials_2',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Our Testimonials 2.', BUNCH_NAME),
					'params' => array(
								$title,
								$text,
								$number,
								$text_limit,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'testimonials_category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);
//Faqs Tab
$options['bunch_faq_tabs']	=	array(
					'name' => esc_html__('Faqs Tab', BUNCH_NAME),
					'base' => 'bunch_faq_tabs',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show Faqs Tab.', BUNCH_NAME),
					'params' => array(
								array(
									 'type' => 'group',
									 'label' => esc_html__( 'Faqs Tab', BUNCH_NAME ),
									 'name' => 'faq_tab',
									 'description' => esc_html__( 'Enter Faq Tab Info.', BUNCH_NAME ),
									 'params' => array(
											array(
												 'type' => 'text',
												 'label' => esc_html__( 'Title', BUNCH_NAME ),
												 'name' => 'list_title',
												 'description' => esc_html__( 'Enter Title of Faq Tab.', BUNCH_NAME ),
											),
											$text_limit,
											$number,
											array(
												"type" => "dropdown",
												"label" => __( 'Category', BUNCH_NAME),
												"name" => "cat",
												"options" =>  bunch_get_categories(array( 'taxonomy' => 'faqs_category'), true),
												"description" => __( 'Choose Category.', BUNCH_NAME)
											),
											$order,
											$orderby,
										),
									),
								),
							);
//Blog Modern View
$options['bunch_blog_modern_view']	=	array(
					'name' => esc_html__('Blog Modern View', BUNCH_NAME),
					'base' => 'bunch_blog_modern_view',
					'class' => '',
					'category' => esc_html__('Sanat', BUNCH_NAME),
					'icon' => 'fa-briefcase' ,
					'description' => esc_html__('Show The Blog Modern View.', BUNCH_NAME),
					'params' => array(
								$number,
								$text_limit,
								array(
									"type" => "dropdown",
									"label" => __( 'Category', BUNCH_NAME),
									"name" => "cat",
									"options" =>  bunch_get_categories(array( 'taxonomy' => 'category'), true),
									"description" => __( 'Choose Category.', BUNCH_NAME)
								),
								$order,
								$orderby,
							),
						);


return $options;