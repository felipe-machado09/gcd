<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Profile Vertical Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

?>
<!-- Start Profile Vertical Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_profile_vertical'); ?>>
	<div class="profile_outer">
		<?php 
		if (has_post_thumbnail()) {
			echo '<div class="profile_image_wrap">';
			
				magazilla_thumb(get_the_ID(), 'cmsmasters-square-thumb', true, false, false, false, false);
	
			echo '</div>'; 
		}
	
		echo '<div class="profile_inner">';
		
		magazilla_profile_social_icons($cmsmasters_profile_social, $profile_id);
		
		if ($cmsmasters_profile_subtitle) {
			magazilla_profile_heading(get_the_ID(), 'h3', $cmsmasters_profile_subtitle, 'h5');			
		} else {
			magazilla_profile_heading(get_the_ID(), 'h3');
		}
		
		magazilla_profile_exc_cont();
		
	echo '</div>';
	?>
	</div>
</article>
<!-- Finish Profile Vertical Article  -->

