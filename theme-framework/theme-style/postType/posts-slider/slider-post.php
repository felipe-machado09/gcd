<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Posts Slider Post Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && magazilla_slider_post_check_exc_cont('post')) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$views = in_array('views', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;
$image = in_array('image', $cmsmasters_metadata) ? true : false;
$has_post_thumbnail = has_post_thumbnail();


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Posts Slider Post Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_post'); ?>>
	<div class="cmsmasters_slider_post_outer<?php echo esc_html($image ? "" : " image_check") ?>">
	<?php
		if ($has_post_thumbnail && $image) {
			echo '<div class="cmsmasters_slider_post_img_wrap">';
				magazilla_thumb_rollover(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, false, false, false, false, false, false, false, true, false, false);
			
				$categories ? magazilla_get_slider_post_category(get_the_ID(), 'category', 'post') : '';
			echo '</div>';
		}

		if ($title || $author || $excerpt || $likes || $comments || $more) {
			echo '<div class="cmsmasters_slider_post_inner">';
				if (
					(
						!$has_post_thumbnail || 
						!$image
					) && 
					$categories
				) {
					magazilla_get_slider_post_category(get_the_ID(), 'category', 'post');
				}

				$date ? magazilla_get_slider_post_date('post') : '';

				$title ? magazilla_slider_post_heading(get_the_ID(), 'post', 'h4') : '';
				
				$excerpt ? magazilla_slider_post_exc_cont('post') : '';			
				
				if ($author || $views || $comments || $likes) {
					echo '<footer class="cmsmasters_slider_post_footer entry-meta">';
						
						$author ? magazilla_get_slider_post_author('post', true, true) : '';
						
						$views ? magazilla_slider_post_views('post') : '';
						
						$comments ? magazilla_get_slider_post_comments('post') : '';
						
						$likes ? magazilla_slider_post_like('post') : '';
						
					echo '</footer>';
				}	
				
				$more ? magazilla_slider_post_more(get_the_ID()) : '';
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!-- Finish Posts Slider Post Article  -->

