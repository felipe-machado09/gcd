<?php 
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Template Functions
 * Created by CMSMasters
 * 
 */


/* Get Previous & Next Post Links Function */
function magazilla_prev_next_posts($order_cat = false, $tax_name = 'category') {
	$cmsmasters_post_type = get_post_type();

	$published_posts = wp_count_posts($cmsmasters_post_type)->publish;
	$cmsmasters_post_text = (
		($cmsmasters_post_type == "post" 	? esc_html__('', 'magazilla') :
		($cmsmasters_post_type == "profile" ? esc_html__('', 'magazilla') :
		($cmsmasters_post_type == "project" ? esc_html__('', 'magazilla') : $cmsmasters_post_type)))
	);
	
	
	$prev_post = get_adjacent_post($order_cat, '', true, $tax_name);
	$next_post = get_adjacent_post($order_cat, '', false, $tax_name);
	
	
	if ($published_posts > 1) {
		echo '<aside class="post_nav">';
		
		if($prev_post) {
			echo '<div class="cmsmasters_prev_post">' . 
				'<a alt="' . cmsmasters_title($prev_post->ID, false) . '" title="' . cmsmasters_title($prev_post->ID, false) . '" href="' . get_permalink($prev_post->ID) . '">' . 
					'<div class="post_nav_cont">' . 
						'<span class="cmsmasters-icon-custom-arrow-left">' . esc_html__('Anterior', 'magazilla') . " " . $cmsmasters_post_text . '</span>' . 
						'<h4 class="post_nav_title">' . ($prev_post->post_title ? $prev_post->post_title : $prev_post->post_name) . '</h4>' . 
					'</div>' . 
				'</a>' . 
			'</div>';
		}
		
		if($next_post) {
			echo '<div class="cmsmasters_next_post">' . 
				'<a alt="' . cmsmasters_title($next_post->ID, false) . '" title="' . cmsmasters_title($next_post->ID, false) . '" href="' . get_permalink($next_post->ID) . '">' .
					'<div class="post_nav_cont">' . 
						'<span class="cmsmasters-icon-custom-arrow-right">' . esc_html__('Próxima', 'magazilla') ." " .  $cmsmasters_post_text . '</span>' . 
						'<h4 class="post_nav_title">' . ($next_post->post_title ? $next_post->post_title : $next_post->post_name) . '</h4>' . 
					'</div>' . 
				'</a>' . 
			'</div>';
		}
		
		echo '</aside>';
	}
}



/* Get Sharing Box Function */
function magazilla_sharing_box($title_box = false, $tag = 'h3', $info = false) {
	if (class_exists('Cmsmasters_Content_Composer')) {
		echo cmsmasters_sharing_icons($title_box, $tag, $info);
	}
}

