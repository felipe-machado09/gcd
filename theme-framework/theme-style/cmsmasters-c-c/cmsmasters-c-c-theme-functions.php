<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version 	1.0.2
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function magazilla_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('magazilla-composer-shortcodes-extend', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.2', true);
		
		wp_localize_script('magazilla-composer-shortcodes-extend', 'cmsmasters_theme_shortcodes', array( 
			'blog_field_layout_mode_puzzle' => 				esc_attr__('Puzzle', 'magazilla'), 
			'quotes_field_slider_type_title' => 			esc_attr__('Slider Type', 'magazilla'), 
			'quotes_field_slider_type_descr' => 			esc_attr__('Choose your quotes slider style type', 'magazilla'), 
			'quotes_field_type_choice_box' => 				esc_attr__('Boxed', 'magazilla'), 
			'quotes_field_type_choice_center' => 			esc_attr__('Centered', 'magazilla'), 
			'roll_titles_title' => 							esc_attr__('Roll Titles', 'magazilla'), 
			'roll_titles_field_sc_info_title' => 			esc_attr__('Roll Titles Text', 'magazilla'), 
			'roll_titles_field_sc_info_descr' => 			esc_attr__('Displays text from the left side shortcode', 'magazilla'), 
			'roll_titles_field_navigation_title' => 		esc_attr__('Navigation', 'magazilla'), 
			'roll_titles_field_navigation_descr' => 		esc_attr__('Display navigation buttons or not', 'magazilla'), 
			'roll_titles_field_orderby_descr' => 			esc_attr__('Order posts by one of the given parameters', 'magazilla'),  
			'roll_titles_field_postscateg_title' => 		esc_attr__('Posts Categories', 'magazilla'), 
			'roll_titles_field_postscateg_descr' => 		esc_attr__('Show blog posts associated with certain categories.', 'magazilla'), 
			'roll_titles_field_postscateg_descr_note' => 	esc_attr__("If you don't choose any post categories, all your posts will be shown", 'magazilla'), 
			'roll_titles_field_postsnumber_title' => 		esc_attr__("Posts Number per Page", 'magazilla'), 
			'roll_titles_field_postsnumber_descr_note' => 	esc_attr__("number, if empty - show all posts", 'magazilla'), 
			'roll_titles_field_pausetime_descr' => 			esc_attr__("Enter your posts slider pause time", 'magazilla'), 

			
			'heading_field_custom_check' => 				esc_attr__('Set Custom Font Size for Small Screens', 'magazilla'), 
			'heading_field_width_monitor' => 				esc_attr__('Monitor Width', 'magazilla'), 
			'heading_field_custom_font_size' => 			esc_attr__('Custom Font Size', 'magazilla'), 
			'heading_field_size_zero_note' => 				esc_attr__('number, in pixels (default value if empty or 0)', 'magazilla'), 
			'heading_field_custom_line_height' => 			esc_attr__('Custom Line Height', 'magazilla'), 
			'heading_field_custom_second_heading' => 		esc_attr__('Second Heading', 'magazilla'), 
			'heading_field_custom_second_heading_text' => 	esc_attr__('Second Heading Text', 'magazilla'), 
			'heading_field_custom_second_heading_color' => 	esc_attr__('Second Heading Color', 'magazilla'), 
			'heading_field_custom_button' => 				esc_attr__('Heading Button', 'magazilla'), 
			'heading_field_custom_button_title' =>			esc_attr__('Heading Button Label', 'magazilla'), 
			'heading_field_custom_button_title_descr' =>	esc_attr__('Enter heading button label here', 'magazilla'), 
			'heading_field_custom_button_link' =>			esc_attr__('Heading Button Link', 'magazilla'),
			'heading_field_custom_button_link_descr' =>		esc_attr__('Enter heading button link here', 'magazilla'), 
			'heading_field_divider_lenght_bottom' =>		esc_attr__('Long Bottom', 'magazilla'), 
			'choice_view' => 								esc_attr__('Views', 'magazilla'), 
			'blog_field_featured'  => 						esc_attr__('Featured Post', 'magazilla'), 
			'blog_field_featured_descr'  =>					esc_attr__('First post will be on fullwidth', 'magazilla'), 
			'blog_field_featured_descr_note'  =>			esc_attr__('Does not work with the timeline and puzzle', 'magazilla'), 
			'toggles_field_primary_color'  =>				esc_attr__('Custom Active Toggle Primary Color', 'magazilla'), 
			'toggles_field_primary_color_descr'  =>			esc_attr__('Color for text', 'magazilla'), 
			'toggles_field_secondary_color'  =>				esc_attr__('Custom Active Toggle Secondary Color', 'magazilla'), 
			'toggles_field_secondary_color_descr'  =>		esc_attr__('Color for background or border', 'magazilla'), 
			'posts_slider_controls_enable_title'   =>		esc_attr__('Controls', 'magazilla'),

			'sharing_social_dribbble' => esc_attr__('Dribbble Button', 'magazilla'),
			'sharing_social_linkedin' => esc_attr__('Linkedin Button', 'magazilla'),
			'sharing_social_reddit' => esc_attr__('Reddit Button', 'magazilla'),
			'sharing_social_stumbleupon' => esc_attr__('Mix Button', 'magazilla'),
			'sharing_social_tumblr' => esc_attr__('Tumblr Button', 'magazilla'),
			'sharing_show_text_link' => esc_attr__('Show Text Button', 'magazilla'),
			
			/* Portfolio and Project*/		
			'portfolio_title' =>								esc_attr__('Articles', 'magazilla'),			
			'portfolio_field_orderby_descr' =>					esc_attr__('Choose your articles order by parameter', 'magazilla'),			
			'portfolio_field_pj_number_title' =>				esc_attr__('Articles Number', 'magazilla'),
			'portfolio_field_pj_number_descr' =>				esc_attr__('Enter the number of articles for showing per page', 'magazilla'),
			'portfolio_field_pj_number_descr_note' =>			esc_attr__('number, if empty - show all articles', 'magazilla'),			
			'portfolio_field_categories_descr' =>				esc_attr__('Show articles associated with certain categories.', 'magazilla'),
			'portfolio_field_categories_descr_note' =>			esc_attr__("If you don't choose any article categories, all your articles will be shown", 'magazilla'),			
			'portfolio_field_layout_descr' =>					esc_attr__('Choose layout type for your articles', 'magazilla'),
			'portfolio_field_layout_choice_grid' =>				esc_attr__('Articles Grid', 'magazilla'),
			'portfolio_field_layout_mode_descr' =>				esc_attr__('Choose grid layout mode for your articles', 'magazilla'),			
			'portfolio_field_col_count_descr' =>				esc_attr__('Choose number of articles per row', 'magazilla'),
			'portfolio_field_metadata_descr' =>					esc_attr__('Choose articles metadata that you want to show', 'magazilla'),
			'portfolio_field_gap_descr' =>						esc_attr__('Choose the gap between articles', 'magazilla'),
			'portfolio_field_filter_descr' =>					esc_attr__('If checked, enable articles category filter', 'magazilla'),
			'portfolio_field_sorting_descr' =>					esc_attr__('If checked, enable articles date & name sorting', 'magazilla'),
			/*Post Slider Project*/			
			'posts_slider_field_poststype_choice_project' =>	esc_attr__('Articles posts', 'magazilla'),
			'posts_slider_field_pjcateg_title' =>				esc_attr__('Articles Categories', 'magazilla'),
			'posts_slider_field_pjcateg_descr' =>				esc_attr__('Show articles associated with certain categories.', 'magazilla'),
			'posts_slider_field_pjcateg_descr_note' =>			esc_attr__("If you don't choose any article categories, all your articles will be shown", 'magazilla'),
			'posts_slider_field_pjmeta_title' =>				esc_attr__('Articles Metadata', 'magazilla'),
			'posts_slider_field_pjmeta_descr' =>				esc_attr__('Choose articles metadata you want to be shown', 'magazilla'),
		));
	}
}

