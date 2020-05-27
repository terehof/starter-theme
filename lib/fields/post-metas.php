<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Container::make( 'post_meta', __('Home Page Settings', 'adm') )
//     ->show_on_post_type('page')
// 	->show_on_template('page-home.php')
// 	->add_tab(
// 		__('Intro Section', 'adm'),
// 		array(
//             Field::make( 'image', 'home_page_intro_section_bg_image', __('Background Image', 'adm') ),
//             Field::make( 'text', 'home_page_intro_section_heading', __('Heading', 'adm') ),
//             Field::make( 'text', 'home_page_intro_section_subheading', __('Subheading', 'adm') ),
//             Field::make( 'image', 'home_page_intro_section_bg_video_poster', __('Background Video Poster', 'adm') ),
//             Field::make( 'file', 'home_page_intro_section_bg_video', __('Background Video', 'adm') )
//                 ->set_type('video'),
//             Field::make( 'text', 'home_page_intro_section_modal_youtube_link', __('Modal YouTube Link', 'adm') )

// 		)
//     )
    
//     ->add_tab(
// 		__('About Us Section', 'adm'),
// 		array(
//             Field::make( 'text', 'home_page_about_us_section_heading', __('Heading', 'adm') ),
//             Field::make( 'complex', 'home_page_about_us_section__features', __('Features', 'adm') )
//                 ->set_layout('tabbed-horizontal')
//                 ->add_fields(
//                     array(
//                         Field::make( 'image', 'icon', __('Image', 'adm') ),
//                         Field::make( 'text', 'label', __('Label', 'adm') )
//                     )
//                 )
// 		)
//     )
    
//     ->add_tab(
// 		__('Dumpster Rental Section', 'adm'),
// 		array(
//             Field::make( 'image', 'home_page_dumpster_rental_section_image', __('Image', 'adm') ),
//             Field::make( 'text', 'home_page_dumpster_rental_section_heading', __('Heading', 'adm') ),
//             Field::make( 'text', 'home_page_dumpster_rental_section_subheading', __('Subheading', 'adm') ),
//             Field::make( 'textarea', 'home_page_dumpster_rental_section_content', __('Content', 'adm') )
// 		)
//     )
    
//     ->add_tab(
// 		__('Junk Drop Off Section', 'adm'),
// 		array(
//             Field::make( 'image', 'home_page_junk_drop_off_section_image', __('Image', 'adm') ),
//             Field::make( 'text', 'home_page_junk_drop_off_section_heading', __('Heading', 'adm') ),
//             Field::make( 'text', 'home_page_junk_drop_off_section_subheading', __('Subheading', 'adm') ),
//             Field::make( 'textarea', 'home_page_junk_drop_off_section_content', __('Content', 'adm') )
// 		)
//     )
    
//     ->add_tab(
// 		__('Reviews Section', 'adm'),
// 		array(
//             Field::make( 'text', 'home_page_reviews_section_heading', __('Heading', 'adm') )
// 		)
//     )
    
//     ->add_tab(
// 		__('Blog Section', 'adm'),
// 		array(
//             Field::make( 'text', 'home_page_blog_section_heading', __('Heading', 'adm') )
// 		)
//     );

// Container::make( 'post_meta', __('About Us Page Settings', 'adm') )
//     ->show_on_post_type('page')
// 	->show_on_template('page-about-us.php')
// 	->add_tab(
// 		__('Intro Section', 'adm'),
// 		array(
//             Field::make( 'image', 'about_us_page_intro_section_bg_image_desktop', __('Background Image (Desktop)', 'adm') ),
//             Field::make( 'image', 'about_us_page_intro_section_bg_image_mobile', __('Background Image (Mobile)', 'adm') ),
//             Field::make( 'textarea', 'about_us_page_intro_section_heading', __('Heading', 'adm') )

// 		)
//     )
    
//     ->add_tab(
// 		__('Our Story Section', 'adm'),
// 		array(
//             Field::make( 'image', 'about_us_page_our_story_section_image', __('Image', 'adm') ),
//             Field::make( 'text', 'about_us_page_our_story_section_heading', __('Heading', 'adm') ),
//             Field::make( 'textarea', 'about_us_page_our_story_section_content', __('Content', 'adm') )

// 		)
//     )
    
