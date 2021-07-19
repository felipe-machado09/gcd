<?php 
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Admin Panel Post, Article, Profile Settings
 * Created by CMSMasters
 * 
 */


function magazilla_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'magazilla');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Article', 'magazilla');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'magazilla');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function magazilla_options_single_sections() {
	$tab = magazilla_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'magazilla');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Article Options', 'magazilla');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'magazilla');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function magazilla_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = magazilla_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = magazilla_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'magazilla'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['magazilla' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'magazilla') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_blog_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_post_nav_order_cat', 
			'title' => esc_html__('Posts Navigation Order by Category', 'magazilla'), 
			'desc' => esc_html__('enable', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_blog_post_nav_order_cat'] 
		);
		
		if (class_exists('Cmsmasters_Content_Composer')) {
			$options[] = array( 
				'section' => 'post_section', 
				'id' => 'magazilla' . '_blog_post_share_box', 
				'title' => esc_html__('Sharing Box', 'magazilla'), 
				'desc' => esc_html__('show', 'magazilla'), 
				'type' => 'checkbox', 
				'std' => $defaults[$tab]['magazilla' . '_blog_post_share_box'] 
			);
		}
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_blog_post_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'magazilla'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['magazilla' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'magazilla') . '|related', 
				esc_html__('Show Popular Posts', 'magazilla') . '|popular', 
				esc_html__('Show Recent Posts', 'magazilla') . '|recent', 
				esc_html__('Hide More Posts Box', 'magazilla') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'magazilla'), 
			'desc' => esc_html__('posts', 'magazilla'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['magazilla' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'magazilla' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'magazilla'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'magazilla'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['magazilla' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_title', 
			'title' => esc_html__('Article Title', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_details_title', 
			'title' => esc_html__('Article Details Title', 'magazilla'), 
			'desc' => esc_html__('Enter a articles details block title', 'magazilla'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_date', 
			'title' => esc_html__('Article Date', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_cat', 
			'title' => esc_html__('Article Categories', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_author', 
			'title' => esc_html__('Article Author', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_comment', 
			'title' => esc_html__('Article Comments', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_tag', 
			'title' => esc_html__('Article Tags', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_like', 
			'title' => esc_html__('Article Likes', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_link', 
			'title' => esc_html__('Article Link', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Articles Navigation Box', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_nav_order_cat', 
			'title' => esc_html__('Articles Navigation Order by Category', 'magazilla'), 
			'desc' => esc_html__('enable', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Articles Box', 'magazilla'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Articles', 'magazilla') . '|related', 
				esc_html__('Show Popular Articles', 'magazilla') . '|popular', 
				esc_html__('Show Recent Articles', 'magazilla') . '|recent', 
				esc_html__('Hide More Articles Box', 'magazilla') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Articles Box Items Number', 'magazilla'), 
			'desc' => esc_html__('articles', 'magazilla'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Articles Slider Pause Time', 'magazilla'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'magazilla'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_project_slug', 
			'title' => esc_html__('Article Slug', 'magazilla'), 
			'desc' => esc_html__('Enter a page slug that should be used for your articles single item', 'magazilla'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Article Categories Slug', 'magazilla'), 
			'desc' => esc_html__('Enter page slug that should be used on articles categories archive page', 'magazilla'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'magazilla' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Article Tags Slug', 'magazilla'), 
			'desc' => esc_html__('Enter page slug that should be used on articles tags archive page', 'magazilla'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'magazilla' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'magazilla' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'magazilla'), 
			'desc' => esc_html__('Enter a profile details block title', 'magazilla'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'magazilla' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'magazilla' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'magazilla' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'magazilla' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'magazilla' . '_profile_post_nav_order_cat', 
			'title' => esc_html__('Profiles Navigation Order by Category', 'magazilla'), 
			'desc' => esc_html__('enable', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_profile_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'magazilla' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'magazilla'), 
			'desc' => esc_html__('show', 'magazilla'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['magazilla' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'magazilla' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'magazilla'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'magazilla'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'magazilla' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'magazilla'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'magazilla'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['magazilla' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

