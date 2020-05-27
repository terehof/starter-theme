<?php

// add_action('after_setup_theme', 'register_menus');
// function register_menus() {
// 	register_nav_menu( 'main-menu', __('Main Menu', 'adm') );
// 	register_nav_menu( 'footer-menu-1', __('Footer Menu 1', 'adm') );
// 	register_nav_menu( 'footer-menu-2', __('Footer Menu 2', 'adm') );
// }

// class Main_Menu_Desktop_Walker_Nav_Menu extends Walker_Nav_Menu {
	
// 	public function start_lvl( &$output, $depth = 0, $args = null ) {
// 		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
// 			$t = '';
// 			$n = '';
// 		} else {
// 			$t = "\t";
// 			$n = "\n";
// 		}
// 		$indent = str_repeat( $t, $depth );

// 		$classes = array( 'sub-menu', 'list', 'list_unstyled', 'header__dropdown-list' );

// 		$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
// 		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

// 		$output .= "{$n}{$indent}<ul$class_names>{$n}";
// 	}

// 	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
// 		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
// 			$t = '';
// 			$n = '';
// 		} else {
// 			$t = "\t";
// 			$n = "\n";
// 		}
// 		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

// 		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
// 		$classes[] = 'menu-item-' . $item->ID;
// 		$classes[] = 'list__item';

// 		if ( in_array('menu-item-has-children', $item->classes) ) {
// 			$classes[] = 'list__item_has-child';
// 		}

// 		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

// 		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
// 		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

// 		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
// 		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

// 		$output .= $indent . '<li' . $id . $class_names . '>';

// 		$atts           = array();
// 		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
// 		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
// 		if ( '_blank' === $item->target && empty( $item->xfn ) ) {
// 			$atts['rel'] = 'noopener noreferrer';
// 		} else {
// 			$atts['rel'] = $item->xfn;
// 		}
// 		$atts['href']         = ! empty( $item->url ) ? $item->url : '';
// 		$atts['aria-current'] = $item->current ? 'page' : '';
// 		$atts['class'] = 'link';

// 		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

// 		$attributes = '';
// 		foreach ( $atts as $attr => $value ) {
// 			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
// 				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
// 				$attributes .= ' ' . $attr . '="' . $value . '"';
// 			}
// 		}

// 		$title = apply_filters( 'the_title', $item->title, $item->ID );

// 		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

// 		$item_output  = $args->before;
// 		$item_output .= '<a' . $attributes . '>';
// 		$item_output .= $args->link_before . $title . $args->link_after;
		
// 		if ( in_array('menu-item-has-children', $item->classes) ) {
// 			$item_output .= '<span aria-hidden="true" class="link__icon">' . get_svg_inline( TEMPLATEPATH . '/images/svg/icon-next.svg' ) . '</span>';
// 		}

// 		$item_output .= '</a>';
// 		$item_output .= $args->after;

// 		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
// 	}

// }

// class Main_Menu_Mobile_Walker_Nav_Menu extends Walker_Nav_Menu {
	
// 	public function start_lvl( &$output, $depth = 0, $args = null ) {
// 		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
// 			$t = '';
// 			$n = '';
// 		} else {
// 			$t = "\t";
// 			$n = "\n";
// 		}
// 		$indent = str_repeat( $t, $depth );

// 		$classes = array( 'sub-menu', 'list', 'list_unstyled', 'header__subnav-list' );

// 		$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
// 		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

// 		$output .= "{$n}{$indent}<ul$class_names>{$n}";
// 	}

// 	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
// 		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
// 			$t = '';
// 			$n = '';
// 		} else {
// 			$t = "\t";
// 			$n = "\n";
// 		}
// 		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

// 		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
// 		$classes[] = 'menu-item-' . $item->ID;
// 		$classes[] = 'list__item';

// 		if ( in_array('menu-item-has-children', $item->classes) ) {
// 			$classes[] = 'list__item_has-child';
// 		}

// 		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

// 		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
// 		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

// 		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
// 		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

// 		$output .= $indent . '<li' . $id . $class_names . '>';

// 		$atts           = array();
// 		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
// 		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
// 		if ( '_blank' === $item->target && empty( $item->xfn ) ) {
// 			$atts['rel'] = 'noopener noreferrer';
// 		} else {
// 			$atts['rel'] = $item->xfn;
// 		}
// 		$atts['href']         = ! empty( $item->url ) ? $item->url : '';
// 		$atts['aria-current'] = $item->current ? 'page' : '';
// 		$atts['class'] = 'link';

// 		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

// 		$attributes = '';
// 		foreach ( $atts as $attr => $value ) {
// 			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
// 				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
// 				$attributes .= ' ' . $attr . '="' . $value . '"';
// 			}
// 		}

// 		$title = apply_filters( 'the_title', $item->title, $item->ID );

// 		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

// 		$item_output  = $args->before;
// 		$item_output .= '<a' . $attributes . '>';
// 		$item_output .= $args->link_before . $title . $args->link_after;
		
// 		if ( in_array('menu-item-has-children', $item->classes) ) {
// 			$item_output .= '<span aria-hidden="true" class="link__icon">' . get_svg_inline( TEMPLATEPATH . '/images/svg/icon-next.svg' ) . '</span>';
// 		}

// 		$item_output .= '</a>';
// 		$item_output .= $args->after;

// 		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
// 	}

// }

// class Footer_Menu_Walker_Nav_Menu extends Walker_Nav_Menu {

// 	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
// 		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
// 			$t = '';
// 			$n = '';
// 		} else {
// 			$t = "\t";
// 			$n = "\n";
// 		}
// 		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

// 		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
// 		$classes[] = 'menu-item-' . $item->ID;
// 		$classes[] = 'list__item';

// 		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

// 		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
// 		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

// 		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth );
// 		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

// 		$output .= $indent . '<li' . $id . $class_names . '>';

// 		$atts           = array();
// 		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
// 		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
// 		if ( '_blank' === $item->target && empty( $item->xfn ) ) {
// 			$atts['rel'] = 'noopener noreferrer';
// 		} else {
// 			$atts['rel'] = $item->xfn;
// 		}
// 		$atts['href']         = ! empty( $item->url ) ? $item->url : '';
// 		$atts['aria-current'] = $item->current ? 'page' : '';
// 		$atts['class'] = 'link';

// 		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

// 		$attributes = '';
// 		foreach ( $atts as $attr => $value ) {
// 			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
// 				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
// 				$attributes .= ' ' . $attr . '="' . $value . '"';
// 			}
// 		}

// 		$title = apply_filters( 'the_title', $item->title, $item->ID );

// 		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

// 		$item_output  = $args->before;
// 		$item_output .= '<a' . $attributes . '>';
// 		$item_output .= $args->link_before . $title . $args->link_after;
// 		$item_output .= '</a>';
// 		$item_output .= $args->after;

// 		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
// 	}

// }