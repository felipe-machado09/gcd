<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version 	1.0.0
 * 
 * Theme Functions
 * Created by CMSMasters
 * 
 */


/* Load Framework Parts */
require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/theme-settings.php');
require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/theme-options.php');

require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/class/theme-widgets.php');

require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/single-comment.php');
require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/theme-colors-primary.php');
require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/theme-colors-secondary.php');
require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/theme-fonts.php');
require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/template-functions.php');
require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/template-functions-post.php');
require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/template-functions-project.php');
require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/template-functions-profile.php');
require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/template-functions-single.php');
require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/template-functions-shortcodes.php');


if (CMSMASTERS_CONTENT_COMPOSER && class_exists('Cmsmasters_Content_Composer')) {
	require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/cmsmasters-c-c-theme-functions.php');
	
	require_once(get_template_directory() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/cmsmasters-c-c-theme-shortcodes.php');
}



/* Scripts for Admin */
function magazilla_theme_admin_scripts() {
	wp_enqueue_script('cmsmasters-theme-settings-toggle', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/js/theme-settings-toggle.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('cmsmasters-theme-settings-toggle', 'cmsmasters_theme_settings', array( 
		'shortname' => 	'magazilla' 
	));
}

add_action('admin_enqueue_scripts', 'magazilla_theme_admin_scripts');



/* Register theme JS Scripts */
function magazilla_register_theme_js_scripts() {
	$cmsmasters_option = magazilla_get_global_options();
	
	
	$cmsmasters_localize_array = array(
		'primary_color' => 	$cmsmasters_option['magazilla' . '_default_link'], 
		'nonce_ajax_share' => 					wp_create_nonce('cmsmasters_ajax_share-nonce')
	);
	
	wp_localize_script('magazilla-theme-script', 'cmsmasters_theme_script', $cmsmasters_localize_array);
}

add_action('wp_enqueue_scripts', 'magazilla_register_theme_js_scripts');



/* Register Theme Navigations */
register_nav_menus(array( 
    'primary' => 	esc_html__('Primary Navigation', 'magazilla'), 
    'footer' => 	esc_html__('Footer Navigation', 'magazilla'), 
	'top_line' => 	esc_html__('Top Line Navigation', 'magazilla') 
));



/* Register Showing Home Page on Default WordPress Pages Menu */
function cmsmasters_custom_mega_menu_item_output($args) {
	$shcd_args = $args['args'];
	
	$shcd_attrs = $args['attrs'];
	
	$shcd_depth = $args['depth'];
	
	$shcd_item = $args['item'];
	
	$shcd_cols_count = $args['cols_count'];
	
	
	$item_output = '';
	
	
	if (!empty($shcd_item->color)) {
		$shcd_attrs .= ' data-color="color:' . $shcd_item->color . ';"';
	}
	
	
	$item_output .= $shcd_args->before . 
		'<a' . $shcd_attrs . '>';
	
	
	$item_output .= $shcd_args->link_before;
	
	
	if ( 
		($shcd_depth <= 1 && empty($shcd_item->hide_text)) || 
		($shcd_depth == 0 && !empty($shcd_item->hide_text) && !empty($shcd_item->icon)) || 
		($shcd_depth == 1 && $shcd_cols_count == NULL && !empty($shcd_item->hide_text)) || 
		($shcd_depth == 1 && $shcd_cols_count != NULL && !empty($shcd_item->hide_text) && !empty($shcd_item->icon)) || 
		($shcd_depth > 1) 
	) {
		$item_output .= '<span class="nav_title' . (!empty($shcd_item->icon) ? ' ' . $shcd_item->icon : '') . '">';
		
			if (empty($shcd_item->hide_text)) {
				$item_output .= apply_filters('the_title', $shcd_item->title, $shcd_item->ID);
			}
			
		$item_output .= '</span>';
		
		
		if (!empty($shcd_item->tag)) {
			$item_output .= '<span class="nav_tag">' . esc_attr($shcd_item->tag) . '</span>';
		}
		
		
		if ( 
			($shcd_depth == 0 && !empty($shcd_item->subtitle)) || 
			($shcd_depth == 1 && $shcd_cols_count != NULL && !empty($shcd_item->subtitle)) 
		) {
			$item_output .= '<span class="nav_subtitle">' . 
				$shcd_item->subtitle . 
			'</span>';
		}
	}
	
	
	$item_output .= $shcd_args->link_after . 
		'</a>' . 
	$shcd_args->after;
	
	
	return $item_output;
}

add_filter('cmsmasters_mega_item_output', 'cmsmasters_custom_mega_menu_item_output');



/* Register wp_nav_menu() Fallback Function */
function magazilla_fallback_menu($args) {
	$cmsmasters_option = magazilla_get_global_options();
	
	
	echo '<div class="navigation_wrap">' . "\n" . 
		'<ul id="navigation" class="' . 
			'navigation ' . 
			($cmsmasters_option['magazilla' . '_header_styles'] == 'default' ? 'mid_nav' : 'bot_nav') . 
		'">' . "\n";
	
	
	wp_list_pages(array( 
		'title_li' => '', 
		'link_before' => '<span class="nav_item_wrap">', 
		'link_after' => '</span>' 
	));
	
	
	echo '</ul>' . "\r" . 
	'</div>' . "\n";
}



/* Get Social Icons Styles Function */
function magazilla_theme_profiles_subtitles_styles() {
	$cmsmasters_option = magazilla_get_global_options();
	
	$out = '';
	
	$profiles = new WP_Query(array( 
		'post_type' => 		'profile'
	));
	
	$profiles = $profiles->posts;
	
	if (!empty($profiles) && !is_wp_error($profiles)) {
		
		foreach ($profiles as $profile) {
			
			$profile_id = $profile->ID;
			
			$profile_subtitle_color = get_post_meta($profile_id, 'cmsmasters_profile_subtitle_color', true);
			
			
			if (isset($profile_subtitle_color) && $profile_subtitle_color != '') {
				$out .= "
				
	.cmsmasters_profile #post-{$profile_id} .cmsmasters_profile_subtitle {
		" . cmsmasters_color_css('background-color', $profile_subtitle_color) . "
	}
";
			}
		}
	}
	
	
	return $out;
}



/* Get Posts Custom Small Thumbnail Function */
function magazilla_thumb_custom($cmsmasters_id, $type = 'post-thumbnail', $link = '', $show = true) {
	$args = array( 
		'alt' => cmsmasters_title($cmsmasters_id, false), 
		'title' => cmsmasters_title($cmsmasters_id, false) 
	);
	
	if (has_post_thumbnail($cmsmasters_id)) {
		$out = '<figure class="cmsmasters_img_wrap">'; 
	
			$out .= get_the_post_thumbnail($cmsmasters_id, (($type) ? $type : 'full'), $args);
	
		$out .= '</figure>';
	} else {
		$out = '';
	}
	
	
	if ($show) {
		echo magazilla_return_content($out);
	} else {
		return $out;
	}
}



/* Single Article and Profile Layout */
function magazilla_single_project_layout($cmsmasters_layout) {
	if (
		is_singular('project') || 
		is_singular('profile') 
	) {
		$cmsmasters_layout = 'fullwidth';
	}
	
	
	return $cmsmasters_layout;
}

add_filter('cmsmasters_theme_page_layout_filter', 'magazilla_single_project_layout');



/* Search Form */
function magazilla_search_form($form) {
	$form = "<div class=\"search_bar_wrap\">
		<form method=\"get\" action=\"" . esc_url(home_url('/')) . "\">
			<p class=\"search_field\">
				<input name=\"s\" placeholder=\"" . esc_attr__('Pesquisar...', 'magazilla') . "\" value=\"\" type=\"search\" />
			</p>
			<p class=\"search_button\">
				<button type=\"submit\" class=\"cmsmasters_theme_icon_search\"></button>
			</p>
		</form>
	</div>";
	
	
	return $form;
}

add_filter('get_search_form', 'magazilla_search_form');

/* Widget Export */
function magazilla_add_widget_export($options) {
	$options[] = "widget_" . "custom-most-popular-widget";
	
	return $options;
}

add_filter('cmsmasters_settings_export_filter', 'magazilla_add_widget_export');

function magazilla_wpsol_optimization_settings_filter_fn($options){
	$options['advanced_features']['jsgroup_minification'] = 0;

	return $options;
}

add_filter('magazilla_wpsol_optimization_settings_filter', 'magazilla_wpsol_optimization_settings_filter_fn');


function magazilla_short_number( $n, $precision = 1 ) {
	if ($n < 900) {
		// 0 - 900
		$n_format = number_format($n, $precision);
		$suffix = '';
	} else if ($n < 900000) {
		// 0.9k-850k
		$n_format = number_format($n / 1000, $precision);
		$suffix = 'K';
	} else if ($n < 900000000) {
		// 0.9m-850m
		$n_format = number_format($n / 1000000, $precision);
		$suffix = 'M';
	} else if ($n < 900000000000) {
		// 0.9b-850b
		$n_format = number_format($n / 1000000000, $precision);
		$suffix = 'B';
	} else {
		// 0.9t+
		$n_format = number_format($n / 1000000000000, $precision);
		$suffix = 'T';
	}
	
	if ( $precision > 0 ) {
		$dotzero = '.' . str_repeat( '0', $precision );
		$n_format = str_replace( $dotzero, '', $n_format );
	}
	return $n_format . $suffix;
}

function magazilla_parse_rgba($str){
	//match the rgba string and get it's part
	if(preg_match('/rgba\( *([\d\.-]+), *([\d\.-]+), *([\d\.-]+), *([\d\.-]+) *\)/i', $str, $m)){
		$out = array(
			'r'=>intval($m[1]), //get the red
			'g'=>intval($m[2]), //get the green
			'b'=>intval($m[3]), //get the blue
			'a'=>round(floatval($m[4]) * 255), //get the alpha and scale to 0-255
		);

		//clamp each  value between 0 and 255
		array_walk($out, function(&$v){ $v = min(255, max(0, $v)); });

		return $out;
	}
	return false;
}

function magazilla_weather() {
	$out = "";
	$adress_api = magazilla_get_adress();

	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	if($adress_api && class_exists("sp_location_weather_widget_content")){
		$unique_id = uniqid();
		$instance = array(
			'title' => "",
			"location_weather_id" => $unique_id,
			"location_weather_city" => $adress_api->city,
			"location_weather_country" => $adress_api->country
		);

		$out .= the_widget("sp_location_weather_widget_content", $instance, array());
	}
	
	echo magazilla_return_content($out);
}

function magazilla_get_user_ip(){
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
		$ip = getenv("HTTP_CLIENT_IP");
	else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
		$ip = getenv("HTTP_X_FORWARDED_FOR");
	else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
		$ip = getenv("REMOTE_ADDR");
	else
		$ip = "unknown";
	
	return($ip);
}

function magazilla_get_adress(){
	$ip = magazilla_get_user_ip();

	if($ip && $ip != "unknown"){
		$adress_api = "";

		if($ip == "127.0.0.1"){
			$adress_api = json_decode(wp_remote_get("http://ip-api.com/json/72.229.28.185")["body"]);
		} else{
			$adress_api = json_decode(wp_remote_get("http://ip-api.com/json/$ip")["body"]);
		}

		return $adress_api;
	} else {
		return false;
	}
}