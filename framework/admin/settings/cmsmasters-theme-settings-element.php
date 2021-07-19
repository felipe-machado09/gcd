<?php 
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function magazilla_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'magazilla');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'magazilla');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'magazilla');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'magazilla');
	$tabs['error'] = esc_attr__('404', 'magazilla');
	$tabs['code'] = esc_attr__('Custom Codes', 'magazilla');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'magazilla');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function magazilla_options_element_sections() {
	$tab = magazilla_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'magazilla');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'magazilla');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'magazilla');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'magazilla');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'magazilla');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'magazilla');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'magazilla');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function magazilla_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = magazilla_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = magazilla_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'magazilla' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'magazilla'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['magazilla' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'magazilla' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'magazilla'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['magazilla' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'magazilla'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'magazilla') . '|dark', 
				esc_html__('Light', 'magazilla') . '|light', 
				esc_html__('Mac', 'magazilla') . '|mac', 
				esc_html__('Metro Black', 'magazilla') . '|metro-black', 
				esc_html__('Metro White', 'magazilla') . '|metro-white', 
				esc_html__('Parade', 'magazilla') . '|parade', 
				esc_html__('Smooth', 'magazilla') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'magazilla'), 
			'desc' => esc_html__('Sets path for switching windows', 'magazilla'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'magazilla') . '|vertical', 
				esc_html__('Horizontal', 'magazilla') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'magazilla'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'magazilla'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'magazilla'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'magazilla'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'magazilla'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'magazilla'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'magazilla'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'magazilla'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'magazilla'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'magazilla'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'magazilla'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'magazilla'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'magazilla') . '|center', 
				esc_html__('Fit', 'magazilla') . '|fit', 
				esc_html__('Fill', 'magazilla') . '|fill', 
				esc_html__('Stretch', 'magazilla') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'magazilla'), 
			'desc' => esc_html__('Sets buttons be available or not', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'magazilla'), 
			'desc' => esc_html__('Enable the arrow buttons', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'magazilla'), 
			'desc' => esc_html__('Sets the fullscreen button', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'magazilla'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'magazilla'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'magazilla'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'magazilla'), 
			'desc' => esc_html__('Sets the swipe navigation', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'magazilla' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'magazilla'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'magazilla' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'magazilla' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'magazilla' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'magazilla' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'magazilla' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'magazilla' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'magazilla' . '_error_color', 
			'title' => esc_html__('Text Color', 'magazilla'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['magazilla' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'magazilla' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'magazilla'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['magazilla' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'magazilla' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'magazilla' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'magazilla'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'magazilla'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['magazilla' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'magazilla' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'magazilla') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'magazilla') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'magazilla') . '|repeat-y', 
				esc_html__('Repeat', 'magazilla') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'magazilla' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'magazilla'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['magazilla' . '_error_bg_pos'], 
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
			'section' => 'error_section', 
			'id' => 'magazilla' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'magazilla') . '|scroll', 
				esc_html__('Fixed', 'magazilla') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'magazilla' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['magazilla' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'magazilla') . '|auto', 
				esc_html__('Cover', 'magazilla') . '|cover', 
				esc_html__('Contain', 'magazilla') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'magazilla' . '_error_search', 
			'title' => esc_html__('Search Line', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'magazilla' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'magazilla' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'magazilla'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'magazilla' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'magazilla'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['magazilla' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'magazilla' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'magazilla'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['magazilla' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'magazilla' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'magazilla'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'magazilla' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'magazilla'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'magazilla' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'magazilla'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_api_secret'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'magazilla' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'magazilla'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_access_token'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'magazilla' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'magazilla'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_access_token_secret'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'magazilla' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'magazilla'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'magazilla' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'magazilla'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

