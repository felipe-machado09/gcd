<?php 
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.8
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('magazilla_settings_general_defaults')) {

function magazilla_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'magazilla' . '_theme_layout' => 		'liquid', 
			'magazilla' . '_logo_type' => 			'text', 
			'magazilla' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'magazilla' . '_logo_url_retina' => 	'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'magazilla' . '_logo_title' => 			'Magazilla', 
			'magazilla' . '_logo_subtitle' => 		'', 
			'magazilla' . '_logo_custom_color' => 	1, 
			'magazilla' . '_logo_title_color' => 	'#ffffff', 
			'magazilla' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'magazilla' . '_bg_col' => 			'#ffffff', 
			'magazilla' . '_bg_img_enable' => 	0, 
			'magazilla' . '_bg_img' => 			'', 
			'magazilla' . '_bg_rep' => 			'no-repeat', 
			'magazilla' . '_bg_pos' => 			'top center', 
			'magazilla' . '_bg_att' => 			'scroll', 
			'magazilla' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'magazilla' . '_fixed_header' => 				1, 
			'magazilla' . '_header_overlaps' => 			0, 
			'magazilla' . '_header_top_line' => 			0, 
			'magazilla' . '_header_top_height' => 			'32', 
			'magazilla' . '_header_top_line_short_info' => 	'', 
			'magazilla' . '_header_top_weather' => 0, 
			'magazilla' . '_header_top_line_ticker_posts' => 0, 
			'magazilla' . '_header_top_line_ticker_posts_title' => '', 
			'magazilla' . '_header_top_line_add_cont' => 	'nav', 
			'magazilla' . '_header_styles' => 				'l_nav', 
			'magazilla' . '_header_mid_weather' => 			0, 
			'magazilla' . '_header_mid_height' => 			'126', 
			'magazilla' . '_header_bot_height' => 			'56', 
			'magazilla' . '_header_search' => 				1, 
			'magazilla' . '_header_add_cont' => 			'none', 
			'magazilla' . '_header_add_cont_cust_html' => 	'' 
		), 
		'content' => array( 
			'magazilla' . '_layout' => 					'r_sidebar', 
			'magazilla' . '_archives_layout' => 		'r_sidebar', 
			'magazilla' . '_search_layout' => 			'r_sidebar', 
			'magazilla' . '_other_layout' => 			'r_sidebar', 
			'magazilla' . '_heading_alignment' => 		'left', 
			'magazilla' . '_heading_scheme' => 			'default', 
			'magazilla' . '_heading_bg_image_enable' => 	0, 
			'magazilla' . '_heading_bg_image' => 		'', 
			'magazilla' . '_heading_bg_repeat' => 		'no-repeat', 
			'magazilla' . '_heading_bg_attachment' => 	'scroll', 
			'magazilla' . '_heading_bg_size' => 			'cover', 
			'magazilla' . '_heading_bg_color' => 		'', 
			'magazilla' . '_heading_height' => 			'95', 
			'magazilla' . '_breadcrumbs' => 				1, 
			'magazilla' . '_bottom_scheme' => 			'first', 
			'magazilla' . '_bottom_sidebar' => 			0, 
			'magazilla' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'magazilla' . '_footer_scheme' => 				'footer', 
			'magazilla' . '_footer_type' => 					'small', 
			'magazilla' . '_footer_additional_content' => 	'nav', 
			'magazilla' . '_footer_logo' => 					1, 
			'magazilla' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'magazilla' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'magazilla' . '_footer_nav' => 					1, 
			'magazilla' . '_footer_social' => 				1, 
			'magazilla' . '_footer_html' => 					'', 
			'magazilla' . '_footer_copyright' => 			'Magazilla' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'magazilla') 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Theme Settings Fonts Default Values */