/* Get Sharing Box Function */
function cmsmasters_sharing_icons($title_box = false, $tag = 'h3', $info) {
	$page_link = urlencode(get_permalink());
	$post_type =get_post_type();
	$cmsmasters_option = magazilla_get_global_options();

	$out = "";
	
	$social_title = cmsmasters_title(get_the_ID(), false);
	
	$website_name = get_bloginfo('name');
	$website_description = get_bloginfo('description');
	
	
	if (has_post_thumbnail() && get_post_format() != '' || get_post_type() != 'post' ) {
		$post_img_id = get_post_thumbnail_id();
		
		$post_img_url = wp_get_attachment_url($post_img_id);
		
		$pinterest_img = urlencode($post_img_url);
	} else {
		preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', do_shortcode(get_the_content()), $img_matches);
		
		
		if (!empty($img_matches[1][0])) {
			$first_img = $img_matches[1][0];
		} else {
			$first_img = get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_CONTENT_COMPOSER_THEME_STYLE . '/img/logo.png';
		}
		
		
		$pinterest_img = urlencode($first_img);
	}
	

	if($info) {
		$info = '<div class="cmsmasters_info_wrap cmsmasters-icon-share-3">' .
			magazilla_get_post_share(false);

			if($cmsmasters_option['magazilla' . '_blog_post_view']) {
				$info .= '<span class="cmsmasters_views_wrap">' .
					magazilla_get_post_views('post', false) . 
					'<span class="name">' . esc_html__('visualizações', 'magazilla') . '</span>' .
				'</span>';
			}

		$info .= '</div>';
	} else {
		$info = '';
	}

	$post_type_option = ($post_type == "post" ? "_blog_post" : ($post_type == "project" ? "_portfolio_project" : ($post_type == "profile" ? "_profile_post" : "_blog_post")));

	$share_box_facebook = isset($cmsmasters_option['magazilla' . $post_type_option . '_share_box_facebook']) ? $cmsmasters_option['magazilla' . $post_type_option . '_share_box_facebook'] : true;
	$share_box_twitter = isset($cmsmasters_option['magazilla' . $post_type_option . '_share_box_twitter']) ? $cmsmasters_option['magazilla' . $post_type_option . '_share_box_twitter'] : true;
	$share_box_linkedin = isset($cmsmasters_option['magazilla' . $post_type_option . '_share_box_linkedin']) ? $cmsmasters_option['magazilla' . $post_type_option . '_share_box_linkedin'] : true;
	$share_box_pinterest = isset($cmsmasters_option['magazilla' . $post_type_option . '_share_box_pinterest']) ? $cmsmasters_option['magazilla' . $post_type_option . '_share_box_pinterest'] : true;
	$share_box_gplus = isset($cmsmasters_option['magazilla' . $post_type_option . '_share_box_gplus']) ? $cmsmasters_option['magazilla' . $post_type_option . '_share_box_gplus'] : true;
	$share_box_reddit = isset($cmsmasters_option['magazilla' . $post_type_option . '_share_box_reddit']) ? $cmsmasters_option['magazilla' . $post_type_option . '_share_box_reddit'] : true;
	$share_box_stumbleupon = isset($cmsmasters_option['magazilla' . $post_type_option . '_share_box_stumbleupon']) ? $cmsmasters_option['magazilla' . $post_type_option . '_share_box_stumbleupon'] : true;
	$share_box_tumblr = isset($cmsmasters_option['magazilla' . $post_type_option . '_share_box_tumblr']) ? $cmsmasters_option['magazilla' . $post_type_option . '_share_box_tumblr'] : true;
	
	$out .= "<aside class=\"share_posts cmsmasters_column_sticky\">
		" . ($title_box ? "<{$tag} class=\"share_posts_title\">{$title_box}</{$tag}>" : "") . "

	<div class=\"share_posts_inner clearfix\">";
		$out .= ((isset($share_box_facebook) && $share_box_facebook != "") ? "<a class='facebook cmsmasters-icon-facebook-1' href=\"https://www.facebook.com/sharer/sharer.php?display=popup&u={$page_link}\"><span>" . esc_html__('Facebook', 'magazilla') . "</span></a>" : "");

		$out .= ((isset($share_box_twitter) && $share_box_twitter != "") ? "<a class='twitter cmsmasters-icon-twitter' href=\"https://twitter.com/intent/tweet?text=" . urlencode(html_entity_decode(sprintf(esc_attr__("Check out '%s' on %s website", 'magazilla'), $social_title, $website_name), ENT_QUOTES, 'UTF-8')) . "&url={$page_link}\"><span>" . esc_html__('Twitter', 'magazilla') . "</span></a>" : "");

		$out .= ((isset($share_box_linkedin) && $share_box_linkedin != "") ? "<a class='linkedin cmsmasters-icon-linkedin-1' href=\"https://www.linkedin.com/shareArticle?mini=true&url={$page_link}&title=$social_title&summary={$website_description}&source={$website_name}\"><span>" . esc_html__('linkedin', 'magazilla') . "</span></a>" : "");

		$out .= ((isset($share_box_pinterest) && $share_box_pinterest != "") ? "<a class='pinterest cmsmasters-icon-custom-pinterest' href=\"https://pinterest.com/pin/create/button/?url={$page_link}&media={$pinterest_img}&description={$social_title}\"><span>" . esc_html__('Pinterest', 'magazilla') . "</span></a>" : "");

		$out .= ((isset($share_box_gplus) && $share_box_gplus != "") ? "<a class='google cmsmasters-icon-gplus' href=\"https://plus.google.com/share?url={$page_link}\"><span>" . esc_html__('Google+', 'magazilla') . "</span></a>" : "");

		$out .= ((isset($share_box_reddit) && $share_box_reddit != "") ? "<a class='reddit cmsmasters-icon-custom-reddit' href=\"http://www.reddit.com/submit?url={$page_link}&title={$social_title}\"><span>" . esc_html__('Reddit', 'magazilla') . "</span></a>" : "");

		$out .= ((isset($share_box_stumbleupon) && $share_box_stumbleupon != "") ? "<a class='stumbleupon cmsmasters-icon-stumbleupon' href=\"http://www.stumbleupon.com/submit?url={$page_link}&title={$social_title}\"><span>" . esc_html__('Mix', 'magazilla') . "</span></a>" : "");
		
		$out .= ((isset($share_box_tumblr) && $share_box_tumblr != "") ? "<a class='tumblr cmsmasters-icon-tumblr' href=\"http://www.tumblr.com/share/link?url={$page_link}\"><span>" . esc_html__('Tumblr', 'magazilla') . "</span></a>" : "");
	$out .= "</div>".$info."</aside>";

	return $out;
}



