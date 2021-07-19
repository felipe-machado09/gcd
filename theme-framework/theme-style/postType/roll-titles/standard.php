<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Roll Titles Standard Template
 * Created by CMSMasters
 * 
 */

?>

<!-- Start Standard Article  -->

<article <?php post_class("cmsmasters_roll_titles_post"); ?>>
	<?php
		$title = cmsmasters_title(get_the_ID(), false);

		echo '<h4 class="cmsmasters_slider_post_title entry-title">' . 
			'<a title="' . $title . '" href="' . esc_url(get_permalink()) . '">' . $title . '</a>' . 
		'</h4>';

	?>
</article>
<!-- Finish Standard Article  -->