if (!function_exists('magazilla_settings_font_defaults')) {

function magazilla_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'magazilla' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'magazilla' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'magazilla' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'magazilla' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'17', 
				'line_height' => 		'26', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'magazilla' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'14', 
				'line_height' => 		'26', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'magazilla' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'40', 
				'line_height' => 		'46', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'magazilla' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'28', 
				'line_height' => 		'36', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'magazilla' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'22', 
				'line_height' => 		'28', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'magazilla' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'magazilla' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'16', 
				'line_height' => 		'20', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'magazilla' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'magazilla' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'13', 
				'line_height' => 		'42', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'magazilla' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'400', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'magazilla' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal' 
			), 
			'magazilla' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Heebo:100,300,400,500,700,800,900', 
				'font_size' => 			'18', 
				'line_height' => 		'32', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal' 
			) 
		), 
		'google' => array( 
			'magazilla' . '_google_web_fonts' => array( 
				'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic|Titillium Web', 
				'Merriweather:300,300i,400,400i,700,700i,900,900i|Merriweather',
				'Merriweather+Sans:300,300i,400,400i,700,700i,800,800i|Merriweather Sans',
				'Playfair+Display:400,400i,700,700i,900,900i|Playfair Display',
				'IBM+Plex+Serif:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|IBM Plex Serif',
				'IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700|IBM Plex Sans',
				'Rubik:300,300i,400,400i,500,500i,700,700i,900,900i|Rubik',
				'Heebo:100,300,400,500,700,800,900|Heebo', 
				'Roboto:300,300italic,400,400italic,500,500italic,700,700italic|Roboto', 
				'Roboto+Condensed:400,400italic,700,700italic|Roboto Condensed', 
				'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
				'Open+Sans+Condensed:300,300italic,700|Open Sans Condensed', 
				'Droid+Sans:400,700|Droid Sans', 
				'Droid+Serif:400,400italic,700,700italic|Droid Serif', 
				'PT+Sans:400,400italic,700,700italic|PT Sans', 
				'PT+Sans+Caption:400,700|PT Sans Caption', 
				'PT+Sans+Narrow:400,700|PT Sans Narrow', 
				'PT+Serif:400,400italic,700,700italic|PT Serif', 
				'Ubuntu:400,400italic,700,700italic|Ubuntu', 
				'Ubuntu+Condensed|Ubuntu Condensed', 
				'Headland+One|Headland One', 
				'Source+Sans+Pro:300,300italic,400,400italic,700,700italic|Source Sans Pro', 
				'Lato:400,400italic,700,700italic|Lato', 
				'Cuprum:400,400italic,700,700italic|Cuprum', 
				'Oswald:300,400,700|Oswald', 
				'Yanone+Kaffeesatz:300,400,700|Yanone Kaffeesatz', 
				'Lobster|Lobster', 
				'Lobster+Two:400,400italic,700,700italic|Lobster Two', 
				'Questrial|Questrial', 
				'Raleway:300,400,500,600,700|Raleway', 
				'Dosis:300,400,500,700|Dosis', 
				'Cutive+Mono|Cutive Mono', 
				'Quicksand:300,400,700|Quicksand', 
				'Montserrat:400,700|Montserrat', 
				'Cookie|Cookie'
			) 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#565656', 
		'#e12b2b', 
		'#878787', 
		'#151515', 
		'#ffffff', 
		'#f7f7f7', 
		'#e3e3e3', 
		'#e4e4e4' 
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('magazilla_color_schemes_defaults')) {

function magazilla_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#565656', 
			'link' => 		'#e12b2b', 
			'hover' => 		'#878787', 
			'heading' => 	'#151515', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f7f7f7', 
			'border' => 	'#e3e3e3' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#ffffff', 
			'mid_link' => 		'#ffffff', 
			'mid_hover' => 		'#e12b2b', 
			'mid_bg' => 		'#bb1919', 
			'mid_bg_scroll' => 	'#bb1919', 
			'mid_border' => 	'rgba(255,255,255,0)', 
			'bot_color' => 		'#ffffff', 
			'bot_link' => 		'#ffffff', 
			'bot_hover' => 		'#f34235', 
			'bot_bg' => 		'#a91717', 
			'bot_bg_scroll' => 	'#a91717', 
			'bot_border' => 	'rgba(255,255,255,0)' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'#ffffff', 
			'title_link_current' => 	'#ffffff', 
			'title_link_subtitle' => 	'#ffffff', 
			'title_link_bg' => 			'#a91717', 
			'title_link_bg_hover' => 	'#a91717', 
			'title_link_bg_current' => 	'#a91717', 
			'title_link_border' => 		'rgba(247,247,247,0)', 
			'dropdown_text' => 			'#ffffff', 
			'dropdown_bg' => 			'#151515', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'rgba(255,255,255,0.5)', 
			'dropdown_link_hover' => 	'#ffffff', 
			'dropdown_link_subtitle' => '#ffffff', 
			'dropdown_link_highlight' =>'#ffffff', 
			'dropdown_link_border' => 	'rgba(255,255,255,0.1)' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'#878787', 
			'link' => 					'#222222', 
			'hover' => 					'#e12b2b', 
			'bg' => 					'#ffffff', 
			'border' => 				'rgba(255,255,255,0)', 
			'title_link' => 			'#222222', 
			'title_link_hover' => 		'#565656', 
			'title_link_bg' => 			'#ffffff', 
			'title_link_bg_hover' => 	'#ffffff', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'rgba(255,255,255,0)', 
			'dropdown_link' => 			'#222222', 
			'dropdown_link_hover' => 	'#e12b2b', 
			'dropdown_link_highlight' =>'#e12b2b', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'rgba(255,255,255,0.65)', 
			'link' => 		'#8e8e8e', 
			'hover' => 		'#878787', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#151515', 
			'alternate' => 	'#151515', 
			'border' => 	'rgba(255,255,255,0.2)' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'rgba(255,255,255,0.65)', 
			'link' => 		'rgba(255,255,255,0.65)', 
			'hover' => 		'#c9c9c9', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#151515', 
			'alternate' => 	'#151515', 
			'border' => 	'rgba(255,255,255,0.15)' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#565656', 
			'link' => 		'#e12b2b', 
			'hover' => 		'#878787', 
			'heading' => 	'#151515', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f7f7f7', 
			'border' => 	'#e3e3e3' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#555555', 
			'link' => 		'#e12b2b', 
			'hover' => 		'#888888', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f5f5f5', 
			'border' => 	'#e3e3e3' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('magazilla_settings_element_defaults')) {

function magazilla_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'magazilla' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'magazilla' . '_social_icons' => array( 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'magazilla') . '|true||', 
				'cmsmasters-icon-gplus-1|#|' . esc_html__('Google+', 'magazilla') . '|true||', 
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'magazilla') . '|true||', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'magazilla') . '|true||', 
				'cmsmasters-icon-youtube-play|#|' . esc_html__('YouTube', 'magazilla') . '|true||' 
			) 
		), 
		'lightbox' => array( 
			'magazilla' . '_ilightbox_skin' => 					'dark', 
			'magazilla' . '_ilightbox_path' => 					'vertical', 
			'magazilla' . '_ilightbox_infinite' => 				0, 
			'magazilla' . '_ilightbox_aspect_ratio' => 			1, 
			'magazilla' . '_ilightbox_mobile_optimizer' => 		1, 
			'magazilla' . '_ilightbox_max_scale' => 				1, 
			'magazilla' . '_ilightbox_min_scale' => 				0.2, 
			'magazilla' . '_ilightbox_inner_toolbar' => 			0, 
			'magazilla' . '_ilightbox_smart_recognition' => 		0, 
			'magazilla' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'magazilla' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'magazilla' . '_ilightbox_controls_toolbar' => 		1, 
			'magazilla' . '_ilightbox_controls_arrows' => 		0, 
			'magazilla' . '_ilightbox_controls_fullscreen' => 	1, 
			'magazilla' . '_ilightbox_controls_thumbnail' => 	1, 
			'magazilla' . '_ilightbox_controls_keyboard' => 		1, 
			'magazilla' . '_ilightbox_controls_mousewheel' => 	1, 
			'magazilla' . '_ilightbox_controls_swipe' => 		1, 
			'magazilla' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'magazilla' . '_sitemap_nav' => 			1, 
			'magazilla' . '_sitemap_categs' => 		1, 
			'magazilla' . '_sitemap_tags' => 		1, 
			'magazilla' . '_sitemap_month' => 		1, 
			'magazilla' . '_sitemap_pj_categs' => 	1, 
			'magazilla' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'magazilla' . '_error_color' => 			'#363636', 
			'magazilla' . '_error_bg_color' => 			'#ffffff', 
			'magazilla' . '_error_bg_img_enable' => 		0, 
			'magazilla' . '_error_bg_image' => 			'', 
			'magazilla' . '_error_bg_rep' => 			'no-repeat', 
			'magazilla' . '_error_bg_pos' => 			'top center', 
			'magazilla' . '_error_bg_att' => 			'scroll', 
			'magazilla' . '_error_bg_size' => 			'cover', 
			'magazilla' . '_error_search' => 			1, 
			'magazilla' . '_error_sitemap_button' => 	1, 
			'magazilla' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'magazilla' . '_custom_css' => 			'', 
			'magazilla' . '_custom_js' => 			'', 
			'magazilla' . '_gmap_api_key' => 		'', 
			'magazilla' . '_api_key' => 				'', 
			'magazilla' . '_api_secret' => 			'', 
			'magazilla' . '_access_token' => 		'', 
			'magazilla' . '_access_token_secret' => 	'' 
		), 
		'recaptcha' => array( 
			'magazilla' . '_recaptcha_public_key' => 	'', 
			'magazilla' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('magazilla_settings_single_defaults')) {

function magazilla_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'magazilla' . '_blog_post_layout' => 		'r_sidebar', 
			'magazilla' . '_blog_post_title' => 			1, 
			'magazilla' . '_blog_post_date' => 			1, 
			'magazilla' . '_blog_post_cat' => 			1, 
			'magazilla' . '_blog_post_author' => 		1, 
			'magazilla' . '_blog_post_comment' => 		1, 
			'magazilla' . '_blog_post_tag' => 			1, 
			'magazilla' . '_blog_post_like' => 			1, 
			'magazilla' . '_blog_post_nav_box' => 		1, 
			'magazilla' . '_blog_post_nav_order_cat' => 	0, 
			'magazilla' . '_blog_post_share_box' => 		1, 
			'magazilla' . '_blog_post_share_box_facebook' => 		1, 
			'magazilla' . '_blog_post_share_box_twitter' => 		1, 
			'magazilla' . '_blog_post_share_box_linkedin' => 		1, 
			'magazilla' . '_blog_post_share_box_pinterest' => 		1, 
			'magazilla' . '_blog_post_share_box_gplus' => 		1, 
			'magazilla' . '_blog_post_share_box_reddit' => 		1, 
			'magazilla' . '_blog_post_share_box_stumbleupon' => 		1, 
			'magazilla' . '_blog_post_share_box_tumblr' => 		1, 
			'magazilla' . '_blog_post_author_box' => 	1, 
			'magazilla' . '_blog_more_posts_box' => 		'popular', 
			'magazilla' . '_blog_more_posts_count' => 	'3', 
			'magazilla' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'magazilla' . '_portfolio_project_title' => 			1, 
			'magazilla' . '_portfolio_project_details_title' => 	esc_html__('Article details', 'magazilla'), 
			'magazilla' . '_portfolio_project_date' => 			1, 
			'magazilla' . '_portfolio_project_cat' => 			1, 
			'magazilla' . '_portfolio_project_author' => 		1, 
			'magazilla' . '_portfolio_project_comment' => 		0, 
			'magazilla' . '_portfolio_project_tag' => 			0, 
			'magazilla' . '_portfolio_project_like' => 			1, 
			'magazilla' . '_portfolio_project_link' => 			0, 
			'magazilla' . '_portfolio_project_share_box' => 		1, 
			'magazilla' . '_portfolio_project_share_box_facebook' => 		1, 
			'magazilla' . '_portfolio_project_share_box_twitter' => 		1, 
			'magazilla' . '_portfolio_project_share_box_linkedin' => 		1, 
			'magazilla' . '_portfolio_project_share_box_pinterest' => 		1, 
			'magazilla' . '_portfolio_project_share_box_gplus' => 		1, 
			'magazilla' . '_portfolio_project_share_box_reddit' => 		1, 
			'magazilla' . '_portfolio_project_share_box_stumbleupon' => 		1, 
			'magazilla' . '_portfolio_project_share_box_tumblr' => 		1, 
			'magazilla' . '_portfolio_project_nav_box' => 		1, 
			'magazilla' . '_portfolio_project_nav_order_cat' => 	0, 
			'magazilla' . '_portfolio_project_author_box' => 	1, 
			'magazilla' . '_portfolio_more_projects_box' => 		'popular', 
			'magazilla' . '_portfolio_more_projects_count' => 	'4', 
			'magazilla' . '_portfolio_more_projects_pause' => 	'5', 
			'magazilla' . '_portfolio_project_slug' => 			'article', 
			'magazilla' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'magazilla' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'magazilla' . '_profile_post_title' => 			1, 
			'magazilla' . '_profile_post_details_title' => 	esc_html__('Profile details', 'magazilla'), 
			'magazilla' . '_profile_post_cat' => 			1, 
			'magazilla' . '_profile_post_comment' => 		1, 
			'magazilla' . '_profile_post_like' => 			1, 
			'magazilla' . '_profile_post_nav_box' => 		1, 
			'magazilla' . '_profile_post_nav_order_cat' => 		0, 
			'magazilla' . '_profile_post_share_box' => 		1, 
			'magazilla' . '_profile_post_share_box_facebook' => 		1, 
			'magazilla' . '_profile_post_share_box_twitter' => 		1, 
			'magazilla' . '_profile_post_share_box_linkedin' => 		1, 
			'magazilla' . '_profile_post_share_box_pinterest' => 		1, 
			'magazilla' . '_profile_post_share_box_gplus' => 		1, 
			'magazilla' . '_profile_post_share_box_reddit' => 		1, 
			'magazilla' . '_profile_post_share_box_stumbleupon' => 		1, 
			'magazilla' . '_profile_post_share_box_tumblr' => 		1, 
			'magazilla' . '_profile_post_slug' => 			'profile', 
			'magazilla' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Article Puzzle Proportion */
if (!function_exists('magazilla_project_puzzle_proportion')) {

function magazilla_project_puzzle_proportion() {
	return 1;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('magazilla_get_image_thumbnail_list')) {

function magazilla_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		120, 
			'height' => 	120, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		360, 
			'height' => 	360, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'magazilla') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	400, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'magazilla') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	360, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Article', 'magazilla') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Article', 'magazilla') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	500, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'magazilla') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'magazilla') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	560, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'magazilla') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	560, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Article Full', 'magazilla') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'magazilla') 
		) 
	);
	
	
	return $list;
}

}



