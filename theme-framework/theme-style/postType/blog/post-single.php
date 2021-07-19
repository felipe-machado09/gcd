<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Post Single Template
 * Created by CMSMasters
 * 
 * Edited by Rafael Kellows
 * @version		1.0.1
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "thumbnail" );
$thumbnailout = $thumbnail[0];
echo $thumbnailout;
 */



$cmsmasters_option = magazilla_get_global_options();

$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

list($cmsmasters_layout) = magazilla_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-masonry-thumb';
} else {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-thumb';
}


$cmsmasters_post_format = get_post_format();

$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);

$cmsmasters_post_author_box = get_post_meta(get_the_ID(), 'cmsmasters_post_author_box', true);

$cmsmasters_post_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_post_more_posts', true);

?>
<!-- Start Post Single Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	
	if (
		$cmsmasters_option['magazilla' . '_blog_post_cat'] || 
		$cmsmasters_option['magazilla' . '_blog_post_view'] || 
		$cmsmasters_option['magazilla' . '_blog_post_like'] || 
		$cmsmasters_post_title == 'true' || 
		$cmsmasters_option['magazilla' . '_blog_post_comment'] ||
		$cmsmasters_option['magazilla' . '_blog_post_author'] || 
		$cmsmasters_option['magazilla' . '_blog_post_date']
	) {
		echo '<div class="cmsmasters_post_cont_info_top entry-meta">';
			
			magazilla_get_post_category(get_the_ID(), 'category', 'post');
		
	
			if ($cmsmasters_post_title == 'true') {
				magazilla_post_title_nolink(get_the_ID(), 'h1');
			}
			/* 
			//////// Line Inserted
			//////// It'll verify if author box is checked | If yes, it'll shows author and post infos
			*/
			if (
				($cmsmasters_option['magazilla' . '_blog_post_view'] || $cmsmasters_option['magazilla' . '_blog_post_like'] || $cmsmasters_option['magazilla' . '_blog_post_comment']) && 
				($cmsmasters_post_author_box == 'true')
			) {
				
				/*
				echo '<div class="cmsmasters_post_cont_info_meta">';
					
					magazilla_get_post_views('post');
				
					magazi
					lla_get_post_comments('post');
				
					magazilla_get_post_likes('post');
					
				echo '</div>';*/

			}
			magazilla_get_post_date('post');
			/*
			//////// Line Inserted
			//////// It'll verify if author box is checked | If yes, it'll shows author and post infos
			*/

			if (
				($cmsmasters_option['magazilla' . '_blog_post_author'] || $cmsmasters_option['magazilla' . '_blog_post_date']) &&
				($cmsmasters_post_author_box == 'true')
			){
				echo '<div class="cmsmasters_post_cont_info_bottom entry-meta">';
					magazilla_get_post_date('post');
					if (
						$cmsmasters_option['magazilla' . '_blog_post_author'] || 
						$cmsmasters_option['magazilla' . '_blog_post_date']
					) {
						/*
						echo '<div class="cmsmasters_post_cont_about_author entry-meta">';
							
							echo '<div class="cmsmasters_post_cont_about_author_info entry-meta">';
						
								magazilla_get_post_author_avatar();
							
								magazilla_get_post_author('post');	
						
								magazilla_get_post_date('post');
							
							echo '</div>';
						
						echo '</div>';*/
					}
					
				echo '</div>';
			}
			
		echo '</div>';
	}


	if ($cmsmasters_post_format == 'image') {
		$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
		
		magazilla_post_type_image(get_the_ID(), $cmsmasters_post_image_link, $cmsmasters_image_thumb_size);

	} elseif ($cmsmasters_post_format == 'gallery') {
		$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
		
		magazilla_post_type_slider(get_the_ID(), $cmsmasters_post_images, $cmsmasters_image_thumb_size, true);
	} elseif ($cmsmasters_post_format == 'video') {
		$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
		$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
		$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
		
		magazilla_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'audio') {
		$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
		
		magazilla_post_type_audio($cmsmasters_post_audio_links);
	} elseif ($cmsmasters_post_format == '' && !post_password_required() && has_post_thumbnail()) {
		$cmsmasters_post_image_show = get_post_meta(get_the_ID(), 'cmsmasters_post_image_show', true);
		
		if ($cmsmasters_post_image_show != 'true') {
			magazilla_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'cmsmasters_open_post_img', false, false, false, true, false);
		}
 	}
	
	if (get_the_content() != '' || $cmsmasters_post_sharing_box == 'true') {
		echo '<div class="cmsmasters_post_content_wrap">';

			if ($cmsmasters_post_sharing_box == 'true') {
				magazilla_sharing_box('', 'h2', true);
			}

			echo '<div class="cmsmasters_post_content entry-content">';

			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'magazilla') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => '<span>', 
				'link_after' => '</span>' 
			));
			
			echo '</div>';
		echo '</div>';
	}
	
	
	if (
		$cmsmasters_option['magazilla' . '_blog_post_tag']
	) {
		echo '<footer class="cmsmasters_post_footer entry-meta">';
			
			magazilla_get_post_tags();
			
		echo '</footer>';
	}
	?>
</article>
<!-- Finish Post Single Article  -->
<?php

if ($cmsmasters_option['magazilla' . '_blog_post_nav_box']) {
	$order_cat = (isset($cmsmasters_option['magazilla' . '_blog_post_nav_order_cat']) ? $cmsmasters_option['magazilla' . '_blog_post_nav_order_cat'] : false);
	
	magazilla_prev_next_posts($order_cat, 'category');
}

if (get_the_tags()) {
	$tgsarray = array();
	
	foreach (get_the_tags() as $tagone) {
		$tgsarray[] = $tagone->term_id;
	}
} else {
	$tgsarray = '';
}


if ($cmsmasters_post_more_posts != 'hide') {
	magazilla_related( 
		'h3', 
		esc_html__('More posts', 'magazilla'), 
		esc_html__('No posts found', 'magazilla'), 
		$cmsmasters_post_more_posts, 
		$tgsarray, 
		$cmsmasters_option['magazilla' . '_blog_more_posts_count'], 
		$cmsmasters_option['magazilla' . '_blog_more_posts_pause'], 
		'post' 
	);
}


if ($cmsmasters_post_author_box == 'true') {
	magazilla_author_box(esc_html__('About author', 'magazilla'), 'h3', 'h4');
}


echo magazilla_get_pings(get_the_ID(), 'h3');


comments_template(); 


