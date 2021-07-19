<?php 
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Theme Admin Options
 * Created by CMSMasters
 * 
 */


/* Profile Options */
function magazilla_custom_profile_meta_fieldss($custom_all_meta_fields) {
	$cmsmasters_option = magazilla_get_global_options();
	
	
	$custom_all_meta_fields_new = array();
	
	if (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'profile') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'profile') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'profile') 
	) {
		foreach ($custom_all_meta_fields as $custom_all_meta_field) {
			if (
				$custom_all_meta_field['id'] == 'cmsmasters_profile_details_title'
			) {	
				$custom_all_meta_fields_new[] =	array( 
					'label'	=> esc_html__('Subtitle Color', 'magazilla'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_profile_subtitle_color', 
					'type'	=> 'rgba', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		}
	} else {
		$custom_all_meta_fields_new = $custom_all_meta_fields;
	}
	
	
	return $custom_all_meta_fields_new;
}

add_filter('get_custom_all_meta_fields_filter', 'magazilla_custom_profile_meta_fieldss');