/* Article Post Type Registration Rename */
if (!function_exists('magazilla_project_labels')) {

function magazilla_project_labels() {
	return array( 
		'name' => 					esc_html__('Articles', 'magazilla'), 
		'singular_name' => 			esc_html__('Article', 'magazilla'), 
		'menu_name' => 				esc_html__('Articles', 'magazilla'), 
		'all_items' => 				esc_html__('All Articles', 'magazilla'), 
		'add_new' => 				esc_html__('Add New', 'magazilla'), 
		'add_new_item' => 			esc_html__('Add New Article', 'magazilla'), 
		'edit_item' => 				esc_html__('Edit Article', 'magazilla'), 
		'new_item' => 				esc_html__('New Article', 'magazilla'), 
		'view_item' => 				esc_html__('View Article', 'magazilla'), 
		'search_items' => 			esc_html__('Search Articles', 'magazilla'), 
		'not_found' => 				esc_html__('No articles found', 'magazilla'), 
		'not_found_in_trash' => 	esc_html__('No articles found in Trash', 'magazilla') 
	);
}

}

add_filter('cmsmasters_project_labels_filter', 'magazilla_project_labels');


if (!function_exists('magazilla_pj_categs_labels')) {

function magazilla_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Article Categories', 'magazilla'), 
		'singular_name' => 			esc_html__('Article Category', 'magazilla') 
	);
}

}

