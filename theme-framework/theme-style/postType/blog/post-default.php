<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Post Default Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();

$title = (in_array('title', $cmsmasters_post_metadata) || is_home()) ? true : false;
$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$content_side = (in_array('content_side', $cmsmasters_post_metadata) || is_home()) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || (is_home() && CMSMASTERS_CONTENT_COMPOSER)) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;
$views = (in_array('views', $cmsmasters_post_metadata) || is_home()) ? true : false;

$cmsmasters_post_format = get_post_format();

$has_post_thumbnail = has_post_thumbnail();

$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
$css_class = 'cmsmasters_post_default' . ($content_side ? " content_side" : "");
?>
<!-- Start Post Default Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class($css_class); ?>>
	<div class="cmsmasters_post_cont_wrap">
		<?php
			if (!post_password_required()) {
				// IF IT IS VIDEO FORMAT
				if ($cmsmasters_post_format == 'video') {
					$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
					$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
	
					echo '<div class="cmsmasters_video_preview">';

						magazilla_thumb(get_the_ID(), 'cmsmasters-project-masonry-thumb', true, false, false, false, false, true, false);
						magazilla_get_post_category(get_the_ID(), 'category', 'post');

						echo '<div class="cmsmasters_video_preview_bottom">';
						if ($date) {
							echo '<div class="cmsmasters_post_info clearfix entry-meta">';
								$date ? magazilla_get_post_date('page', 'default') : '';
							echo '</div>';
						}
						$title ? magazilla_post_heading(get_the_ID(), 'h3') : "";
						echo "</div>";

					echo "</div>";

				} elseif ( $has_post_thumbnail ) {

					echo '<div class="cmsmasters_image_preview">';//cmsmasters_post_img_wrap
						/* Se houver alguma imagem cadastrada na 'IMAGEM DESTACADA' ou se o formato escolhido for IMAGE */
						if ( (isset($cmsmasters_featured) && $cmsmasters_featured == true) || $cmsmasters_post_format == 'image') {
							//$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
							//magazilla_post_type_image(get_the_ID(), $cmsmasters_post_image_link, "cmsmasters-masonry-thumb");
							magazilla_thumb(get_the_ID(), 'cmsmasters-project-masonry-thumb', true, false, false, false, false, true, false);

						/* Se o formato escolhido for GALERIA */
						} elseif ($cmsmasters_post_format == 'gallery') {
							$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
							magazilla_post_type_slider(get_the_ID(), $cmsmasters_post_images, 'cmsmasters-masonry-thumb');

						} elseif ($has_post_thumbnail) {
							magazilla_thumb(get_the_ID(), 'cmsmasters-project-masonry-thumb', true, false, false, false, false, true, false);
						} 
						
						$categories ? magazilla_get_post_category(get_the_ID(), 'category', 'page') : '';
						echo '<div class="cmsmasters_image_preview_bottom">';
							if ($date) {
								echo '<div class="cmsmasters_post_info clearfix entry-meta">';
									$date ? magazilla_get_post_date('page', 'default') : '';
								echo '</div>';
							}

							$title ? magazilla_post_heading(get_the_ID(), 'h3') : "";
						echo "</div>";


					echo '</div>';
				}
			}
		?>

		<div class="cmsmasters_post_cont">
			<?php
			/*
			if( $cmsmasters_post_format != 'video' ){
				//return;
				if ($date) {
					echo '<div class="cmsmasters_post_info clearfix entry-meta">';
						
						$date ? magazilla_get_post_date('page', 'default') : '';
						
					echo '</div>';
				}

				if(!$has_post_thumbnail && $categories){
					magazilla_get_post_category(get_the_ID(), 'category', 'page');
				}

				$title ? magazilla_post_heading(get_the_ID(), 'h2') : "";
			}
			*/
			if ($excerpt) {
				magazilla_post_exc_cont(100);
			}
			
			
			if ($cmsmasters_post_format == 'audio') {
				$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
				
				magazilla_post_type_audio($cmsmasters_post_audio_links);
			}
			
			
			if ($more || $author || $views || $comments || $likes) {
				echo '<footer class="cmsmasters_post_footer entry-meta">';

					echo '<div class="cmsmasters_post_interface clearfix ">';
						$author ? magazilla_get_post_author('page', true, true) : '';
						
						$views ? magazilla_get_post_views('page') : '';
						
						$comments ? magazilla_get_post_comments('page') : '';
						
						$likes ? magazilla_get_post_likes('page') : '';
					echo "</div>";
					
					$more ? magazilla_post_more(get_the_ID()) : '';

				echo '</footer>';
			}

			?>
		</div>
	</div>
</article>
<!-- Finish Post Default Article  -->

