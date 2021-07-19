<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version 	1.0.3
 * 
 * Theme Content Composer Shortcodes
 * Created by CMSMasters
 * 
 */


/**
 * Roll Titles
 */
function magazilla_roll_titles($atts, $content = null) { 
	$new_atts = apply_filters('magazilla_roll_titles_atts_filter', array( 
		'rollscinfo' => 			'', 
		'orderby' => 				'', 
		'order' => 					'', 
		'post_categories' => 		'', 
		'count' => 					'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	) );
	
	
	$shortcode_name = 'roll-titles';
	
	$shortcode_path = CMSMASTERS_CONTENT_COMPOSER_TEMPLATE_DIR . '/cmsmasters-' . $shortcode_name . '.php';
	
	
	if (magazilla_locate_template($shortcode_path)) {
		$template_out = cmsmasters_composer_load_template($shortcode_path, array( 
			'atts' => 		$atts, 
			'new_atts' => 	$new_atts, 
			'content' => 	$content 
		) );
		
		
		return $template_out;
	}
	
	
	extract(shortcode_atts($new_atts, $atts));
	
	
	$unique_id = uniqid();	
	
	$args = array( 
		'rollscinfo' => 			$rollscinfo, 
		'orderby' => 				$orderby, 
		'order' => 					$order, 
		'posts_per_page' => 		$count, 
		'ignore_sticky_posts' => 	true, 
		'category_name' => 			$post_categories 
	);

	
	$query = new WP_Query($args);
	$animation_duration = $query->post_count * 6;
	$amount_count = 0;
	$out = "";
	
	
	if ($query->have_posts()) : 
		$out .= "<div class='cmsmasters_roll_titles_wrap clear clearfix'>
			<div class='cmsmasters_roll_titles_inner" . 
				(($classes != '') ? ' ' . $classes : '') . 
				"'" . 
				(($animation != '') ? ' data-animation="' . $animation . '"' : '') . 
				(($animation != '' && $animation_delay != '') ? ' data-delay="' . $animation_delay . '"' : '') . ">";

			if ($rollscinfo != '') {
				$out .= "<div class='cmsmasters_roll_titles_info'>" . "\n" . 
					"<h4 class='cmsmasters_roll_titles_info_title'>". $rollscinfo ."</h4>" . "\n" . 
				"</div>" . "\n";
			}

			$out .= "<div class=\"cmsmasters_roll_titles_slider_wrap\">\n" .
			"<div id=\"cmsmasters_roll_marquee_$unique_id\" class=\"cmsmasters_roll_marquee\">";
					
					while ($query->have_posts()) : $query->the_post();
						
						$out .= cmsmasters_load_template_part('theme-framework/theme-style/' . CMSMASTERS_THEME_STYLE . '/postType/roll-titles/standard');
						
						$amount_count ++;
						
					endwhile;
			
				$out .= '</div>' .
				"<style type=\"text/css\">
					#cmsmasters_roll_marquee_$unique_id {
						animation-duration: {$animation_duration}s;
					}
				</style>" .
				'</div>' . 
			'</div>'.
		'</div>';
	
	endif;
	
	
	wp_reset_postdata();
	
	
	return $out;
}

function magazilla_roll_titles_shortcodes($shortcodes) {
	$shortcodes[] = 'magazilla_roll_titles';
	
	
	return $shortcodes;
}

add_filter('cmsmasters_custom_shortcodes_filter', 'magazilla_roll_titles_shortcodes');