/* Get About Author Box Function */
function magazilla_author_box($title_box = false, $tag = 'h3', $author_tag = 'h4') {
	$user_email = get_the_author_meta('user_email');
	
	
	$user_first_name = get_the_author_meta('first_name') ? get_the_author_meta('first_name') : false;
	
	$user_last_name = get_the_author_meta('last_name') ? get_the_author_meta('last_name') : false;
	
	$user_url = get_the_author_meta('url') ? get_the_author_meta('url') : false;
	
	$user_description = get_the_author_meta('description') ? get_the_author_meta('description') : false;
	
	
	if ($user_description) {
		echo '<aside class="about_author">';
		
		
		if ($title_box) {
			echo '<' . esc_html($tag) . ' class="about_author_title"><span>' . esc_html($title_box) . '<span></' . esc_html($tag) . '>';
		}
		
		
		echo '<div class="about_author_inner">';
		
		
		$out = '';
		
		
		if ($user_first_name) {
			$out .= $user_first_name;
		}
		
		
		if ($user_first_name && $user_last_name) {
			$out .= ' ' . $user_last_name;
		} elseif ($user_last_name) {
			$out .= $user_last_name;
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ' (';
		}
		
		
		if (get_the_author()) {
			$out .= get_the_author();
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ')';
		}
		
		
		echo '<figure class="about_author_avatar">' . 
			get_avatar($user_email, 80, get_option('avatar_default')) . 
		'</figure>' . 
		'<div class="about_author_cont">';
		
		
		if ($out != '') {
			echo '<' . esc_html($author_tag) . ' class="about_author_cont_title vcard author"><span class="fn" rel="author">' . esc_html($out) . '</span></' . esc_html($author_tag) . '>';
		}
		
		
		echo '<p>' . str_replace("\n", '<br />', $user_description) . '</p>';
		
		
		if ($user_url) {
			echo '<a href="' . esc_url($user_url) . '" title="' . esc_attr(get_the_author()) . ' ' . esc_attr__('website', 'magazilla') . '" target="_blank">' . esc_html($user_url) . '</a>';
		}
		
		
		echo '</div>' . 
			'</div>' . 
		'</aside>';
	}
}



