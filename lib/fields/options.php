<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Container::make( 'theme_options', __('Theme Options', 'adm') )
// 	->add_tab(
//         __('General', 'adm'),
//         array(
//             Field::make( 'image', 'logo', __('Logo', 'adm') )
//         )
//     )

//     ->add_tab(
//         __('Social', 'adm'),
//         array(
//             Field::make( 'text', 'instagram_link', __('Instagram Link', 'adm') ),
//             Field::make( 'text', 'facebook_link', __('Facebook Link', 'adm') ),
//             Field::make( 'text', 'linkedin_link', __('LinkedIn Link', 'adm') )
//         )
//     )

//     ->add_tab(
//         __('Reviews', 'adm'),
//         array(
//             Field::make( 'text', 'birdeye_business_id', __('BirdEye Business ID', 'adm') ),
//             Field::make( 'text', 'birdeye_api_key', __('BirdEye API Key', 'adm') )
//         )
//     )

//     ->add_tab(
//         __('Newsletter', 'adm'),
//         array(
//             Field::make( 'text', 'newsletter_heading', __('Heading', 'adm') ),
//             Field::make( 'text', 'newsletter_c2a_text', __('Call to Action Text', 'adm') ),
//             Field::make( 'text', 'newsletter_form_id', __('Form ID', 'adm') )
//         )
// 	)

// 	->add_tab(
//         __('CardKnox', 'adm'),
//         array(
//             Field::make( 'text', 'cardknox_transaction_key', __('Transaction Key', 'adm') )
//         )
// 	)
	
// 	->add_tab(
//         __('Pricing', 'adm'),
//         array(
// 			Field::make( 'complex', 'pricing', __('Pricing', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->add_fields(
// 					array(
// 						Field::make( 'text', 'county', __('County', 'adm') ),
// 						Field::make( 'complex', 'cities', __('Cities', 'adm') )
// 							->set_layout('tabbed-horizontal')
// 							->add_fields(
// 								array(
// 									Field::make( 'text', 'city', __('City', 'adm') ),
// 									Field::make( 'complex', 'zip_codes', __('ZIP Codes', 'adm') )
// 										->set_layout('tabbed-horizontal')
// 										->add_fields(
// 											array(
// 												Field::make( 'text', 'zip_code', __('ZIP Code', 'adm') )
// 											)
// 										),
// 									Field::make( 'complex', 'prices', __('Prices', 'adm') )
// 										->set_layout('tabbed-horizontal')
// 										->add_fields(
// 											array(
// 												Field::make( 'select', 'dumpster', __('Dumpster', 'adm') )
// 													->add_options(
// 														array(
// 															'6yd' => __('6 Yard', 'adm'),
// 															'15yd' => __('15 Yard', 'adm'),
// 															'20yd' => __('20 Yard', 'adm'),
// 															'30yd' => __('30 Yard', 'adm'),
// 															'40yd' => __('40 Yard', 'adm')
// 														)
// 													),
// 												Field::make( 'text', 'price', __('Price', 'adm') )
// 													->set_help_text( __('Number only, in $', 'adm') )
// 											)
// 										)
										
// 								)
// 							)
// 					)
// 			),

// 			Field::make( 'complex', 'pricing_concrete_trash', __('Concrete Trash', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->add_fields(
// 					array(
// 						Field::make( 'select', 'dumpster', __('Dumpster', 'adm') )
// 							->add_options(
// 								array(
// 									'6yd' => __('6 Yard', 'adm'),
// 									'15yd' => __('15 Yard', 'adm'),
// 									'20yd' => __('20 Yard', 'adm'),
// 									'30yd' => __('30 Yard', 'adm'),
// 									'40yd' => __('40 Yard', 'adm')
// 								)
// 							),
// 						Field::make( 'text', 'price', __('Price', 'adm') )
// 							->set_help_text( __('Number only, in $', 'adm') )
// 					)
// 				),
				
// 			Field::make( 'complex', 'pricing_tree_trash', __('Tree Trash', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->add_fields(
// 					array(
// 						Field::make( 'select', 'dumpster', __('Dumpster', 'adm') )
// 							->add_options(
// 								array(
// 									'6yd' => __('6 Yard', 'adm'),
// 									'15yd' => __('15 Yard', 'adm'),
// 									'20yd' => __('20 Yard', 'adm'),
// 									'30yd' => __('30 Yard', 'adm'),
// 									'40yd' => __('40 Yard', 'adm')
// 								)
// 							),
// 						Field::make( 'text', 'price', __('Price', 'adm') )
// 							->set_help_text( __('Number only, in $', 'adm') )
// 					)
// 				)
//         )
//     )
    
//     ->add_tab(
//         __('Contact', 'adm'),
//         array(
// 			Field::make( 'text', 'phone_number', __('Phone Number', 'adm') ),
// 			Field::make( 'text', 'email', __('Email', 'adm') ),
//             Field::make( 'textarea', 'address', __('Address', 'adm') ),
//             Field::make( 'textarea', 'working_hours', __('Working Hours', 'adm') )
//         )
//     );