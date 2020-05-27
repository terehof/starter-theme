<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Container::make( 'theme_options', __('Global Sections', 'adm') )
// 	->add_tab(
// 		__('How It Works Section', 'adm'),
// 		array(
// 			Field::make( 'text', 'how_it_works_section_heading', __('Heading', 'adm') ),
// 			Field::make( 'complex', 'how_it_works_section_steps', __('Steps', 'adm') )
// 				->set_layout('tabbed-horizontal')
// 				->set_max(3)
// 				->add_fields(
// 					array(
// 						Field::make( 'image', 'image', __('Image', 'adm') ),
// 						Field::make( 'text', 'title', __('Title', 'adm') ),
// 						Field::make( 'textarea', 'description', __('Description', 'adm') )
// 					)
// 				)
// 		)
// 	)

// 	->add_tab(
//         __('Call to Action Section', 'adm'),
//         array(
//             Field::make( 'text', 'c2a_section_reserve_online_heading', __('Reserve Online Heading', 'adm') ),
//             Field::make( 'textarea', 'c2a_section_call_us_heading', __('Call Us Heading', 'adm') )
//         )
//     );