add_action('admin_enqueue_scripts', 'magazilla_theme_register_c_c_scripts');


// Special Heading Shortcode Attributes Filter
add_filter('cmsmasters_custom_heading_atts_filter', 'cmsmasters_custom_heading_atts');

function cmsmasters_custom_heading_atts() {
	return array( 
		'shortcode_id' => 			'', 
		'line-inside' => 			'', 
		'type' => 					'h2', 
		'font_family' => 			'', 
		'font_size' => 				'', 
		'line_height' => 			'', 
		'font_weight' => 			'default', 
		'font_style' => 			'default', 
		'icon' => 					'', 
		'text_align' => 			'left', 
		'color' => 					'', 
		'bg_color' => 				'', 
		'link' => 					'', 
		'target' => 				'', 
		'link_color_h' => 			'', 
		'margin_top' => 			'0', 
		'margin_bottom' => 			'0', 
		'resp_vert_mar' => 			'', 
		'margin_top_laptop' => 		'', 
		'margin_bottom_laptop' => 	'', 
		'margin_top_tablet' => 		'', 
		'margin_bottom_tablet' => 	'', 
		'margin_top_mobile_h' => 	'', 
		'margin_bottom_mobile_h' => '', 
		'margin_top_mobile_v' => 	'', 
		'margin_bottom_mobile_v' => '', 
		'border_radius' => 			'', 
		'divider' => 				'', 
		'divider_type' => 			'short', 
		'divider_height' => 		'1', 
		'divider_style' => 			'solid', 
		'divider_color' => 			'', 
		'underline' => 				'', 
		'underline_height' => 		'1', 
		'underline_style' => 		'solid', 
		'underline_color' => 		'', 
		'custom_check' =>  			'', 
		'width_monitor' =>  		'767', 
		'custom_font_size' => 		'', 
		'custom_line_height' => 	'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}


// Blog Shortcode Attributes Filter
add_filter('cmsmasters_blog_atts_filter', 'cmsmasters_blog_atts');

function cmsmasters_blog_atts() {
	return array( 
		'shortcode_id' => 						'', 
		'orderby' => 							'date', 
		'order' => 								'DESC', 
		'count' => 								'12', 
		'categories' => 						'', 
		'layout' => 							'standard', 
		'layout_mode' => 						'', 
		'columns' => 							'', 
		'blog_field_featured_post' => 			'', 
		'metadata' => 							'', 
		'filter' => 							'', 
		'filter_text' => 						'', 
		'filter_cats_text' => 					'', 
		'pagination' => 						'pagination', 
		'more_text' => 							'', 
		'classes' => 							'' 
	);
}


// Toggles Attributes Filter
add_filter('cmsmasters_toggles_atts_filter', 'cmsmasters_toggles_atts');

function cmsmasters_toggles_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'mode' => 				'toggle', 
		'active' => 			'', 
		'sort' => 				'', 
		'primary_color' => 		'', 
		'secondary_color' => 	'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}


// Posts Slider Attributes Filter
add_filter('cmsmasters_posts_slider_atts_filter', 'cmsmasters_posts_slider_atts');

function cmsmasters_posts_slider_atts() {
	return array( 
		'shortcode_id' => 			'', 
		'orderby' => 				'', 
		'order' => 					'', 
		'post_type' => 				'', 
		'blog_categories' => 		'', 
		'portfolio_categories' => 	'', 
		'columns' => 				'', 
		'controls' =>				'', 
		'amount' => 				'', 
		'count' => 					'1000', 
		'pause' => 					'', 
		'speed' => 					'', 
		'blog_metadata' => 			'title,date,image,categories,comments,likes,views,more', 
		'portfolio_metadata' => 	'title,categories,likes,image,', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}


// Posts Slider Attributes Filter
add_filter('cmsmasters_social_atts_filter', 'cmsmasters_social_atts');

function cmsmasters_social_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'facebook' => 			'', 
		'twitter' => 			'', 
		'google' => 			'', 
		'pinterest' => 			'', 
		'dribbble' => 			'',
		'linkedin' =>			'',
		'reddit' => 			'',
		'stumbleupon' => 		'',
		'tumblr' => 			'',
		'show_text_link' => 	'',
		'type' => 				'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}

