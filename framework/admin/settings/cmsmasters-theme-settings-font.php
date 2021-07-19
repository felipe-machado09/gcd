<?php 
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function magazilla_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'magazilla');
	$tabs['link'] = esc_attr__('Links', 'magazilla');
	$tabs['nav'] = esc_attr__('Navigation', 'magazilla');
	$tabs['heading'] = esc_attr__('Heading', 'magazilla');
	$tabs['other'] = esc_attr__('Other', 'magazilla');
	$tabs['google'] = esc_attr__('Google Fonts', 'magazilla');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function magazilla_options_font_sections() {
	$tab = magazilla_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'magazilla');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'magazilla');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'magazilla');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'magazilla');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'magazilla');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'magazilla');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function magazilla_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = magazilla_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = magazilla_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'magazilla' . '_link_font', 
			'title' => esc_html__('Links Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'magazilla' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'magazilla'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['magazilla' . '_link_hover_decoration'], 
			'choices' => magazilla_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'magazilla' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'magazilla' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'magazilla' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'magazilla' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'magazilla' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'magazilla' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'magazilla' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'magazilla' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'magazilla' . '_button_font', 
			'title' => esc_html__('Button Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'magazilla' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'magazilla' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'magazilla' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'magazilla'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['magazilla' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'magazilla' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'magazilla'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['magazilla' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'magazilla' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'magazilla'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'magazilla') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'magazilla') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'magazilla') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'magazilla') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'magazilla') . '|' . 'greek', 
				esc_html__('Greek Extended', 'magazilla') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'magazilla') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'magazilla') . '|' . 'japanese', 
				esc_html__('Korean', 'magazilla') . '|' . 'korean', 
				esc_html__('Thai', 'magazilla') . '|' . 'thai', 
				esc_html__('Bengali', 'magazilla') . '|' . 'bengali', 
				esc_html__('Devanagari', 'magazilla') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'magazilla') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'magazilla') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'magazilla') . '|' . 'hebrew', 
				esc_html__('Kannada', 'magazilla') . '|' . 'kannada', 
				esc_html__('Khmer', 'magazilla') . '|' . 'khmer', 
				esc_html__('Malayalam', 'magazilla') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'magazilla') . '|' . 'myanmar', 
				esc_html__('Oriya', 'magazilla') . '|' . 'oriya', 
				esc_html__('Sinhala', 'magazilla') . '|' . 'sinhala', 
				esc_html__('Tamil', 'magazilla') . '|' . 'tamil', 
				esc_html__('Telugu', 'magazilla') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