add_filter('cmsmasters_pj_categs_labels_filter', 'magazilla_pj_categs_labels');


if (!function_exists('magazilla_pj_tags_labels')) {

function magazilla_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Article Tags', 'magazilla'), 
		'singular_name' => 			esc_html__('Article Tag', 'magazilla') 
	);
}

}

add_filter('cmsmasters_pj_tags_labels_filter', 'magazilla_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('magazilla_profile_labels')) {

function magazilla_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'magazilla'), 
		'singular_name' => 			esc_html__('Profiles', 'magazilla'), 
		'menu_name' => 				esc_html__('Profiles', 'magazilla'), 
		'all_items' => 				esc_html__('All Profiles', 'magazilla'), 
		'add_new' => 				esc_html__('Add New', 'magazilla'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'magazilla'), 
		'edit_item' => 				esc_html__('Edit Profile', 'magazilla'), 
		'new_item' => 				esc_html__('New Profile', 'magazilla'), 
		'view_item' => 				esc_html__('View Profile', 'magazilla'), 
		'search_items' => 			esc_html__('Search Profiles', 'magazilla'), 
		'not_found' => 				esc_html__('No Profiles found', 'magazilla'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'magazilla') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'magazilla_profile_labels');


if (!function_exists('magazilla_pl_categs_labels')) {

function magazilla_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'magazilla'), 
		'singular_name' => 			esc_html__('Profile Category', 'magazilla') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'magazilla_pl_categs_labels');

