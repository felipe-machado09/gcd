<?php 
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Header Middle Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = magazilla_get_global_options();


echo '<div class="header_mid" data-height="' . esc_attr($cmsmasters_option['magazilla' . '_header_mid_height']) . '">' . 
	'<div class="header_mid_outer">' . 
		'<div class="header_mid_inner">' . 
			'<div class="header_mid_inner_cont">';
			//echo '_header_styles: ' . $cmsmasters_option['magazilla' . '_header_styles'];

			if($cmsmasters_option['magazilla' . '_header_mid_weather'] && $cmsmasters_option['magazilla' . '_header_styles'] == 'c_nav'){
				magazilla_weather();
			}

			do_action('cmsmasters_before_header_mid', $cmsmasters_option);
			
			// HEADER STYLES = Compact Style Center Navigation
			if ($cmsmasters_option['magazilla' . '_header_styles'] == 'c_nav') {
				if (
					$cmsmasters_option['magazilla' . '_header_custom_html'] && 
					$cmsmasters_option['magazilla' . '_header_add_cont_cust_html'] !== ''
				) {
					echo '<div class="slogan_wrap">' . 
						'<div class="slogan_wrap_inner">' . 
							'<div class="slogan_wrap_text">' . 
								do_shortcode(stripslashes($cmsmasters_option['magazilla' . '_header_add_cont_cust_html'])) . 
							'</div>' . 
						'</div>' . 
					'</div>';
				}

				if ( $cmsmasters_option['magazilla' . '_header_social'] && isset($cmsmasters_option['magazilla' . '_social_icons']) ) {
					magazilla_social_icons();
				}
			}
			
			do_action('cmsmasters_before_logo', $cmsmasters_option);
			echo '<div class="logo_wrap">';
				magazilla_logo();
			echo '</div>';
			do_action('cmsmasters_after_logo', $cmsmasters_option);
			
			
			if ($cmsmasters_option['magazilla' . '_header_styles'] == 'default') {
				echo '<div class="resp_mid_nav_wrap">' . 
					'<div class="resp_mid_nav_outer">' . 
						'<a class="responsive_nav resp_mid_nav cmsmasters_theme_icon_resp_nav" href="' . esc_js("javascript:void(0)") . '"></a>' . 
					'</div>' . 
				'</div>';
			}
			
			
			if ( $cmsmasters_option['magazilla' . '_header_search'] && $cmsmasters_option['magazilla' . '_header_styles'] == 'default' ) {
				echo '<div class="mid_search_but_wrap">' . 
					//"string: ". $cmsmasters_option['magazilla' . '_header_add_cont'] .
					'<a href="' . esc_js("javascript:void(0)") . '" class="mid_search_but cmsmasters_header_search_but cmsmasters_theme_icon_search"></a>' . 
				'</div>';
			}
			
			// HEADER STYLES != Compact Style Center Navigation AND Default
			if ( $cmsmasters_option['magazilla' . '_header_styles'] != 'default' && $cmsmasters_option['magazilla' . '_header_styles'] != 'c_nav' ) { 
				if ( $cmsmasters_option['magazilla' . '_header_add_cont'] == 'cust_html' && $cmsmasters_option['magazilla' . '_header_add_cont_cust_html'] !== '' ) {
					echo '<div class="slogan_wrap">' . 
						'<div class="slogan_wrap_inner">' . 
							'<div class="slogan_wrap_text">' . 
								do_shortcode(stripslashes($cmsmasters_option['magazilla' . '_header_add_cont_cust_html'])) . 
							'</div>' . 
						'</div>' . 
					'</div>';
				} elseif ( $cmsmasters_option['magazilla' . '_header_add_cont'] == 'social' && isset($cmsmasters_option['magazilla' . '_social_icons'])	) {
					magazilla_social_icons();
				}
			}
			
			if($cmsmasters_option['magazilla' . '_header_mid_weather'] && $cmsmasters_option['magazilla' . '_header_styles'] != 'c_nav'){
				magazilla_weather();
			}
			
			if ($cmsmasters_option['magazilla' . '_header_styles'] == 'default') {
				if ( $cmsmasters_option['magazilla' . '_header_add_cont'] == 'cust_html' && $cmsmasters_option['magazilla' . '_header_add_cont_cust_html'] !== '' ) {
					echo '<div class="slogan_wrap">' . 
						'<div class="slogan_wrap_inner">' . 
							'<div class="slogan_wrap_text">' . 
								do_shortcode(stripslashes($cmsmasters_option['magazilla' . '_header_add_cont_cust_html'])) . 
							'</div>' . 
						'</div>' . 
					'</div>';
				}
				magazilla_social_icons();
				echo '<!--  Start Navigation  -->' . 
				'<div class="mid_nav_wrap">' . 
					'<nav>';
						
						$nav_args = array( 
							'theme_location' => 	'primary', 
							'menu_id' => 			'navigation', 
							'menu_class' => 		'mid_nav navigation', 
							'link_before' => 		'<span class="nav_item_wrap">', 
							'link_after' => 		'</span>', 
							'fallback_cb' => 		false
						);
						
						
						if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
							$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
						}
						
						
						wp_nav_menu($nav_args);
						
					echo '</nav>' . 
				'</div>' . 
				'<!--  Finish Navigation  -->';
				

			}
			
			do_action('cmsmasters_after_header_mid', $cmsmasters_option);
		echo '</div>' . 
		'</div>' . 
	'</div>' . 
'</div>';

