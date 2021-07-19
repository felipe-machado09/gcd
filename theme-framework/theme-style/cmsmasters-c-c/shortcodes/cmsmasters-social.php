<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version 	1.0.0
 * 
 * Content Composer Social Sharing Shortcode
 * Created by CMSMasters
 * 
 */



extract(shortcode_atts($new_atts, $atts));
	

$page_link = urlencode(get_permalink());
$social_title = cmsmasters_title(get_the_ID(), false);
$website_name = get_bloginfo('name');
$website_description = get_bloginfo('description');


$out = '';

if ($facebook == 'true' || $twitter == 'true' || $google == 'true' || $pinterest == 'true') {
	$out .= '<div class="cmsmasters_sharing share_wrap' . 
	(($type == 'vertical') ? ' social_vertical' : '') . 
	(($show_text_link != '') ? ' social_text_link' : '') . 
	(($classes != '') ? ' ' . esc_attr($classes) : '') . 
	'"' . 
	(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
	'>' . "\n";
	
	
	if ($facebook == 'true') {
		$out .= '<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?display=popup&u=' . $page_link . '" class="facebook cmsmasters-icon-facebook"><span>' . esc_html__('Facebook', 'magazilla') . '</span></a>' . "\n";
	}

	if ($twitter == 'true') {
		$out .= '<a target="_blank" href="https://twitter.com/intent/tweet?text=' . urlencode(html_entity_decode(sprintf(esc_attr__("Check out '%s' on %s website", 'magazilla'), $social_title, $website_name), ENT_QUOTES, 'UTF-8')) . '&url=' . $page_link . '" class="twitter cmsmasters-icon-twitter"><span>' . esc_html__('Twitter', 'magazilla') . '</span></a>' . "\n";
	}

	if ($linkedin == 'true') {
		$out .= "<a class='linkedin cmsmasters-icon-linkedin-1' target=\"_blank\" href=\"https://www.linkedin.com/shareArticle?mini=true&url={$page_link}&title=$social_title&summary={$website_description}&source={$website_name}\"><span>" . esc_html__('linkedin', 'magazilla') . "</span></a>" . "\n";
	}
	
	if ($pinterest == 'true') {
		if (has_post_thumbnail()) {
			$post_img_id = get_post_thumbnail_id();
			
			$post_img_url = wp_get_attachment_url($post_img_id);
			
			$pinterest_img = urlencode($post_img_url);
		} else {
			$cont = get_the_content();
			
			$cont_part = strstr($cont, '[cmsmasters_social', true);
			
			
			preg_match_all('/<img\s+[^>]*?src=("|\')([^"\']+)/i', do_shortcode($cont_part), $img_matches);
			
			
			if (!empty($img_matches[2][0])) {
				$first_img = $img_matches[2][0];
			} else {
				$first_img = get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_CONTENT_COMPOSER_THEME_STYLE . '/img/logo.png';
			}
			
			
			$pinterest_img = urlencode($first_img);
		}
	
		$out .= '<a target="_blank" href="https://pinterest.com/pin/create/button/?url=' . $page_link . '&media=' . $pinterest_img . '&description=' . $social_title . '" class="pinterest cmsmasters-icon-pinterest"><span>' . esc_html__('Pinterest', 'magazilla') . '</span></a>' . "\n";
	}

	if ($google == 'true') {
		$out .= '<a target="_blank" href="https://plus.google.com/share?url=' . $page_link . '" class="google cmsmasters-icon-google"><span>' . esc_html__('Google+', 'magazilla') . '</span></a>' . "\n";
	}

	if ($reddit == 'true') {
		$out .= "<a class='reddit cmsmasters-icon-custom-reddit' target=\"_blank\" href=\"http://www.reddit.com/submit?url={$page_link}&title={$social_title}\"><span>" . esc_html__('Reddit', 'magazilla') . "</span></a>" . "\n";
	}

	if ($stumbleupon == 'true') {
		$out .= "<a class='stumbleupon cmsmasters-icon-stumbleupon' target=\"_blank\" href=\"http://www.stumbleupon.com/submit?url={$page_link}&title={$social_title}\"><span>" . esc_html__('Mix', 'magazilla') . "</span></a>" . "\n";
	}

	if ($tumblr == 'true') {
		$out .= "<a class='tumblr cmsmasters-icon-tumblr' target=\"_blank\" href=\"http://www.tumblr.com/share/link?url={$page_link}\"><span>" . esc_html__('Tumblr', 'magazilla') . "</span></a>" . "\n";
	}
	
	$out .= '</div>' . "\n";
}

echo magazilla_return_content($out);