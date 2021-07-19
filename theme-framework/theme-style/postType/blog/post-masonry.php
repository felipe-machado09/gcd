<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.2
 * 
 * Post Masonry Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();

$title = (in_array('title', $cmsmasters_post_metadata) || is_home()) ? true : false;
$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$views = (in_array('views', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$post_sort_categs = get_the_terms(0, 'category');

if ($post_sort_categs != '') {
	$post_categs = '';
	
	foreach ($post_sort_categs as $post_sort_categ) {
		$post_categs .= ' ' . $post_sort_categ->slug;
	}
	
	$post_categs = ltrim($post_categs, ' ');
}


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Post Masonry Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_masonry'); ?> data-category="<?php echo esc_attr($post_categs); ?>">
	<div class="cmsmasters_post_cont_wrap">
		<?php
			if (!post_password_required()) {
				if ($cmsmasters_post_format == 'video') {
					$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
					$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
					$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
					
					magazilla_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links, 'cmsmasters-project-masonry-thumb');
				} elseif (
					has_post_thumbnail() || 
					$categories
				) {
					echo '<div class="cmsmasters_post_img_wrap">';
						if ($cmsmasters_post_format == 'image') {
							$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
							
							magazilla_post_type_image(get_the_ID(), $cmsmasters_post_image_link, 'cmsmasters-project-masonry-thumb');
						} elseif ($cmsmasters_post_format == 'gallery') {
							$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
							
							$slider_data = ' data-auto-height="false"';
							
							magazilla_post_type_slider(get_the_ID(), $cmsmasters_post_images, 'cmsmasters-project-masonry-thumb', false, $slider_data);
						} elseif (has_post_thumbnail()) {
							magazilla_thumb(get_the_ID(), 'cmsmasters-project-masonry-thumb', true, false, false, false, true, true, false);
						}
						
						$categories ? magazilla_get_post_category(get_the_ID(), 'category', 'page') : '';
						
					echo '</div>';
				}
			}
		?>

		<div class="cmsmasters_post_cont">
			<?php
			if ($cmsmasters_post_format == 'video') {
				$categories ? magazilla_get_post_category(get_the_ID(), 'category', 'page') : '';
			}
			
			if($views || $comments || $likes || $date){
				echo '<div class="cmsmasters_post_info clearfix">';	

					$date ? magazilla_get_post_date('page', 'default') : '';

					$views ? magazilla_get_post_views('page') : '';
					
					$comments ? magazilla_get_post_comments('page') : '';
					
					$likes ? magazilla_get_post_likes('page') : '';
				echo "</div>";
			}
			
			$title ? magazilla_post_heading(get_the_ID(), 'h3') : "";
			
			if ($cmsmasters_post_format == 'audio') {
				$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
				
				magazilla_post_type_audio($cmsmasters_post_audio_links);
			}
			
			
			if ($excerpt) {
				magazilla_post_exc_cont();
			}
			
			
			if ($more || $author) {
				echo '<footer class="cmsmasters_post_footer entry-meta">';

					echo '<div class="cmsmasters_post_interface clearfix ">';
						$author ? magazilla_get_post_author('page', true, true) : '';
					echo "</div>";
					
					$more ? magazilla_post_more(get_the_ID()) : '';

				echo '</footer>';
			}
			?>
		</div>
	</div>
</article>
<!-- Finish Post Masonry Article  -->