/* Get Related, Popular & Recent Posts Function */
function magazilla_related($tag = 'h3', $title = '', $no_title = '', $box_type = false, $tgsarray = null, $items_number = 5, $pause_time = 5, $type = 'post', $taxonomy = null) {
	if ( 
		($box_type == 'related' && !empty($tgsarray)) || 
		$box_type == 'popular' || 
		$box_type == 'recent' 
	) {
		$autoplay = ((int) $pause_time > 0) ? $pause_time * 1000 : 'false';
		
		
		$r_args = array( 
			'posts_per_page' => $items_number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post__not_in' => array(get_the_ID()), 
			'post_type' => $type 
		);
		
		
		if ($box_type == 'related' && !empty($tgsarray)) {
			if ($type == 'post') {
				$r_args['tag__in'] = $tgsarray;
			} elseif ($type != 'post' && $taxonomy) {
				$r_args['tax_query'] = array( 
					array( 
						'taxonomy' => $taxonomy, 
						'field' => 'term_id', 
						'terms' => $tgsarray 
					) 
				);
			}
		} elseif ($box_type == 'popular') {
			$r_args['order'] = 'DESC';
			
			$r_args['orderby'] = 'meta_value_num';
			
			$r_args['meta_key'] = 'cmsmasters_likes';
		}
		
		
		$r_query = new WP_Query($r_args);
		
		
		if ($r_query->have_posts()) {
			echo "<aside class=\"cmsmasters_single_slider\">" . 
				"<" . esc_html($tag) . " class=\"cmsmasters_single_slider_title\"><span>" . 
					($title != '' ? esc_html($title) : esc_html__('More items', 'magazilla')) . 
				"</span></" . esc_html($tag) . ">" . 
				'<div class="cmsmasters_single_slider_inner">' . 
					'<div' . 
						' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
						' class="cmsmasters_owl_slider"' . 
						' data-single-item="false"' . 
						' data-pagination="false"' . 
						' data-auto-play="' . esc_attr($autoplay) . '"' . 
					'>';
						
						while ($r_query->have_posts()) : $r_query->the_post();
							echo "<div class=\"cmsmasters_owl_slider_item cmsmasters_single_slider_item\">
								<div class=\"cmsmasters_single_slider_item_outer\">";
									
									magazilla_get_post_category(get_the_ID(), "category");
									magazilla_thumb(get_the_ID(), 'cmsmasters-blog-masonry-thumb', true, false, true, false, true, true, false, false, false, 'cmsmasters_theme_icon_image');

									echo "<div class=\"cmsmasters_single_slider_item_inner\">" .
											magazilla_get_post_date('page', "post", false) .
										"<h4 class=\"cmsmasters_single_slider_item_title\">
											<a href=\"" . esc_url(get_permalink()) . "\">" . cmsmasters_title(get_the_ID(), false) . "</a>
										</h4>
									</div>
								</div>
							</div>";
						endwhile;
						
					echo "</div>
				</div>
			</aside>";
		}
		
		
		wp_reset_postdata();
	}
}



/* Get Posts Author Avatar Function */
function magazilla_author_avatar($template_type = 'page') {
	$user_email = get_the_author_meta('user_email') ? get_the_author_meta('user_email') : false;
	
	
	if ($template_type == 'page') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	} else if ($template_type == 'post') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	}
}



/* Get Pingbacks & Trackbacks Function */
function magazilla_get_pings($id, $tag = 'h3') {
	$out = '';
	
	$pings = get_comments(array(
		'type' => 		'pings',
		'post_id' => 	$id
	));
	
	
	if (sizeof($pings) > 0) {
		$out .= '<aside class="cmsmasters_pings_list">' . "\n" .
			'<' . esc_html($tag) . '>' . esc_html__('Trackbacks and Pingbacks', 'magazilla') . '</' . esc_html($tag) . '>' . "\n" .
			'<div class="cmsmasters_pings_wrap">' . "\n" .
				'<ol class="pingslist">' . "\n";
		
		
		$out .= wp_list_comments(array(
			'short_ping' => 	true,
			'echo' => 			false
		), $pings);
		
		
		$out .= '</ol>' . "\n" .
			'</div>' . "\n" .
		'</aside>';
	}
	
	
	return $out;
}