//     ->add_tab(
// 		__('Our Mission Section', 'adm'),
// 		array(
//             Field::make( 'image', 'about_us_page_our_mission_section_image', __('Image', 'adm') ),
//             Field::make( 'text', 'about_us_page_our_mission_section_heading', __('Heading', 'adm') ),
//             Field::make( 'text', 'about_us_page_our_mission_section_subheading', __('Subheading', 'adm') )
// 		)
//     )
    
//     ->add_tab(
// 		__('Our Values Section', 'adm'),
// 		array(
//             Field::make( 'text', 'about_us_page_our_values_section_heading', __('Heading', 'adm') ),
//             Field::make( 'complex', 'about_us_page_our_values_section_values', __('Values', 'adm') )
//                 ->set_layout('tabbed-horizontal')
//                 ->add_fields(
//                     array(
//                         Field::make( 'image', 'icon', __('Icon', 'adm') ),
//                         Field::make( 'text', 'title', __('Title', 'adm') ),
//                         Field::make( 'textarea', 'description', __('Description', 'adm') )
//                     )
//                 )
// 		)
//     );

// Container::make( 'post_meta', __('FAQ Page Settings', 'adm') )
//     ->show_on_post_type('page')
// 	->show_on_template('page-faq.php')
// 	->add_tab(
// 		__('Intro Section', 'adm'),
// 		array(
//             Field::make( 'image', 'faq_page_intro_section_bg_image_desktop', __('Background Image (Desktop)', 'adm') ),
//             Field::make( 'image', 'faq_page_intro_section_bg_image_tablet', __('Background Image (Tablet)', 'adm') ),
//             Field::make( 'image', 'faq_page_intro_section_bg_image_mobile', __('Background Image (Mobile)', 'adm') ),
//             Field::make( 'textarea', 'faq_page_intro_section_heading', __('Heading', 'adm') )
// 		)
//     )

//     ->add_tab(
// 		__('FAQ Section', 'adm'),
// 		array(
//             Field::make( 'image', 'faq_page_faq_section_image', __('Image', 'adm') ),
//             Field::make( 'complex', 'faq_page_faq_section_items', __('FAQ Items', 'adm') )
//                 ->set_layout('tabbed-horizontal')
//                 ->add_fields(
//                     array(
//                         Field::make( 'text', 'question', __('Question', 'adm') ),
//                         Field::make( 'textarea', 'answer', __('Answer', 'adm') )
//                     )
//                 )
// 		)
//     );

// Container::make( 'post_meta', __('Junk Drop Off Page Settings', 'adm') )
//     ->show_on_post_type('page')
// 	->show_on_template('page-junk-drop-off.php')
// 	->add_tab(
// 		__('Intro Section', 'adm'),
// 		array(
//             Field::make( 'image', 'junk_drop_off_page_intro_section_bg_image_desktop', __('Background Image (Desktop)', 'adm') ),
//             Field::make( 'image', 'junk_drop_off_page_intro_section_bg_image_tablet', __('Background Image (Tablet)', 'adm') ),
//             Field::make( 'image', 'junk_drop_off_page_intro_section_bg_image_mobile', __('Background Image (Mobile)', 'adm') ),
//             Field::make( 'textarea', 'junk_drop_off_page_intro_section_heading', __('Heading', 'adm') ),
//             Field::make( 'text', 'junk_drop_off_page_intro_section_subheading', __('Subheading', 'adm') )
// 		)
//     )
    
//     ->add_tab(
// 		__('Transfer Station Section', 'adm'),
// 		array(
//             Field::make( 'image', 'junk_drop_off_page_transfer_station_section_image', __('Image', 'adm') ),
//             Field::make( 'text', 'junk_drop_off_page_transfer_station_section_heading', __('Heading', 'adm') ),
//             Field::make( 'textarea', 'junk_drop_off_page_transfer_station_section_content', __('Content', 'adm') )
// 		)
//     )
    
//     ->add_tab(
// 		__('What We Can Take Section', 'adm'),
// 		array(
//             Field::make( 'text', 'junk_drop_off_page_what_we_can_take_section_heading', __('Heading', 'adm') ),
//             Field::make( 'complex', 'junk_drop_off_page_what_we_can_take_section_items', __('Items', 'adm') )
//                 ->set_layout('tabbed-horizontal')
//                 ->add_fields(
//                     array(
//                         Field::make( 'image', 'image', __('Image', 'adm') ),
//                         Field::make( 'text', 'label', __('Label', 'adm') )
//                     )
//                 )
// 		)
//     )
    
