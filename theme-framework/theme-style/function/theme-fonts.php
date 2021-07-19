<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version 	1.0.4
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function magazilla_theme_fonts() {
	$cmsmasters_option = magazilla_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version 	1.0.4
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/
	
	/* Start Content Font */
	body, 
	.cmsmasters_breadcrumbs *, 
	.cmsmasters_footer_default .footer_custom_html, 
	.about_author .about_author_cont, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter_subtitle, 
	.cmsmasters_icon_list_items li h4, 
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content a, 
	.cmsmasters_notice .notice_content, 
	.cmsmasters_pricing_table .feature_list li, 
	.cmsmasters_pricing_table .feature_list li a, 
	.error .error_subtitle, 
	.cmsmasters_sitemap_wrap a, 
	.widget_custom_contact_info_entries a, 
	.cmsmasters_open_post .cmsmasters_post_cont_about_author, 
	.cmsmasters_open_post .cmsmasters_post_cont_about_author a,
	.cmsmasters_open_post .cmsmasters_post_content, 
	.cmsmasters_open_post .cmsmasters_post_content a:not(.wp-block-button__link), 
	.widget_nav_menu ul > li a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont a,
	.widget_pages ul li a,
	.widget_categories ul li a,
	.widget_archive ul li a,
	.widget_meta ul li a,
	.widget_recent_comments ul li a,
	.widget_recent_entries ul li a,
	.widget_rss ul li a,
	.cmsmasters_quotes_grid .cmsmasters_quote_content,
	div.sp-location-weather-widget .weather-region,
	div.sp-location-weather-widget .weather-date,
	.cmsmasters_open_post .cmsmasters_post_content table,
	#page .cmsmasters_open_post .cmsmasters_post_content table a {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_content_font_google_font']) . $cmsmasters_option['magazilla' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_content_font_font_style'] . ";
	}
	
	.widget_nav_menu ul > li a,
	.widget_pages ul li a,
	.widget_categories ul li a,
	.widget_archive ul li a,
	.widget_meta ul li a,
	.widget_recent_comments ul li a,
	.widget_rss ul li a,
	.widget_recent_entries ul li a{
		font-size:" . ($cmsmasters_option['magazilla' . '_content_font_font_size'] + 1) . "px;
		line-height:" . ($cmsmasters_option['magazilla' . '_content_font_line_height'] - 2) . "px;
	}

	.cmsmasters_post_author,
	.cmsmasters_post_author a{
		font-size:" . ($cmsmasters_option['magazilla' . '_content_font_font_size'] - 1) . "px;
		line-height:" . ($cmsmasters_option['magazilla' . '_content_font_line_height'] - 1) . "px;
	}

	.cmsmasters_comments,
	.cmsmasters_comments a,
	.cmsmasters_likes,
	.cmsmasters_likes a,
	.cmsmastersView,
	.cmsmastersView a{
		font-size:" . ($cmsmasters_option['magazilla' . '_content_font_font_size'] - 2) . "px;
	}

	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont a{
		line-height:" . ($cmsmasters_option['magazilla' . '_content_font_line_height'] - 3) . "px;
	}

	div.sp-location-weather-widget .weather-region,
	div.sp-location-weather-widget .weather-date {
		line-height:" . ($cmsmasters_option['magazilla' . '_content_font_line_height'] - 5) . "px;
	}

	.cmsmasters_open_post .cmsmasters_post_content,
	.cmsmasters_open_post .cmsmasters_post_content a:not(.wp-block-button__link) {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_content_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_content_font_line_height'] + 3) . "px;
	}
	
	#page .cmsmasters_quotes_slider .cmsmasters_quote_content {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_content_font_font_size'] + 1) . "px;
		font-style:" . $cmsmasters_option['magazilla' . '_content_font_font_style'] . ";
	}
	
	.header_top .meta_wrap, 
	.header_top .meta_wrap *, 
	.cmsmasters_pricing_table .feature_list li, 
	.cmsmasters_pricing_table .feature_list li a {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_content_font_font_size'] - 3) . "px;
		line-height:" .((int)  $cmsmasters_option['magazilla' . '_content_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_breadcrumbs .breadcrumbs_sep {
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_content_font_line_height'] - 10) . "px;
	}
	
	.cmsmasters_comment_item .cmsmasters_comment_item_content, 
	.cmsmasters_project_grid .cmsmasters_project_content, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_subtitle, 
	.widget_custom_popular_projects_entries .cmsmasters_slider_project_content, 
	.widget_custom_latest_projects_entries .cmsmasters_slider_project_content, 
	.widget_custom_twitter_entries .tweet_text {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_content_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_subtitle, 
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_subtitle, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter_subtitle, 
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content, 
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content a, 
	.cmsmasters_notice .notice_content, 
	#wp-calendar td, 
	#wp-calendar td a, 
	.widget_rss ul li .rssSummary {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_content_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_breadcrumbs .breadcrumbs_sep:before {
		font-size:13px; /* static */
	}
	
	.cmsmasters_icon_list_items li:before {
		line-height:" . $cmsmasters_option['magazilla' . '_content_font_line_height'] . "px;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	a,
	.subpage_nav > strong,
	.subpage_nav > span,
	.subpage_nav > a {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_link_font_google_font']) . $cmsmasters_option['magazilla' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['magazilla' . '_link_font_text_decoration'] . ";
	}

	div.sp-location-weather-widget .weather-region,
	div.sp-location-weather-widget .weather-date{
		text-transform:" . $cmsmasters_option['magazilla' . '_link_font_text_transform'] . ";
	}

	.ab-item{
		font-weight: normal;
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option['magazilla' . '_link_hover_decoration'] . ";
	}
	
	.about_author .about_author_cont a {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_link_font_font_size'] - 1) . "px;
		
	}
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	.navigation > li > a, 
	.top_line_nav > li > a, 
	.footer_nav > li > a {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_nav_title_font_google_font']) . $cmsmasters_option['magazilla' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_nav_title_font_text_transform'] . ";
	}

	.top_line_nav > li > a, 
	.footer_nav > li > a,
	#page .social_text_link.cmsmasters_sharing a{
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_nav_title_font_font_size'] - 5) . "px;
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_nav_title_font_line_height'] - 5) . "px;
	}

	.header_top div.sp-location-weather-widget div[id^='location-weather-widget'] span {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_nav_title_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_nav_title_font_line_height'] - 1) . "px;
	}
	
	.navigation li a .nav_tag {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_nav_title_font_font_size'] - 3) . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_nav_title_font_font_size'] . "px;
	}
	
	.navigation li a .nav_subtitle {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_nav_title_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_nav_title_font_font_size'] - 4) . "px;
	}
	
	.navigation li a .nav_subtitle {
		text-transform:none;
	}
	/* Finish Navigation Title Font */
	
	
	/* Start Navigation Dropdown Font */
	.navigation ul li a,
	.top_line_nav ul li a {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['magazilla' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_nav_dropdown_font_text_transform'] . ";
	}
	/* Finish Navigation Dropdown Font */
	
	
	/* Start H1 Font */
	h1,
	h1 a,
	.logo .title, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	.cmsmasters_pricing_table .cmsmasters_price_wrap,
	.widget_most_popular_widget_list .cmsmasters_most_index {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_h1_font_google_font']) . $cmsmasters_option['magazilla' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['magazilla' . '_h1_font_text_decoration'] . ";
	}

	
	.header_top div.sp-location-weather-widget div[id^='location-weather-widget'] .weather-temp{
		font-weight:" . $cmsmasters_option['magazilla' . '_h1_font_font_weight'] . ";
	}

	.widget_most_popular_widget_list .cmsmasters_most_index{
		font-size:" . ($cmsmasters_option['magazilla' . '_h1_font_font_size'] + 8) . "px;
		line-height:" . ($cmsmasters_option['magazilla' . '_h1_font_line_height'] + 8) . "px;
	}

	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap{
		font-size:" . ($cmsmasters_option['magazilla' . '_h1_font_font_size'] + 2) . "px;
	}
	
	.logo .title{
		font-size:" . ($cmsmasters_option['magazilla' . '_h1_font_font_size'] + 20) . "px;
	}

	.cmsmasters_pricing_table .cmsmasters_price_wrap {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_h1_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_dropcap {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_h1_font_google_font']) . $cmsmasters_option['magazilla' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['magazilla' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['magazilla' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:60px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:32px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_h1_font_line_height'] + 15) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['magazilla' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['magazilla' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['magazilla' . '_h1_font_line_height'] + 35) . "px;
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_h1_font_font_size'] + 6) . "px;
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_h1_font_google_font']) . $cmsmasters_option['magazilla' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['magazilla' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_h1_font_font_style'] . ";
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2, 
	h2 a, 
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.widget .widgettitle {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_h2_font_google_font']) . $cmsmasters_option['magazilla' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['magazilla' . '_h2_font_text_decoration'] . ";
	}

	.widget .widgettitle,
	.widget .widgettitle a{
		font-size:" . ($cmsmasters_option['magazilla' . '_h2_font_font_size'] - 4) . "px;
		line-height:" . ($cmsmasters_option['magazilla' . '_h2_font_line_height'] - 4) . "px;
	}

	#bottom .widget .widgettitle,
	#bottom .widget .widgettitle a{
		font-size:" . ($cmsmasters_option['magazilla' . '_h2_font_font_size'] - 8) . "px;
		line-height:" . ($cmsmasters_option['magazilla' . '_h2_font_line_height'] - 8) . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap {
		line-height:" . $cmsmasters_option['magazilla' . '_h2_font_font_size'] . "px;
	}
	
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_h2_font_google_font']) . $cmsmasters_option['magazilla' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['magazilla' . '_h2_font_text_decoration'] . ";
	}
	
	@media only screen and (max-width: 768px) {
		.headline_outer .headline_inner .headline_content .headline_text .entry-title {
			font-size:" . $cmsmasters_option['magazilla' . '_h2_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['magazilla' . '_h2_font_line_height'] . "px;
		}
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a, 
	.cmsmasters_pricing_table .pricing_title, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	.share_posts .cmsmasters_share,
	.share_posts .cmsmastersView span {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_h3_font_google_font']) . $cmsmasters_option['magazilla' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['magazilla' . '_h3_font_text_decoration'] . ";
	}
	
	.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_title, 
	.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_title a, 
	.cmsmasters_pricing_table .pricing_title,
	.share_posts .cmsmasters_share,
	.share_posts .cmsmastersView span {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_h3_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_profile_vertical .cmsmasters_profile_title, 
	.cmsmasters_profile_vertical .cmsmasters_profile_title a {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_h3_font_font_size'] + 6) . "px;
	}

	@media only screen and (max-width: 950px){
		.cmsmasters_project_puzzle .cmsmasters_project_title,
		.cmsmasters_project_puzzle .cmsmasters_project_title a {
			font-size:" . ($cmsmasters_option['magazilla' . '_h3_font_font_size'] - 4) . "px;
			line-height:" . ($cmsmasters_option['magazilla' . '_h3_font_line_height'] - 7) . "px;
		}
	}

	@media only screen and (max-width: 950px) and (min-width: 768px){
		.cmsmasters_column:not(.one_first) .cmsmasters_post_default.format-video .cmsmasters_post_header .cmsmasters_post_title a{
			font-size:" . ($cmsmasters_option['magazilla' . '_h3_font_font_size'] - 6) . "px;
			line-height:" . ($cmsmasters_option['magazilla' . '_h3_font_line_height'] - 8) . "px;
		}
	}

	@media only screen and (max-width: 1440px){
		.cmsmasters_slider_project .cmsmasters_slider_project_title a{
			font-size:" . ($cmsmasters_option['magazilla' . '_h3_font_font_size'] - 8) . "px;
			line-height:" . ($cmsmasters_option['magazilla' . '_h3_font_line_height'] - 8) . "px;
		}
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a, 
	.cmsmasters_table thead td, 
	.cmsmasters_table thead th, 
	.cmsmasters_table tfoot td, 
	.cmsmasters_table tfoot th, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_toggles .cmsmasters_toggle_title a, 
	.cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap, 
	.post_nav a, 
	.cmsmasters_tabs .cmsmasters_tabs_list_item a, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs_list_item a, 
	.cmsmasters_tabs .tab_comments li > a,
	#page .widget_mailpoet_form .widgettitle,
	.about_author .about_author_cont_title{
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_h4_font_google_font']) . $cmsmasters_option['magazilla' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['magazilla' . '_h4_font_text_decoration'] . ";
	}
	
	@media only screen and (max-width: 1170px) and (min-width: 768px){
		.cmsmasters_column.one_third .widget_custom_latest_projects_entries .cmsmasters_slider_project_title a, 
		.cmsmasters_column.one_third .widget_custom_popular_projects_entries .cmsmasters_slider_project_title a{
			font-size:" . ($cmsmasters_option['magazilla' . '_h4_font_font_size'] - 3) . "px;
			line-height:" . ($cmsmasters_option['magazilla' . '_h4_font_line_height'] - 3) . "px;
		}
	}
	
	@media only screen and (max-width: 1440px) and (min-width: 950px){
		.widget_custom_posts_tabs_entries .cmsmasters_tabs_list_item a{
			font-size:" . ($cmsmasters_option['magazilla' . '_h4_font_font_size'] - 3) . "px;
			line-height:" . ($cmsmasters_option['magazilla' . '_h4_font_line_height'] - 3) . "px;
		}
	}

	@media only screen and (max-width: 950px){
		.cmsmasters_tabs .cmsmasters_tabs_list_item a{
			font-size:" . ($cmsmasters_option['magazilla' . '_h4_font_font_size'] - 4) . "px;
			line-height:" . ($cmsmasters_option['magazilla' . '_h4_font_line_height'] - 4) . "px;
		}
	}

	.cmsmasters_quote_title,
	.about_author .about_author_cont_title{
		font-size:" . ($cmsmasters_option['magazilla' . '_h4_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_inner:before {
		line-height:" . $cmsmasters_option['magazilla' . '_h4_font_line_height'] . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat {
		padding-top:" . ((int) $cmsmasters_option['magazilla' . '_h4_font_line_height'] * 2 + 13) . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_container {
		height:" . ((int) $cmsmasters_option['magazilla' . '_h4_font_line_height'] * 2 + 220 + 13) . "px;
	}
	
	.cmsmasters_table thead td, 
	.cmsmasters_table thead th, 
	.cmsmasters_table tfoot td, 
	.cmsmasters_table tfoot th{
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_h4_font_line_height'] - 10) . "px;
	}
	
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title, 
	.cmsmasters_single_slider .cmsmasters_single_slider_item_title a, 
	.cmsmasters_tabs .tab_comments li > a {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_h4_font_font_size'] - 2) . "px;
	}
	/* Finish H4 Font */
	

	/* Start H5 Font */
	h5,
	h5 a, 
	.cmsmasters_open_project .project_details_item_title, 
	.cmsmasters_open_project .project_features_item_title, 
	.cmsmasters_open_profile .profile_details_item_title, 
	.cmsmasters_open_profile .profile_features_item_title, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title, 
	#wp-calendar caption, 
	#wp-calendar th,
	.post_nav>div span, 
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info, 
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info a,
	div.sp-location-weather-widget .weather-type {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_h5_font_google_font']) . $cmsmasters_option['magazilla' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['magazilla' . '_h5_font_text_decoration'] . ";
	}

	.widget_most_popular_widget_list .cmsmasters_post_header .cmsmasters_post_title,
	.widget_most_popular_widget_list .cmsmasters_post_header .cmsmasters_post_title a{
		line-height:" . ($cmsmasters_option['magazilla' . '_h5_font_line_height'] - 4) . "px;
	}

	.post_nav>div span,
	.cmsmasters_slider_post_date abbr,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > .published,
	.cmsmasters_post_date abbr,
	#page .cmsmasters_project_date,
	.cmsmasters_roll_titles_wrap .cmsmasters_roll_titles_info_title,
	.top_line_nav > li > a,
	.comments_nav > span a {
		text-transform: uppercase;
	}
	
	#page .cmsmasters_open_project .project_details_item_desc, 
	#page .cmsmasters_open_project .project_features_item_desc, 
	#page .cmsmasters_open_profile .profile_details_item_desc, 
	#page .cmsmasters_open_profile .profile_features_item_desc {
		line-height:" . $cmsmasters_option['magazilla' . '_h5_font_line_height'] . "px;
	}
	
	.widget_nav_menu ul > li a {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_h5_font_font_size'] + 1) . "px;
	}
	
	#wp-calendar caption, 
	#wp-calendar th	{
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_h5_font_line_height'] + 8) . "px;
	}

	.cmsmasters_post_author a, 
	.cmsmasters_open_post .cmsmasters_post_cont_about_author a,
	#page .social_text_link.cmsmasters_sharing a,
	.comments_nav > span a {
		font-weight:" . $cmsmasters_option['magazilla' . '_h5_font_font_weight'] . ";
	}

	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a, 
	a.cmsmasters_cat_color, 
	span.cmsmasters_cat_color,
	.cmsmasters_project_puzzle .cmsmasters_project_category a{
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_h6_font_google_font']) . $cmsmasters_option['magazilla' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['magazilla' . '_h6_font_text_decoration'] . ";
	}

	.widget_recent_entries ul li a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont a, 
	.header_top div.sp-location-weather-widget div[id^='location-weather-widget'] span{
		font-weight:" . $cmsmasters_option['magazilla' . '_h6_font_font_weight'] . ";
	}

	span.cmsmasters_cat_color,
	a.cmsmasters_cat_color,
	.cmsmasters_project_puzzle .cmsmasters_project_category a{
		font-size:" . ($cmsmasters_option['magazilla' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ($cmsmasters_option['magazilla' . '_h6_font_line_height'] + 4). "px;
		text-transform: uppercase;
	}

	span.cmsmasters_cat_color a{
		text-transform: uppercase;
	}
	
	@media only screen and (max-width: 1024px) {
		.header_top .meta_wrap, 
		.header_top .meta_wrap * {
			font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_h6_font_google_font']) . $cmsmasters_option['magazilla' . '_h6_font_system_font'] . ";
			font-size:" . $cmsmasters_option['magazilla' . '_h6_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['magazilla' . '_h6_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['magazilla' . '_h6_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['magazilla' . '_h6_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['magazilla' . '_h6_font_text_transform'] . ";
			text-decoration:" . $cmsmasters_option['magazilla' . '_h6_font_text_decoration'] . ";
		}
	
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button,
	.cmsmasters_post_read_more,
	.cmsmasters_slider_post_read_more {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_button_font_google_font']) . $cmsmasters_option['magazilla' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_button_font_text_transform'] . ";
	}
	
	.cmsmasters_archive_type .cmsmasters_archive_item_type span	{
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_button_font_google_font']) . $cmsmasters_option['magazilla' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_button_font_text_transform'] . ";
	}
	
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a, 
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_button_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_button_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_archive_type .cmsmasters_archive_item_type span {
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_button_font_line_height'] - 6) . "px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['magazilla' . '_button_font_font_size'] . "px !important;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['magazilla' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['magazilla' . '_button_font_line_height'] . "px;
	}

	/* Finish Button Font */


	/* Start Small Text Font */
	small, 
	form .formError .formErrorContent, 
	.cmsmasters_post_timeline .cmsmasters_post_date, 
	.cmsmasters_open_post .cmsmasters_post_cont_info_meta *, 
	.cmsmasters_open_project .project_details_item_desc, 
	.cmsmasters_open_project .project_features_item_desc, 
	.cmsmasters_open_project .project_details_item_desc a, 
	.cmsmasters_open_project .project_features_item_desc a, 
	.cmsmasters_open_profile .profile_details_item_desc, 
	.cmsmasters_open_profile .profile_features_item_desc, 
	.cmsmasters_open_profile .profile_details_item_desc a, 
	.cmsmasters_open_profile .profile_features_item_desc a, 
	.cmsmasters_project_grid .cmsmasters_project_footer *, 
	.cmsmasters_project_puzzle .cmsmasters_project_meta *, 
	.cmsmasters_profile .cmsmasters_profile_subtitle, 
	.cmsmasters_pings_list .comment-body, 
	.cmsmasters_pings_list .comment-body a, 
	.cmsmasters_wrap_pagination .page-numbers, 
	.post_nav span, 
	.comment-respond .comment-notes, 
	.comment-respond .logged-in-as, 
	.comment-respond .logged-in-as a, 
	.comment-respond label, 
	.cmsmasters-form-builder label, 
	.wpcf7-form p, 
	.wp-caption-text, 
	.cmsmasters_toggles .cmsmasters_toggles_filter a, 
	.cmsmasters_twitter_wrap .published, 
	.cmsmasters_pricing_table .cmsmasters_period, 
	.cmsmasters_quotes  .cmsmasters_quote_subtitle_wrap *, 
	.cmsmasters_slider_post .cmsmasters_slider_post_footer *, 
	.cmsmasters_archive_type .cmsmasters_archive_item_info *, 
	#wp-calendar tfoot a, 
	.widget_custom_popular_projects_entries .cmsmasters_slider_project_footer *,
	.widget_custom_latest_projects_entries .cmsmasters_slider_project_footer *, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs div > .published, 
	.cmsmasters_tabs .tab_comments li, 
	.cmsmasters_tabs .tab_comments li > span, 
	.cmsmasters_tabs .tab_comments li > .cmsmasters_tab_comments_author, 
	.widget_rss ul li .rss-date, 
	.widget_tag_cloud a, 
	.widget_custom_twitter_entries .tweet_time, 
	.cmsmasters_open_post .subpage_nav, 
	.cmsmasters_open_post .subpage_nav a, 
	.cmsmasters_mailpoet_form label,
	.cmsmasters_project_puzzle .project_inner .cmsmasters_project_date,
	.cmsmasters_slider_post .cmsmasters_slider_post_date,
	.cmsmasters_project_date,
	.cmsmasters_slider_post_date,
	.apsc-icons-wrapper.apsc-theme-1 .apsc-each-profile>a .apsc-count,
	.apsc-icons-wrapper.apsc-theme-1 .apsc-each-profile>a .apsc-media-type,
	.cmsmasters_share,
	.share_posts .cmsmasters_share .name,
	.share_posts .cmsmasters_views_wrap .name,
	.cmsmasters_comment_item .cmsmasters_comment_item_date,
	.comment-reply-link,
	.comment-edit-link,
	.social_text_link.cmsmasters_sharing a,
	.formError .formErrorContent {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_small_font_google_font']) . $cmsmasters_option['magazilla' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['magazilla' . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters_slider_post_date abbr,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > .published,
	.cmsmasters_post_date abbr,
	.cmsmasters_project_date,
	.apsc-icons-wrapper.apsc-theme-1 .apsc-each-profile>a .apsc-media-type,
	.social_text_link.cmsmasters_sharing a, 
	form .formError .formErrorContent {
		font-size:" . (int) $cmsmasters_option['magazilla' . '_small_font_font_size'] . "px;
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_small_font_line_height'] - 2) . "px;
	}	

	.header_mid div.sp-location-weather-widget .weather-region {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_small_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_small_font_line_height'] - 1) . "px;
	}
	
	.share_posts .cmsmasters_share .name,
	.share_posts .cmsmasters_views_wrap .name,
	.cmsmasters_comment_item .cmsmasters_comment_item_date,
	.comment-reply-link,
	.comment-edit-link{
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_small_font_font_size'] - 1) . "px;
		text-transform: uppercase;
	}
	
	.comment-reply-link,
	.comment-edit-link{
		font-weight:" . $cmsmasters_option['magazilla' . '_h1_font_font_weight'] . ";
	}
	
	.post_nav span, 
	.widget_custom_posts_tabs_entries .cmsmasters_tabs div > .published, 
	.widget_rss ul li .rss-date,
	.widget_recent_entries .post-date{
		font-size:" . (int) $cmsmasters_option['magazilla' . '_small_font_font_size'] . "px;
	}
	
	.wp-caption-text, 
	.cmsmasters_pricing_table .cmsmasters_period,, 
	#wp-calendar tfoot a {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_small_font_font_size'] + 2) . "px;
	}
	
	.cmsmasters_wrap_pagination .page-numbers.prev, 
	.cmsmasters_wrap_pagination .page-numbers.next {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_small_font_font_size'] + 6) . "px;
	}
	
	.cmsmasters_profile .cmsmasters_profile_subtitle{
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_small_font_line_height'] + 10) . "px;
	}
	
	.widget_tag_cloud a	{
		line-height:" . ((int) $cmsmasters_option['magazilla' . '_small_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_day {
		font-size:44px; /* static */
		line-height:44px; /* static */
	}
	
	.widget_custom_twitter_entries .tweet_time {
		line-height:32px; /* static */
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_small_font_google_font']) . $cmsmasters_option['magazilla' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['magazilla' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['magazilla' . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	textarea,
	select,
	option {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_input_font_google_font']) . $cmsmasters_option['magazilla' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_input_font_font_style'] . ";
	}

	.about_author .about_author_cont,
	#page .cmsmasters_quotes_slider .cmsmasters_quote_content,
	.cmsmasters_quotes_grid .cmsmasters_quote_content {
		font-weight:" . $cmsmasters_option['magazilla' . '_input_font_font_weight'] . ";
	}
	
	#page .cmsmasters_quotes_slider .cmsmasters_quote_content {
		line-height:" . $cmsmasters_option['magazilla' . '_input_font_line_height'] . "px;
	}
	
	.gform_wrapper input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['magazilla' . '_input_font_font_size'] . "px !important;
	}
	
	.error .error_cont input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		font-size:" . ((int) $cmsmasters_option['magazilla' . '_input_font_font_size'] + 1) . "px;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote, 
	.cmsmasters_quotes_slider .cmsmasters_quote_content	{
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_quote_font_google_font']) . $cmsmasters_option['magazilla' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['magazilla' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['magazilla' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['magazilla' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . magazilla_get_google_font($cmsmasters_option['magazilla' . '_quote_font_google_font']) . $cmsmasters_option['magazilla' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['magazilla' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['magazilla' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";
	
	
	return apply_filters('magazilla_theme_fonts_filter', $custom_css);
}

