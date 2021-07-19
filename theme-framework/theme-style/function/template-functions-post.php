<?php 
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.4
 * 
 * Template Functions for Blog & Post
 * Created by CMSMasters
 * 
 */

/* Get Posts Heading Function */
function magazilla_post_heading($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '';
	
	
	if (cmsmasters_title($cmsmasters_id, false) != $cmsmasters_id) {
		$out = '<header class="cmsmasters_post_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsmasters_post_title entry-title">' . 
				'<a href="' . esc_url(get_permalink()) . '">' . esc_html(strip_tags(get_the_title($cmsmasters_id) ? get_the_title($cmsmasters_id) : $cmsmasters_id)) . '</a>' . 
			'</' . esc_html($tag) . '>' .
		'</header>';
	}
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Heading Without Link Function */
function magazilla_post_title_nolink($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '';
	
	
	if (cmsmasters_title($cmsmasters_id, false) != $cmsmasters_id) {
		$out = '<header class="cmsmasters_post_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsmasters_post_title entry-title">' . 
				esc_html(strip_tags(get_the_title($cmsmasters_id) ? get_the_title($cmsmasters_id) : $cmsmasters_id)) . 
			'</' . esc_html($tag) . '>' .
		'</header>';
	}
	

	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Date Function */
function magazilla_get_post_date($template_type = 'page', $layout_type = 'default', $show = true) {
	if ($template_type == 'page') {
		if ($layout_type == 'timeline') {
			$out = '<small class="cmsmasters_post_date cmsmasters-icon-custom-icon-clock">' . 
				'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
					'<span class="cmsmasters_day">' . esc_html(get_the_date('d')) . '</span>' . 
					'<span class="cmsmasters_mon_year">' . esc_html(get_the_date('F, Y')) . '</span>' . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
				'</abbr>' . 
			'</small>';
		} else {
			$out = '<small class="cmsmasters_post_date cmsmasters-icon-custom-icon-clock">' . 
				'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
					esc_html(get_the_date()) . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
				'</abbr>' . 
			'</small>';
		}
		
		
		if (cmsmasters_title(get_the_ID(), false) == get_the_ID()) {
			$out = '<a href="' . esc_url(get_permalink()) . '">' . $out . '</a>';
		}
	} elseif ($template_type == 'post') {
		$cmsmasters_option = magazilla_get_global_options();
		
		$out = '';
		
		if ($cmsmasters_option['magazilla' . '_blog_post_date']) {
			$out .= '<small class="cmsmasters_post_date cmsmasters-icon-custom-icon-clock">' . 
				'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
					esc_html(get_the_date()) . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
				'</abbr>' . 
			'</small>';
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Author Function */
function magazilla_get_post_author($template_type = 'page', $show = true, $show_profile = false) {

	$profile =  '<a href=" ' . get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) )  . ' " class="cmsmasters_post_author_avatar">' .
		get_avatar(get_the_author_meta('ID'), 40, get_option('avatar_default')) .
	'</a>';

	if ($template_type == 'page') {
		$out = '<span class="cmsmasters_post_author">' . 
			($show_profile ? $profile : "") .
			esc_html__('by', 'magazilla') . ' ' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'magazilla') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author" rel="author">' . 
				'<span class="fn">' . esc_html(get_the_author_meta('display_name')) . '</span>' . 
			'</a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = magazilla_get_global_options();
		$out = '';
		
		if ($cmsmasters_option['magazilla' . '_blog_post_author']) {
			$out .= '<div class="cmsmasters_post_author">' . 
				($show_profile ? $profile : "") .
				esc_html__('by', 'magazilla') . ' ' . 
				'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'magazilla') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author" rel="author">' . 
					'<span class="fn">' . esc_html(get_the_author_meta('display_name')) . '</span>' . 
				'</a>' . 
			'</div>';
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Author Avatar Function */
function magazilla_get_post_author_avatar($show = true) {
	$cmsmasters_option = magazilla_get_global_options();
	$user_url = get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) );
	$out = '';
		
	if ($cmsmasters_option['magazilla' . '_blog_post_author']) {
		$out = '<figure class="cmsmasters_post_author_avatar"><a href="' . $user_url . '">' . 
			get_avatar(get_the_author_meta('ID'), 100, get_option('avatar_default')) . 
		'</a></figure>';
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Category Function */
function magazilla_get_post_category($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out .= '<span class="cmsmasters_post_category">' . 
				magazilla_get_the_category_list($cmsmasters_id, $taxonomy, '') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = magazilla_get_global_options();
			
			
			if ($cmsmasters_option['magazilla' . '_blog_post_cat']) {
				$out .= '<span class="cmsmasters_post_category">' . 
					magazilla_get_the_category_list($cmsmasters_id, $taxonomy, '') . 
				'</span>';
			}
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Tags Function */
function magazilla_get_post_tags($show = true) {
	if (get_the_tags()) {
		$cmsmasters_option = magazilla_get_global_options();
		$out = '';
		
		if ($cmsmasters_option['magazilla' . '_blog_post_tag']) {
			$out .= '<span class="cmsmasters_post_tags">' . esc_html__('Tags:', 'magazilla') . 
				get_the_tag_list('', '', '') . 
			'</span>';
		}
		
		
		if ($show) {
			echo wp_kses_post($out);
		} else {
			return wp_kses_post($out);
		}
	}
}



/* Get Posts Content/Excerpt Function */
function magazilla_post_exc_cont($length = 20, $show = true) {
	$out = cmsmasters_divpdel('<div class="cmsmasters_post_content entry-content">' . "\n" . 
		wpautop(magazilla_excerpt($length, false)) . 
	'</div>' . "\n");
	
	
	if (magazilla_excerpt($length, false) != '') {
		if ($show) {
			echo magazilla_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Posts Like Function */
function magazilla_get_post_likes($template_type = 'page', $show = true) {
	$out = '';
	
	
	if ($template_type == 'page') {
		$out = cmsmasters_like('cmsmasters_post_likes');
	} elseif ($template_type == 'post') {
		$cmsmasters_option = magazilla_get_global_options();
		
		if ($cmsmasters_option['magazilla' . '_blog_post_like']) {
			$out = cmsmasters_like('cmsmasters_post_likes');
		}
	}
	
	
	if ($show) {
		echo magazilla_return_content($out);
	} else {
		return $out;
	}
}

/* Get Posts Like Function */
function magazilla_get_post_share($show = true) {
	$out = '';
	$post_ID = get_the_ID();
	$share = (get_post_meta($post_ID, 'cmsmasters_share', true) != '') ? get_post_meta($post_ID, 'cmsmasters_share', true) : '0';
	$views = (get_post_meta($post_ID, 'cmsmasters_views', true) != '') ? get_post_meta($post_ID, 'cmsmasters_views', true) : '0';

	$out = '<span class="cmsmasters_share cmsmasters-icon-share-3">' . 
		$share . ' <span class="name">' . ( intval($share) > 1 ? esc_html__('compartilhamentos', 'magazilla') : esc_html__('compartilhamento', 'magazilla')) . '</span></span>';
	
	if ($show) {
		echo magazilla_return_content($out);
	} else {
		return $out;
	}
}



/* Get Posts Like Function */
function magazilla_get_post_views($template_type = 'page', $show = true) {
	$out = '';
	
	if ($template_type == 'page') {
		$out = cmsmastersView('cmsmasters_post_views');
	} elseif ($template_type == 'post') {
		$cmsmasters_option = magazilla_get_global_options();
		
		if ($cmsmasters_option['magazilla' . '_blog_post_view']) {
			$out = cmsmastersView('cmsmasters_post_views');
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Comments Function */
function magazilla_get_post_comments($template_type = 'page', $show = true) {
	$out = '';
	
	
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = magazilla_get_comments('cmsmasters_post_comments');
		} elseif ($template_type == 'post') {
			$cmsmasters_option = magazilla_get_global_options();
			
			if ($cmsmasters_option['magazilla' . '_blog_post_comment']) {
				$out = magazilla_get_comments('cmsmasters_post_comments');
			}
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts More Button/Link Function */
function magazilla_post_more($cmsmasters_id, $show = true) {
	$cmsmasters_post_read_more = get_post_meta($cmsmasters_id, 'cmsmasters_post_read_more', true);
	
	
	if ($cmsmasters_post_read_more == '') {
		$cmsmasters_post_read_more = esc_html__('Read More', 'magazilla');
	}
	
	
	$out = '<a class="cmsmasters_post_read_more" href="' . esc_url(get_permalink($cmsmasters_id)) . '">' . esc_html($cmsmasters_post_read_more) . '</a>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Post Format Icon Placeholder Function */
function magazilla_post_format_icon_placeholder($cmsmasters_id, $format = 'std', $show = true) {
	$out = '<figure>' . 
		'<a href="' . esc_url(get_permalink()) . '" title="' . esc_attr(strip_tags(get_the_title($cmsmasters_id) ? get_the_title($cmsmasters_id) : $cmsmasters_id)) . '" class="preloader cmsmasters_theme_icon_' . esc_attr($format) . '"></a>' . 
	'</figure>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}