//     ->add_tab(
// 		__('Environmental Responsibility Section', 'adm'),
// 		array(
//             Field::make( 'text', 'junk_drop_off_page_environmental_responsibility_section_heading', __('Heading', 'adm') ),
//             Field::make( 'text', 'junk_drop_off_page_environmental_responsibility_section_subheading', __('Subheading', 'adm') )
// 		)
//     )
    
//     ->add_tab(
// 		__('Call to Action Section', 'adm'),
// 		array(
//             Field::make( 'image', 'junk_drop_off_page_c2a_section_image', __('Image', 'adm') ),
//             Field::make( 'textarea', 'junk_drop_off_page_c2a_section_faq_heading', __('FAQ Heading', 'adm') ),
//             Field::make( 'text', 'junk_drop_off_page_c2a_section_call_us_heading', __('Call Us Heading', 'adm') )
// 		)
// 	);
	
// Container::make( 'post_meta', __('Dumpster Rental Page Settings', 'adm') )
// 	->show_on_post_type('page')
// 	->show_on_template('page-dumpster-rental.php')
// 	->add_tab(
// 		__('Intro Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'dumpster_rental_page_intro_section_bg_image_desktop', __('Background Image (Desktop)', 'adm') ),
// 			Field::make( 'image', 'dumpster_rental_page_intro_section_bg_image_tablet', __('Background Image (Tablet)', 'adm') ),
//             Field::make( 'image', 'dumpster_rental_page_intro_section_bg_image_mobile', __('Background Image (Mobile)', 'adm') ),
//             Field::make( 'text', 'dumpster_rental_page_intro_section_heading', __('Heading', 'adm') ),
//             Field::make( 'text', 'dumpster_rental_page_intro_section_subheading', __('Subheading', 'adm') )
// 		)
// 	)
	
// 	->add_tab(
// 		__('Residential Dumpster Rental Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'dumpster_rental_page_residential_dumpster_rental_section_image', __('Image', 'adm') ),
//             Field::make( 'text', 'dumpster_rental_page_residential_dumpster_rental_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'text', 'dumpster_rental_page_residential_dumpster_rental_section_subheading', __('Subheading', 'adm') ),
// 			Field::make( 'complex', 'dumpster_rental_page_residential_dumpster_rental_section_can_be_used_for', __('Can Be Used For', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->add_fields(
// 					array(
// 						Field::make( 'image', 'icon', __('Icon', 'adm') ),
// 						Field::make( 'text', 'label', __('Label', 'adm') )
// 					)
// 					),
// 			Field::make( 'association', 'dumpster_rental_page_residential_dumpster_rental_section_linked_page', __('Linked Page', 'adm') )
// 				->set_max(1)
// 				->set_types(
// 					array(
// 						array(
// 							'type'      => 'post',
// 							'post_type' => 'page'
// 						)
// 					)
// 				)
// 		)
// 	)
	
// 	->add_tab(
// 		__('Commercial Dumpster Rental Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'dumpster_rental_page_commercial_dumpster_rental_section_image', __('Image', 'adm') ),
//             Field::make( 'text', 'dumpster_rental_page_commercial_dumpster_rental_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'text', 'dumpster_rental_page_commercial_dumpster_rental_section_subheading', __('Subheading', 'adm') ),
// 			Field::make( 'complex', 'dumpster_rental_page_commercial_dumpster_rental_section_can_be_used_for', __('Can Be Used For', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->add_fields(
// 					array(
// 						Field::make( 'image', 'icon', __('Icon', 'adm') ),
// 						Field::make( 'text', 'label', __('Label', 'adm') )
// 					)
// 					),
// 			Field::make( 'association', 'dumpster_rental_page_commercial_dumpster_rental_section_linked_page', __('Linked Page', 'adm') )
// 				->set_max(1)
// 				->set_types(
// 					array(
// 						array(
// 							'type'      => 'post',
// 							'post_type' => 'page'
// 						)
// 					)
// 				)
// 		)
// 	)
	
