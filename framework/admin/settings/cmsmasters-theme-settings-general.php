<?php 
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version 	1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function magazilla_options_general_tabs() {
	$cmsmasters_option = magazilla_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'magazilla');
	
	if ($cmsmasters_option['magazilla' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'magazilla');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'magazilla');
	}
	
	$tabs['header'] = esc_attr__('Header', 'magazilla');
	$tabs['content'] = esc_attr__('Content', 'magazilla');
	$tabs['footer'] = esc_attr__('Footer', 'magazilla');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function magazilla_options_general_sections() {
	$tab = magazilla_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'magazilla');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'magazilla');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'magazilla');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'magazilla');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'magazilla');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'magazilla');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function magazilla_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = magazilla_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = magazilla_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'magazilla' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'magazilla') . '|liquid', 
				esc_html__('Boxed', 'magazilla') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'magazilla' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'magazilla') . '|image', 
				esc_html__('Text', 'magazilla') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'magazilla' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'magazilla'), 
			'desc' => esc_html__('Choose your website logo image.', 'magazilla'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['magazilla' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'magazilla' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'magazilla'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'magazilla'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['magazilla' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'magazilla' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'magazilla'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'magazilla' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'magazilla'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'magazilla' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'magazilla'), 
			'desc' => esc_html__('enable', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'magazilla' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'magazilla'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['magazilla' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'magazilla' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'magazilla'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['magazilla' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'magazilla' . '_bg_col', 
			'title' => esc_html__('Background Color', 'magazilla'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['magazilla' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'magazilla' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'magazilla' . '_bg_img', 
			'title' => esc_html__('Background Image', 'magazilla'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'magazilla'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['magazilla' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'magazilla' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'magazilla') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'magazilla') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'magazilla') . '|repeat-y', 
				esc_html__('Repeat', 'magazilla') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'magazilla' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'magazilla'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['magazilla' . '_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'magazilla') . '|top left', 
				esc_html__('Top Center', 'magazilla') . '|top center', 
				esc_html__('Top Right', 'magazilla') . '|top right', 
				esc_html__('Center Left', 'magazilla') . '|center left', 
				esc_html__('Center Center', 'magazilla') . '|center center', 
				esc_html__('Center Right', 'magazilla') . '|center right', 
				esc_html__('Bottom Left', 'magazilla') . '|bottom left', 
				esc_html__('Bottom Center', 'magazilla') . '|bottom center', 
				esc_html__('Bottom Right', 'magazilla') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'magazilla' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'magazilla') . '|scroll', 
				esc_html__('Fixed', 'magazilla') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'magazilla' . '_bg_size', 
			'title' => esc_html__('Background Size', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'magazilla') . '|auto', 
				esc_html__('Cover', 'magazilla') . '|cover', 
				esc_html__('Contain', 'magazilla') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'magazilla' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'magazilla'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => magazilla_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'magazilla'), 
			'desc' => esc_html__('enable', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'magazilla'), 
			'desc' => esc_html__('enable', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'magazilla'), 
			'desc' => esc_html__('pixels', 'magazilla'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['magazilla' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'magazilla'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'magazilla') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['magazilla' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'magazilla') . '|none', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'magazilla') . '|nav', 
				esc_html__('Top Line Navigation', 'magazilla') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'magazilla') . '|default', 
				esc_html__('Compact Style Left Navigation', 'magazilla') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'magazilla') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'magazilla') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'magazilla'), 
			'desc' => esc_html__('pixels', 'magazilla'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['magazilla' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'magazilla'), 
			'desc' => esc_html__('pixels', 'magazilla'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['magazilla' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_header_search', 
			'title' => esc_html__('Header Search', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'magazilla') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'magazilla') . '|social', 
				esc_html__('Header Custom HTML', 'magazilla') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'magazilla' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'magazilla'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'magazilla') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['magazilla' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'magazilla'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'magazilla'),  
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['magazilla' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'magazilla'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'magazilla'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['magazilla' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'magazilla'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'magazilla'),  
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['magazilla' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'magazilla'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'magazilla'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['magazilla' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'magazilla') . '|left', 
				esc_html__('Right', 'magazilla') . '|right', 
				esc_html__('Center', 'magazilla') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'magazilla'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['magazilla' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'magazilla'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'magazilla'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['magazilla' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'magazilla') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'magazilla') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'magazilla') . '|repeat-y', 
				esc_html__('Repeat', 'magazilla') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'magazilla') . '|scroll', 
				esc_html__('Fixed', 'magazilla') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'magazilla') . '|auto', 
				esc_html__('Cover', 'magazilla') . '|cover', 
				esc_html__('Contain', 'magazilla') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'magazilla'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['magazilla' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'magazilla'), 
			'desc' => esc_html__('pixels', 'magazilla'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['magazilla' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'magazilla'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['magazilla' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'magazilla' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'magazilla'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['magazilla' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'magazilla' . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'magazilla'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['magazilla' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'magazilla' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'magazilla') . '|default', 
				esc_html__('Small', 'magazilla') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'magazilla' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'magazilla') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'magazilla') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'magazilla') . '|social', 
				esc_html__('Custom HTML', 'magazilla') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'magazilla' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'magazilla' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'magazilla'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'magazilla'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['magazilla' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'magazilla' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'magazilla'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'magazilla'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['magazilla' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'magazilla' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'magazilla' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'magazilla' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'magazilla'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'magazilla') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['magazilla' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'magazilla' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'magazilla'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);
}

