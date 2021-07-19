<?php 
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */


/* General Settings */
function magazilla_theme_options_general_fields($options, $tab) {	
	$options_new = array();
	$defaults = magazilla_settings_general_defaults();

	if ($tab == 'header') {
		foreach ($options as $option) {
			if ($option['id'] == 'magazilla' . '_header_add_cont') {
				$options_new[] = array( 
					'section' => 'header_section', 
					'id' => 'magazilla' . '_header_social', 
					'title' => esc_html__('Header Social Icons', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => 0 
				);
				
				$options_new[] = $option;
			} else if ($option['id'] == 'magazilla' . '_header_add_cont_cust_html') {
				$options_new[] = array( 
					'section' => 'header_section', 
					'id' => 'magazilla' . '_header_custom_html', 
					'title' => esc_html__('Header Custom HTML', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => 0 
				);
				
				
				$options_new[] = $option;
			} elseif ($option['id'] == 'magazilla' . '_header_styles') {
				$options_new[] = array( 
					'section' => 'header_section', 
					'id' => 'magazilla' . '_header_mid_weather', 
					'title' => esc_html__('Header Weather', 'magazilla'), 
					'desc' => esc_html__('show weather in Header', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_header_mid_weather'], 
					'class' => '' 
				);

				$options_new[] = $option;
			} elseif ($option['id'] == 'magazilla' . '_header_top_height') {
				$options_new[] = array( 
					'section' => 'header_section', 
					'id' => 'magazilla' . '_header_top_weather', 
					'title' => esc_html__('Top Weather', 'magazilla'), 
					'desc' => esc_html__('show weather in Top Line', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_header_top_weather'], 
					'class' => '' 
				);

				$options_new[] = array( 
					'section' => 'header_section', 
					'id' => 'magazilla' . '_header_top_line_ticker_posts', 
					'title' => esc_html__('Top News Ticker', 'magazilla'), 
					'desc' => esc_html__('show news ticker in Top Line', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_header_top_line_ticker_posts'], 
					'class' => '' 
				);

				$options_new[] = array( 
					'section' => 'header_section', 
					'id' => 'magazilla' . '_header_top_line_ticker_posts_title', 
					'title' => esc_html__('Top News Ticker Title', 'magazilla'), 
					'desc' => '', 
					'type' => 'text', 
					'std' => $defaults[$tab]['magazilla' . '_header_top_line_ticker_posts_title'], 
					'class' => '' 
				);

				$options_new[] = $option;
			} else {
				$options_new[] = $option;
			}
		}
	} else {
		$options_new = $options;
	}
	
	
	return $options_new;
}

add_filter('cmsmasters_options_general_fields_filter', 'magazilla_theme_options_general_fields', 10, 2);



/* Single Settings */
function magazilla_theme_options_single_fields($options, $tab) {
	$options_new = array();
	$defaults = magazilla_settings_single_defaults();

	if ($tab == 'post') {
		foreach ($options as $option) {
			if ($option['id'] == 'magazilla' . '_blog_post_nav_box') {
				$options_new[] = array( 
					'section' => 'post_section', 
					'id' => 'magazilla' . '_blog_post_view', 
					'title' => esc_html__('Post Views', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => 1 
				);
				
				$options_new[] = $option;
			} elseif ($option['id'] == 'magazilla' . '_blog_post_share_box') {
				$options_new[] = array( 
					'section' => 'post_section', 
					'id' => 'magazilla' . '_blog_post_share_box', 
					'title' => esc_html__('Sharing Box', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_blog_post_share_box'] 
				);

				$options_new[] = array( 
					'section' => 'post_section', 
					'id' => 'magazilla' . '_blog_post_share_box_facebook', 
					'title' => esc_html__('Sharing Facebook', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_blog_post_share_box_facebook'] 
				);
				
				$options_new[] = array( 
					'section' => 'post_section', 
					'id' => 'magazilla' . '_blog_post_share_box_twitter', 
					'title' => esc_html__('Sharing Twitter', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_blog_post_share_box_twitter'] 
				);
				
				$options_new[] = array( 
					'section' => 'post_section', 
					'id' => 'magazilla' . '_blog_post_share_box_linkedin', 
					'title' => esc_html__('Sharing Linkedin', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_blog_post_share_box_linkedin'] 
				);
				
				$options_new[] = array( 
					'section' => 'post_section', 
					'id' => 'magazilla' . '_blog_post_share_box_pinterest', 
					'title' => esc_html__('Sharing Pinterest', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_blog_post_share_box_pinterest'] 
				);
				
				$options_new[] = array( 
					'section' => 'post_section', 
					'id' => 'magazilla' . '_blog_post_share_box_gplus', 
					'title' => esc_html__('Sharing Google +', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_blog_post_share_box_gplus'] 
				);
				
				$options_new[] = array( 
					'section' => 'post_section', 
					'id' => 'magazilla' . '_blog_post_share_box_reddit', 
					'title' => esc_html__('Sharing Reddit', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_blog_post_share_box_reddit'] 
				);
				
				$options_new[] = array( 
					'section' => 'post_section', 
					'id' => 'magazilla' . '_blog_post_share_box_stumbleupon', 
					'title' => esc_html__('Sharing Mix', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_blog_post_share_box_stumbleupon'] 
				);

				$options_new[] = array( 
					'section' => 'post_section', 
					'id' => 'magazilla' . '_blog_post_share_box_tumblr', 
					'title' => esc_html__('Sharing Tumblr', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_blog_post_share_box_tumblr'] 
				);
			} else {
				$options_new[] = $option;
			}
		}
	} elseif($tab == "profile") {
		foreach ($options as $option) {
			if ($option['id'] == 'magazilla' . '_profile_post_share_box') {
				$options_new[] = array( 
					'section' => 'profile_section', 
					'id' => 'magazilla' . '_profile_post_share_box', 
					'title' => esc_html__('Sharing Box', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_profile_post_share_box'] 
				);

				$options_new[] = array( 
					'section' => 'profile_section', 
					'id' => 'magazilla' . '_profile_post_share_box_facebook', 
					'title' => esc_html__('Sharing Facebook', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_profile_post_share_box_facebook'] 
				);
				
				$options_new[] = array( 
					'section' => 'profile_section', 
					'id' => 'magazilla' . '_profile_post_share_box_twitter', 
					'title' => esc_html__('Sharing Twitter', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_profile_post_share_box_twitter'] 
				);
				
				$options_new[] = array( 
					'section' => 'profile_section', 
					'id' => 'magazilla' . '_profile_post_share_box_linkedin', 
					'title' => esc_html__('Sharing Linkedin', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_profile_post_share_box_linkedin'] 
				);
				
				$options_new[] = array( 
					'section' => 'profile_section', 
					'id' => 'magazilla' . '_profile_post_share_box_pinterest', 
					'title' => esc_html__('Sharing Pinterest', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_profile_post_share_box_pinterest'] 
				);
				
				$options_new[] = array( 
					'section' => 'profile_section', 
					'id' => 'magazilla' . '_profile_post_share_box_gplus', 
					'title' => esc_html__('Sharing Google +', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_profile_post_share_box_gplus'] 
				);
				
				$options_new[] = array( 
					'section' => 'profile_section', 
					'id' => 'magazilla' . '_profile_post_share_box_reddit', 
					'title' => esc_html__('Sharing Reddit', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_profile_post_share_box_reddit'] 
				);
				
				$options_new[] = array( 
					'section' => 'profile_section', 
					'id' => 'magazilla' . '_profile_post_share_box_stumbleupon', 
					'title' => esc_html__('Sharing Mix', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_profile_post_share_box_stumbleupon'] 
				);

				$options_new[] = array( 
					'section' => 'profile_section', 
					'id' => 'magazilla' . '_profile_post_share_box_tumblr', 
					'title' => esc_html__('Sharing Tumblr', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_profile_post_share_box_tumblr'] 
				);
			} else {
				$options_new[] = $option;
			}
		}
	} elseif($tab == "project") {
		foreach ($options as $option) {
			if ($option['id'] == 'magazilla' . '_portfolio_project_share_box') {
				$options_new[] = array( 
					'section' => 'project_section', 
					'id' => 'magazilla' . '_portfolio_project_share_box', 
					'title' => esc_html__('Sharing Box', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_portfolio_project_share_box'] 
				);

				$options_new[] = array( 
					'section' => 'project_section', 
					'id' => 'magazilla' . '_portfolio_project_share_box_facebook', 
					'title' => esc_html__('Sharing Facebook', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_portfolio_project_share_box_facebook'] 
				);
				
				$options_new[] = array( 
					'section' => 'project_section', 
					'id' => 'magazilla' . '_portfolio_project_share_box_twitter', 
					'title' => esc_html__('Sharing Twitter', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_portfolio_project_share_box_twitter'] 
				);
				
				$options_new[] = array( 
					'section' => 'project_section', 
					'id' => 'magazilla' . '_portfolio_project_share_box_linkedin', 
					'title' => esc_html__('Sharing Linkedin', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_portfolio_project_share_box_linkedin'] 
				);
				
				$options_new[] = array( 
					'section' => 'project_section', 
					'id' => 'magazilla' . '_portfolio_project_share_box_pinterest', 
					'title' => esc_html__('Sharing Pinterest', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_portfolio_project_share_box_pinterest'] 
				);
				
				$options_new[] = array( 
					'section' => 'project_section', 
					'id' => 'magazilla' . '_portfolio_project_share_box_gplus', 
					'title' => esc_html__('Sharing Google +', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_portfolio_project_share_box_gplus'] 
				);
				
				$options_new[] = array( 
					'section' => 'project_section', 
					'id' => 'magazilla' . '_portfolio_project_share_box_reddit', 
					'title' => esc_html__('Sharing Reddit', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_portfolio_project_share_box_reddit'] 
				);
				
				$options_new[] = array( 
					'section' => 'project_section', 
					'id' => 'magazilla' . '_portfolio_project_share_box_stumbleupon', 
					'title' => esc_html__('Sharing Mix', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_portfolio_project_share_box_stumbleupon'] 
				);

				$options_new[] = array( 
					'section' => 'project_section', 
					'id' => 'magazilla' . '_portfolio_project_share_box_tumblr', 
					'title' => esc_html__('Sharing Tumblr', 'magazilla'), 
					'desc' => esc_html__('show', 'magazilla'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['magazilla' . '_portfolio_project_share_box_tumblr'] 
				);
			} else {
				$options_new[] = $option;
			}
		}
	} else {
		$options_new = $options;
	}
	
	
	return $options_new;
}

add_filter('cmsmasters_options_single_fields_filter', 'magazilla_theme_options_single_fields', 10, 2);