// 	->add_tab(
// 		__('Construction Dumpster Rental Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'dumpster_rental_page_construction_dumpster_rental_section_image', __('Image', 'adm') ),
//             Field::make( 'text', 'dumpster_rental_page_construction_dumpster_rental_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'text', 'dumpster_rental_page_construction_dumpster_rental_section_subheading', __('Subheading', 'adm') ),
// 			Field::make( 'complex', 'dumpster_rental_page_construction_dumpster_rental_section_can_be_used_for', __('Can Be Used For', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->add_fields(
// 					array(
// 						Field::make( 'image', 'icon', __('Icon', 'adm') ),
// 						Field::make( 'text', 'label', __('Label', 'adm') )
// 					)
// 					),
// 			Field::make( 'association', 'dumpster_rental_page_construction_dumpster_rental_section_linked_page', __('Linked Page', 'adm') )
// 				->set_max(1)
// 				->set_types(
// 					array(
// 						array(
// 							'type'      => 'post',
// 							'post_type' => 'page'
// 						)
// 					)
// 				)
// 		)
// 	)
	
// 	->add_tab(
// 		__('What We Can\'t Take Section', 'adm'),
// 		array(
// 			Field::make( 'text', 'dumpster_rental_page_what_we_cant_take_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'complex', 'dumpster_rental_page_what_we_cant_take_section_items', __('Items', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->add_fields(
// 					array(
// 						Field::make( 'image', 'image', __('Image', 'adm') ),
// 						Field::make( 'text', 'label', __('Label', 'adm') )
// 					)
// 				),
// 			Field::make( 'textarea', 'dumpster_rental_page_what_we_cant_take_section_did_you_know', __('Did You Know?', 'adm') )
// 		)
// 	)
	
// 	->add_tab(
// 		__('Service Areas Section', 'adm'),
// 		array(
// 			Field::make( 'text', 'dumpster_rental_page_service_areas_section_heading', __('Heading', 'adm') )
// 		)
// 	)
	
// 	->add_tab(
// 		__('Call to Action Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'dumpster_rental_page_c2a_section_image', __('Image', 'adm') ),
// 			Field::make( 'text', 'dumpster_rental_page_c2a_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'text', 'dumpster_rental_page_c2a_section_subheading', __('Subheading', 'adm') )
// 		)
// 	);
	
// Container::make( 'post_meta', __('Dumpster Rental Single Page Settings', 'adm') )
// 	->show_on_post_type('page')
// 	->show_on_template('page-dumpster-rental-single.php')
// 	->add_tab(
// 		__('Intro Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'dumpster_rental_single_page_intro_section_bg_image_desktop', __('Background Image (Desktop)', 'adm') ),
// 			Field::make( 'image', 'dumpster_rental_single_page_intro_section_bg_image_tablet', __('Background Image (Tablet)', 'adm') ),
//             Field::make( 'image', 'dumpster_rental_single_page_intro_section_bg_image_mobile', __('Background Image (Mobile)', 'adm') ),
//             Field::make( 'textarea', 'dumpster_rental_single_page_intro_section_heading', __('Heading', 'adm') )
// 		)
// 	)
	
// 	->add_tab(
// 		__('Available Rental Options Section', 'adm'),
// 		array(
// 			Field::make( 'textarea', 'dumpster_rental_single_page_available_rental_options_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'text', 'dumpster_rental_single_page_available_rental_options_section_subheading', __('Subheading', 'adm') ),
// 			Field::make( 'complex', 'dumpster_rental_single_page_available_rental_options_section_dumpsters', __('Dumpsters', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->add_fields(
// 					array(
// 						Field::make( 'image', 'image', __('Image', 'adm') ),
// 						Field::make( 'text', 'label', __('Label', 'adm') ),
// 						Field::make( 'textarea', 'description', __('Description', 'adm') )
// 					)
// 				)
// 		)
// 	)
	
// 	->add_tab(
// 		__('Call to Action (Reserve Online) Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'dumpster_rental_single_page_c2a_reserve_online_section_image', __('Image', 'adm') ),
// 			Field::make( 'complex', 'dumpster_rental_single_page_c2a_reserve_online_section_contents', __('Contents', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->add_fields(
// 					array(
// 						Field::make( 'text', 'heading', __('Heading', 'adm') ),
// 						Field::make( 'textarea', 'content', __('Content', 'adm') )
// 					)
// 				)
// 		)
// 	)
	
// 	->add_tab(
// 		__('Call to Action (Call Us) Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'dumpster_rental_single_page_c2a_call_us_section_image', __('Image', 'adm') ),
// 			Field::make( 'text', 'dumpster_rental_single_page_c2a_call_us_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'text', 'dumpster_rental_single_page_c2a_call_us_section_subheading', __('Subheading', 'adm') )
// 		)
// 	)
	
