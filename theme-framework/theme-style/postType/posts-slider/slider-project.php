<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Posts Slider Article Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_project_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && magazilla_slider_post_check_exc_cont('project')) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;
$comments = (comments_open() && in_array('comments', $cmsmasters_metadata)) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);
$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Posts Slider Article Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_project'); ?>>
	<div class="cmsmasters_slider_project_outer">
	<?php 
		if ($title || $categories || $excerpt || $likes || $comments) {
			echo '<div class="cmsmasters_slider_project_inner_wrap">' . 
					'<div class="cmsmasters_slider_project_inner">';
					if ($categories) {
						echo '<div class="cmsmasters_slider_project_cont_info entry-meta">';
							
							magazilla_get_slider_post_category(get_the_ID(), 'pj-categs', 'project');
							
						echo '</div>';
					}

					if ($likes || $comments || $title || $excerpt) {
						echo '<div class="cmsmasters_slider_project_meta entry-meta">';
							$excerpt ? magazilla_slider_post_exc_cont('project') : '';

							if($likes || $comments || $date){
								echo '<div class="cmsmasters_slider_project_interface">';

									($date) ? magazilla_get_project_date() : "";

									($likes) ? magazilla_slider_post_like('project') : '';

									($comments) ? magazilla_get_slider_post_comments('project') : '';

								echo "</div>";
							}

							($title) ? magazilla_slider_post_heading(get_the_ID(), 'project', 'h3', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, true, $cmsmasters_project_link_target) : '';
							
						echo '</div>';
					}

				echo '</div>' . 
			'</div>';
		}
		
		
		magazilla_thumb_rollover(get_the_ID(), 'cmsmasters-blog-masonry-thumb', false, false, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
	?>
	</div>
</article>
<!-- Finish Posts Slider Article Article  -->

