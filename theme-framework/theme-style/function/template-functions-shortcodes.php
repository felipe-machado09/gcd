<?php 
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Template Functions for Shortcodes
 * Created by CMSMasters
 * 
 */


/**
 * Posts Slider Functions
 */

/* Get Posts Slider Heading Function */
function magazilla_slider_post_heading($cmsmasters_id, $type = 'post', $tag = 'h1', $link_redirect = false, $link_url = false, $show = true, $link_target = false) {
	$title = cmsmasters_title($cmsmasters_id, false);

	if ($type == 'post') {
		$out = '<header class="cmsmasters_slider_post_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsmasters_slider_post_title entry-title">' . 
				'<a title="' . $title . '" href="' . esc_url(get_permalink()) . '">' . $title . '</a>' . 
			'</' . esc_html($tag) . '>' . 
		'</header>';
	} elseif ($type == 'project') {
		$out = '<header class="cmsmasters_slider_project_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsmasters_slider_project_title entry-title">' . 
				'<a title="' . $title . '" href="' . (($link_redirect == 'true' && $link_url != '') ? esc_url($link_url) : esc_url(get_permalink())) . '"' . ($link_target == 'true' ? ' target="_blank"' : '') . '>' . $title . '</a>' . 
			'</' . esc_html($tag) . '>' . 
		'</header>';
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Slider Content/Excerpt Function */
function magazilla_slider_post_exc_cont($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = cmsmasters_divpdel('<div class="cmsmasters_slider_post_content entry-content">' . "\n" . 
			wpautop(magazilla_excerpt(20, false)) . 
		'</div>' . "\n");
	} elseif ($type == 'project') {
		$out = cmsmasters_divpdel('<div class="cmsmasters_slider_project_content entry-content">' . "\n" . 
			wpautop(magazilla_excerpt(20, false)) . 
		'</div>' . "\n");
	}
	
	
	if ($show) {
		echo magazilla_return_content($out);
	} else {
		return $out;
	}
}



/* Check Posts Slider Content/Excerpt Not Empty Function */
function magazilla_slider_post_check_exc_cont($type = 'post') {
	$exc = magazilla_slider_post_exc_cont($type, false);
	
	$no_tags_exc = strip_tags($exc);
	
	$trim_exc = trim($no_tags_exc);
	
	
	if ($trim_exc != '') {
		return true;
	} else {
		return false;
	}
}



/* Get Posts Slider Date Function */
function magazilla_get_slider_post_date($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = '<span class="cmsmasters_slider_post_date cmsmasters-icon-custom-icon-clock">' . 
			'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
				esc_html(get_the_date()) . 
			'</abbr>' . 
			'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
				esc_html(get_the_modified_date()) . 
			'</abbr>' . 
		'</span>';
	} elseif ($type == 'project') {
		$out = '<span class="cmsmasters_slider_project_date cmsmasters-icon-custom-icon-clock">' . 
			'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
				esc_html(get_the_date()) . 
			'</abbr>' . 
			'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
				esc_html(get_the_modified_date()) . 
			'</abbr>' . 
		'</span>';
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Slider Author Function */
function magazilla_get_slider_post_author($type = 'post', $show = true, $show_profile = false) {

	$profile =  '<a href=" ' . get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) )  . ' " class="cmsmasters_post_author_avatar">' .
		get_avatar(get_the_author_meta('ID'), 25, get_option('avatar_default')) .
	'</a>';

	if ($type == 'post') {
		$out = '<span class="cmsmasters_slider_post_author">' . 
			($show_profile ? $profile : "") .
			esc_html__('by', 'magazilla') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'magazilla') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	} elseif ($type == 'project') {
		$out = '<span class="cmsmasters_slider_project_author">' . 
			($show_profile ? $profile : "") .
			esc_html__('by', 'magazilla') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Articles by', 'magazilla') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author"><span class="fn" rel="author">' . esc_html(get_the_author_meta('display_name')) . '</span></a>' . 
		'</span>';
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Slider Category Function */
function magazilla_get_slider_post_category($cmsmasters_id, $taxonomy, $type = 'post', $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($type == 'post') {
			$out = '<span class="cmsmasters_slider_post_category">' . 
				magazilla_get_the_category_list($cmsmasters_id, $taxonomy, '') . 
			'</span>';
		} elseif ($type == 'project') {
			$out = '<span class="cmsmasters_slider_project_category">' . 
				magazilla_get_the_category_list($cmsmasters_id, $taxonomy, '') . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Slider Like Function */
function magazilla_slider_post_like($type = 'post', $show = true) {
	$out = '';
	
	
	if ($type == 'post') {
		$out = cmsmasters_like('cmsmasters_slider_post_likes');
	} elseif ($type == 'project') {
		$out = cmsmasters_like('cmsmasters_slider_project_likes');
	}
	
	
	if ($show) {
		echo magazilla_return_content($out);
	} else {
		return $out;
	}
}



/* Get Posts Slider View Function */
function magazilla_slider_post_views($type = 'post', $show = true) {
	if ($type == 'post') {
		$out = cmsmastersView();
	}
	
	
	if ($show) {
		echo magazilla_return_content($out);
	} else {
		return $out;
	}
}



/* Get Posts Slider Comments Function */
function magazilla_get_slider_post_comments($type = 'post', $show = true) {
	$out = '';
	
	
	if (comments_open()) {
		if ($type == 'post') {
			$out = magazilla_get_comments('cmsmasters_slider_post_comments');
		} elseif ($type == 'project') {
			$out = magazilla_get_comments('cmsmasters_slider_project_comments');
		}
	}
	
	
	if ($show) {
		echo magazilla_return_content($out);
	} else {
		return $out;
	}
}



/* Get Posts Slider More Button/Link Function */
function magazilla_slider_post_more($cmsmasters_id, $show = true) {
	$cmsmasters_post_read_more = get_post_meta($cmsmasters_id, 'cmsmasters_post_read_more', true);
	
	
	if ($cmsmasters_post_read_more == '') {
		$cmsmasters_post_read_more = esc_attr__('Read More', 'magazilla');
	}
	
	
	$out = '<a class="cmsmasters_slider_post_read_more" href="' . esc_url(get_permalink($cmsmasters_id)) . '">' . esc_html($cmsmasters_post_read_more) . '</a>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}