// 	->add_tab(
// 		__('Why Choose Us Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'dumpster_rental_single_page_why_choose_us_section_image', __('Image', 'adm') ),
// 			Field::make( 'textarea', 'dumpster_rental_single_page_why_choose_us_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'complex', 'dumpster_rental_single_page_why_choose_us_section_items', __('Items', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->add_fields(
// 					array(
// 						Field::make( 'image', 'icon', __('Icon', 'adm') ),
// 						Field::make( 'text', 'label', __('Label', 'adm') ),
// 						Field::make( 'textarea', 'description', __('Description', 'adm') )
// 					)
// 				)
// 		)
// 	);

// Container::make( 'post_meta', __('Terms and Conditions Page Settings', 'adm') )
// 	->show_on_post_type('page')
// 	->show_on_template('page-terms-and-conditions.php')
// 	->add_tab(
// 		__('Headings', 'adm'),
// 		array(
// 			Field::make( 'text', 'terms_and_conditions_page_heading', __('Heading', 'adm') ),
// 			Field::make( 'text', 'terms_and_conditions_page_subheading', __('Subheading', 'adm') )
// 		)
// 	)
	
// 	->add_tab(
// 		__('Terms and Conditions', 'adm'),
// 		array(
// 			Field::make( 'rich_text', 'terms_and_conditions_page_terms_and_conditions', __('Terms and Conditions', 'adm') )
// 		)
// 	)
	
// 	->add_tab(
// 		__('Rate Sheet', 'adm'),
// 		array(
// 			Field::make( 'rich_text', 'terms_and_conditions_page_rate_sheet', __('Rate Sheet', 'adm') )
// 		)
// 	);

// Container::make( 'post_meta', __('Service Areas Page Settings', 'adm') )
// 	->show_on_post_type('page')
// 	->show_on_template('page-service-areas.php')
// 	->add_tab(
// 		__('Intro Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'service_areas_page_intro_section_bg_image_desktop', __('Background Image (Desktop)', 'adm') ),
//             Field::make( 'image', 'service_areas_page_intro_section_bg_image_mobile', __('Background Image (Mobile)', 'adm') ),
// 			Field::make( 'text', 'service_areas_page_intro_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'text', 'service_areas_page_intro_section_subheading', __('Subheading', 'adm') )
// 		)
// 	);

// Container::make( 'post_meta', __('Join The Team Page Settings', 'adm') )
//     ->show_on_post_type('page')
// 	->show_on_template('page-join-the-team.php')
// 	->add_tab(
// 		__('Intro Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'join_the_team_page_intro_section_bg_image_desktop', __('Background Image (Desktop)', 'adm') ),
// 			Field::make( 'image', 'join_the_team_page_intro_section_bg_image_mobile', __('Background Image (Mobile)', 'adm') ),
//             Field::make( 'textarea', 'join_the_team_page_intro_section_heading', __('Heading', 'adm') ),
//             Field::make( 'image', 'join_the_team_page_intro_section_bg_video_poster', __('Background Video Poster', 'adm') ),
//             Field::make( 'file', 'join_the_team_page_intro_section_bg_video', __('Background Video', 'adm') )
//                 ->set_type('video'),
//             Field::make( 'text', 'join_the_team_page_intro_section_modal_youtube_link', __('Modal YouTube Link', 'adm') )
// 		)
// 	)
	
// 	->add_tab(
// 		__('Team Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'join_the_team_page_team_section_image', __('Image', 'adm') ),
//             Field::make( 'textarea', 'join_the_team_page_team_section_heading', __('Heading', 'adm') )
// 		)
// 	)
	
// 	->add_tab(
// 		__('Our Values Section', 'adm'),
// 		array(
// 			Field::make( 'text', 'join_the_team_page_our_values_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'complex', 'join_the_team_page_our_values_section_values', __('Values', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->add_fields(
// 					array(
// 						Field::make( 'image', 'icon', __('Icon', 'adm') ),
// 						Field::make( 'text', 'label', __('Label', 'adm') ),
// 						Field::make( 'textarea', 'description', __('Description', 'adm') )
// 					)
// 				)
// 		)
// 	)
	
