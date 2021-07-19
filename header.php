<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version 	1.0.0
 * 
 * Website Header Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = magazilla_get_global_options();


?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="cmsmasters_html">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>" />
<?php wp_head(); ?>
    <!-- Font Awesome v4.7.0 -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
    <link rel="shortcut icon" href="https://www.gcd.com.br/favicon.ico">
    <link rel="icon" type="image/icon" href="https://www.gcd.com.br/favicon.ico">
 <?php 
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "thumbnail" );
	$thumbnailout = $thumbnail[0];
	if($thumbnailout){
		echo '<meta property="og:image" content="'.$thumbnailout.'" /><meta property="og:image:width" content="150" /><meta property="og:image:height" content="150" />';
	}
 ?> 

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157350291-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-157350291-1');
</script>
  
</head>
<body <?php body_class(); ?>>
<?php do_action('cmsmasters_before_body', $cmsmasters_option); ?>

<?php magazilla_get_header_search_form($cmsmasters_option); ?>

<!-- Start Page -->
<div id="page" class="<?php magazilla_get_page_classes($cmsmasters_option); ?>hfeed site">
<?php do_action('cmsmasters_before_page', $cmsmasters_option); ?>

<!--  Start Main  -->
<div id="main">

<!--  Start Header  -->
<header id="header">
	<?php 
	do_action('cmsmasters_before_header', $cmsmasters_option);
	
	get_template_part('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/template/header-top');
	
	get_template_part('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/template/header-mid');
	
	get_template_part('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/template/header-bot');
	
	do_action('cmsmasters_after_header', $cmsmasters_option);
	?>
</header>
<!--  Finish Header  -->


<!--  Start Middle  -->
<div id="middle">
<?php 
magazilla_page_heading();


list($cmsmasters_layout, $cmsmasters_page_scheme) = magazilla_theme_page_layout_scheme();


echo '<div class="middle_inner' . (($cmsmasters_page_scheme != 'default') ? ' cmsmasters_color_scheme_' . $cmsmasters_page_scheme : '') . '">' . "\n" . 
	'<div class="content_wrap ' . $cmsmasters_layout . '">' . "\n\n";