// 	->add_tab(
// 		__('Who We\'re Looking For Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'join_the_team_page_who_were_looking_for_section_image', __('Image', 'adm') ),
// 			Field::make( 'text', 'join_the_team_page_who_were_looking_for_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'rich_text', 'join_the_team_page_who_were_looking_for_section_content', __('Content', 'adm') ),
// 			Field::make( 'textarea', 'join_the_team_page_employment_application_popup_content', __('Employment Application Content', 'adm') ),
// 			Field::make( 'text', 'join_the_team_page_employment_application_popup_form_id', __('Employment Application Form ID', 'adm') ),
// 		)
// 	);
	
// Container::make( 'post_meta', __('Online Order Page Settings', 'adm') )
//     ->show_on_post_type('page')
// 	->show_on_template('page-online-order.php')
// 	->add_tab(
// 		__('Intro Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'online_order_page_intro_section_bg_image_desktop', __('Background Image (Desktop)', 'adm') ),
// 			Field::make( 'image', 'online_order_page_intro_section_bg_image_tablet', __('Background Image (Tablet)', 'adm') ),
// 			Field::make( 'image', 'online_order_page_intro_section_bg_image_mobile', __('Background Image (Mobile)', 'adm') ),
// 			Field::make( 'text', 'online_order_page_intro_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'text', 'online_order_page_intro_section_subheading', __('Subheading', 'adm') )
// 		)
// 	)
	
// 	->add_tab(
// 		__('Order Form Section', 'adm'),
// 		array(
// 			Field::make( 'textarea', 'online_order_page_order_form_section_residential_note', __('Residential Note', 'adm') ),
// 			Field::make( 'textarea', 'online_order_page_order_form_section_commercial_note', __('Commercial Note', 'adm') )
// 		)
// 	)
	
// 	->add_tab(
// 		__('Call to Action Section', 'adm'),
// 		array(
// 			Field::make( 'image', 'online_order_page_c2a_section_image', __('Image', 'adm') ),
// 			Field::make( 'text', 'online_order_page_c2a_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'rich_text', 'online_order_page_c2a_section_content', __('Content', 'adm') )
// 		)
// 	);

// Container::make( 'post_meta', __('Blog Page Settings', 'adm') )
//     ->show_on_post_type('page')
//     ->where( 'post_id', '=', get_option('page_for_posts') )
// 	->add_tab(
// 		__('Intro Section', 'adm'),
// 		array(
//             Field::make( 'image', 'blog_page_intro_section_bg_image_desktop', __('Background Image (Desktop)', 'adm') ),
//             Field::make( 'image', 'blog_page_intro_section_bg_image_mobile', __('Background Image (Mobile)', 'adm') ),
//             Field::make( 'text', 'blog_page_intro_section_heading', __('Heading', 'adm') ),
//             Field::make( 'text', 'blog_page_intro_section_subheading', __('Subheading', 'adm') )
// 		)
// 	);
	
// Container::make( 'post_meta', __('Order Settings', 'adm') )
//     ->show_on_post_type('_order')
// 	->add_fields(
// 		array(
// 			Field::make( 'text', 'order_first_name', __('First Name', 'adm') ),
// 			Field::make( 'text', 'order_last_name', __('Last Name', 'adm') ),
// 			Field::make( 'text', 'order_email', __('Email', 'adm') ),
// 			Field::make( 'text', 'order_phone', __('Phone', 'adm') ),
// 			Field::make( 'text', 'order_company_name', __('Company Name', 'adm') ),
// 			Field::make( 'text', 'order_street_address', __('Street Address', 'adm') ),
// 			Field::make( 'text', 'order_city', __('City', 'adm') ),
// 			Field::make( 'text', 'order_state', __('State', 'adm') ),
// 			Field::make( 'text', 'order_zip_code', __('ZIP Code', 'adm') ),
// 			Field::make( 'text', 'order_drop_off_date', __('Drop Off Date', 'adm') ),
// 			Field::make( 'text', 'order_pick_up_date', __('Pick Up Date', 'adm') ),
// 			Field::make( 'text', 'order_placement', __('Placement', 'adm') ),
// 			Field::make( 'select', 'order_waste_type', __('Waste Type', 'adm') )
// 				->add_options(
// 					array_combine(
// 						get_waste_types(),
// 						get_waste_types()
// 					)
// 				),
// 			Field::make( 'select', 'order_dumpster_size', __('Dumpster Size', 'adm') )
// 				->add_options(
// 					array_combine(
// 						get_dumpster_sizes(),
// 						get_dumpster_sizes()
// 					)
// 				),
// 			Field::make( 'text', 'order_amount', __('Amount', 'adm') )
// 		)
// 	);