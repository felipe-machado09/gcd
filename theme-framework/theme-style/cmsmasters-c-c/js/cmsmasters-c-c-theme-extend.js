/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Theme Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */



/**
 * Heading Extend
 */

var heading_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_heading.fields) {
	if (id === 'animation') {
		heading_new_fields['custom_check'] = { 
			type : 		'checkbox', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_check, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half',  
			choises : { 
				'true' : cmsmasters_shortcodes.choice_enable 
			}
		};
		heading_new_fields['width_monitor'] = { 
			type : 		'input', 
			title : 	cmsmasters_theme_shortcodes.heading_field_width_monitor, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.heading_field_size_zero_note + "</span>", 
			def : 		'767', 
			required : 	false, 
			width : 	'number', 
			min : 		'320', 
			depend : 	'custom_check:true' 
		};
		heading_new_fields['custom_font_size'] = { 
			type : 		'input', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_font_size, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.heading_field_size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'custom_check:true' 
		};
		heading_new_fields['custom_line_height'] = { 
			type : 		'input', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_line_height, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.heading_field_size_zero_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'custom_check:true' 
		};
		
		heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	} else if(id == "underline_style"){
		cmsmastersShortcodes.cmsmasters_heading.fields[id].choises.line_inside = "Line Inside";

		heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	} else {
		heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_heading.fields = heading_new_fields;



var heading_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_heading.fields) {
	if (id === 'link') {
		heading_new_fields['custom_second_heading'] = { 
			type : 		'checkbox', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_second_heading, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
				'true' : cmsmasters_shortcodes.choice_enable 
			}
		};
		heading_new_fields['custom_second_heading_text'] = { 
			type : 		'input', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_second_heading_text, 
			descr : 	'', 
			def : 		cmsmasters_shortcodes.heading_title, 
			required : 	false, 
			width : 	'half', 
			depend : 	'custom_second_heading:true' 
		};
		heading_new_fields['heading_field_custom_second_heading_color'] = { 
			type : 		'rgba', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_second_heading_text, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.heading_field_color_descr_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			depend : 	'custom_second_heading:true' 
		};
		heading_new_fields['heading_field_custom_button'] = { 
			type : 		'checkbox', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_button, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
				'true' : cmsmasters_shortcodes.choice_enable 
			}
		};
		heading_new_fields['heading_field_custom_button_title'] = { 
			type : 		'input', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_button_title, 
			descr : 	cmsmasters_theme_shortcodes.heading_field_custom_button_title_descr, 
			def : 		cmsmasters_shortcodes.button, 
			required : 	false, 
			width : 	'half', 
			depend : 	'heading_field_custom_button:true' 
		};
		heading_new_fields['heading_field_custom_button_link'] = { 
			type : 		'input', 
			title : 	cmsmasters_theme_shortcodes.heading_field_custom_button_link, 
			descr : 	cmsmasters_theme_shortcodes.heading_field_custom_button_link_descr, 
			def : 		cmsmasters_shortcodes.button, 
			required : 	false, 
			width : 	'half', 
			depend : 	'heading_field_custom_button:true' 
		};
		
		heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	} else if (id === 'divider_type') { 
		cmsmastersShortcodes.cmsmasters_heading.fields[id]['choises']['longbottom'] = cmsmasters_theme_shortcodes.heading_field_divider_lenght_bottom;
		
		
		heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	} else {
		heading_new_fields[id] = cmsmastersShortcodes.cmsmasters_heading.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_heading.fields = heading_new_fields;



/**
 * Posts Slider Extend
 */

var posts_slider_new_fields = {}; 

for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {

	if (id === 'blog_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises'] = {
			'title' : 		cmsmasters_shortcodes.choice_title, 
			'excerpt' : 	cmsmasters_shortcodes.choice_excerpt, 
			'date' : 		cmsmasters_shortcodes.choice_date,
			'image' : 		cmsmasters_shortcodes.choice_image, 
			'categories' : 	cmsmasters_shortcodes.choice_categories, 
			'author' : 		cmsmasters_shortcodes.choice_author, 
			'comments' : 	cmsmasters_shortcodes.choice_comments, 
			'likes' : 		cmsmasters_shortcodes.choice_likes, 
			'views' : 		cmsmasters_theme_shortcodes.choice_view, 
			'more' : 		cmsmasters_shortcodes.choice_more 
		};
		
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'portfolio_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises'] = {
			'title' : 		cmsmasters_shortcodes.choice_title, 
			'date' : 		"Date",
			'image' : 		cmsmasters_shortcodes.choice_image, 
			'excerpt' : 	cmsmasters_shortcodes.choice_excerpt, 
			'categories' : 	cmsmasters_shortcodes.choice_categories, 
			'comments' : 	cmsmasters_shortcodes.choice_comments, 
			'likes' : 		cmsmasters_shortcodes.choice_likes
		};
		
		
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'amount') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
		
		
	} else if (id === 'columns') {
		posts_slider_new_fields['controls'] = { 
			type : 		'checkbox', 
			title : 	cmsmasters_theme_shortcodes.posts_slider_controls_enable_title, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'true' : 	cmsmasters_shortcodes.choice_enable 
			}
		};
		
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['depend'];
		
		
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}  else {
		posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = posts_slider_new_fields;



/**
 * Blog Extend
 */

var blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	
	if (id === 'metadata') {
		cmsmastersShortcodes.cmsmasters_blog.fields[id]['choises'] = {
			'title': 		cmsmasters_shortcodes.choice_title, 
			'date': 		cmsmasters_shortcodes.choice_date, 
			'content_side': "Content on the side", 
			'excerpt': 		cmsmasters_shortcodes.choice_excerpt, 
			'categories': 	cmsmasters_shortcodes.choice_categories, 
			'author': 		cmsmasters_shortcodes.choice_author, 
			'comments': 	cmsmasters_shortcodes.choice_comments, 
			'likes': 		cmsmasters_shortcodes.choice_likes, 
			'views': 		cmsmasters_theme_shortcodes.choice_view, 
			'more': 		cmsmasters_shortcodes.choice_more 
		};
		
		blog_new_fields['blog_field_featured_post'] = { 
			type : 		'checkbox', 
			title : 	cmsmasters_theme_shortcodes.blog_field_featured, 
			descr : 	cmsmasters_theme_shortcodes.blog_field_featured_descr,
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
				'true' : cmsmasters_shortcodes.choice_enable 
			}
		};
		
		
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else {
		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
	
	if(id === 'layout'){
		delete cmsmastersShortcodes.cmsmasters_blog.fields[id]['choises']['timeline'];

		blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = blog_new_fields;



/**
 * Toggles Extend
 */

var toggles_new_fields = {}; 

for (var id in cmsmastersShortcodes.cmsmasters_toggles.fields) {
	if (id === 'animation') {
		toggles_new_fields['primary_color'] = { 
				type : 		'rgba', 
				title : 	cmsmasters_theme_shortcodes.toggles_field_primary_color, 
				descr : 	cmsmasters_theme_shortcodes.toggles_field_primary_color_descr, 
				def : 		'', 
				required : 	false, 
				width : 	'half' 
		};
		
		toggles_new_fields['secondary_color'] = { 
				type : 		'rgba', 
				title : 	cmsmasters_theme_shortcodes.toggles_field_secondary_color, 
				descr : 	cmsmasters_theme_shortcodes.toggles_field_secondary_color_descr, 
				def : 		'', 
				required : 	false, 
				width : 	'half' 
		};
		
		
		toggles_new_fields[id] = cmsmastersShortcodes.cmsmasters_toggles.fields[id];
	} else {
		toggles_new_fields[id] = cmsmastersShortcodes.cmsmasters_toggles.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_toggles.fields = toggles_new_fields;

/**
 * Portfolio puzzle
*/
var portfolio_new_fields = cmsmastersShortcodes.cmsmasters_portfolio.fields;

for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {

	if (id === 'metadata_puzzle' || id === 'metadata_grid') {
		toggles_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
		toggles_new_fields[id].choises.date = "Date"; 
	} else {
		toggles_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}

cmsmastersShortcodes.cmsmasters_portfolio.fields = portfolio_new_fields;

/**
 * Theme Shortcodes
 */
 
var cmsmastersShortcodes_new_shortcode = {};


for (var id in cmsmastersShortcodes) {
	if (id === 'cmsmasters_sidebar') {
		
		/* Roll Titles */
		cmsmastersShortcodes_new_shortcode['magazilla_roll_titles'] = { 
			title : 	cmsmasters_theme_shortcodes.roll_titles_title, 
			icon : 		'admin-icon-blog', 
			pair : 		false, 
			content : 	false, 
			visual : 	false, 
			multiple : 	false, 
			def : 		'', 
			fields : { 
				// Roll Titles Info
				rollscinfo : { 
					type : 		'input', 
					title : 	cmsmasters_theme_shortcodes.roll_titles_field_sc_info_title, 
					descr : 	cmsmasters_theme_shortcodes.roll_titles_field_sc_info_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half' 
				}, 
				// Order By
				orderby : { 
					type : 		'select', 
					title : 	cmsmasters_shortcodes.orderby_title, 
					descr : 	cmsmasters_theme_shortcodes.roll_titles_field_orderby_descr, 
					def : 		'date', 
					required : 	true, 
					width : 	'half', 
					choises : { 
								'date' : 		cmsmasters_shortcodes.choice_date, 
								'name' : 		cmsmasters_shortcodes.name, 
								'id' : 			cmsmasters_shortcodes.choice_id, 
								'menu_order' : 	cmsmasters_shortcodes.choice_menu, 
								'popular' : 	cmsmasters_shortcodes.choice_popular, 
								'rand' : 		cmsmasters_shortcodes.choice_rand 
					} 
				}, 
				// Order
				order : { 
					type : 		'radio', 
					title : 	cmsmasters_shortcodes.order_title, 
					descr : 	cmsmasters_shortcodes.order_descr, 
					def : 		'DESC', 
					required : 	true, 
					width : 	'half', 
					choises : { 
								'ASC' : 	cmsmasters_shortcodes.choice_asc, 
								'DESC' : 	cmsmasters_shortcodes.choice_desc 
					} 
				}, 
				// Posts Categories
				post_categories : { 
					type : 		'select_multiple', 
					title : 	cmsmasters_theme_shortcodes.roll_titles_field_postscateg_title, 
					descr : 	cmsmasters_theme_shortcodes.roll_titles_field_postscateg_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.roll_titles_field_postscateg_descr_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					choises : 	cmsmasters_composer_categories()
				}, 
				// Posts Number
				count : { 
					type : 		'input', 
					title : 	cmsmasters_theme_shortcodes.roll_titles_field_postsnumber_title, 
					descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.roll_titles_field_postsnumber_descr_note + "</span>", 
					def : 		'12', 
					required : 	false, 
					width : 	'number', 
					min : 		'1' 
				}, 
				// CSS3 Animation
				animation : { 
					type : 		'select', 
					title : 	cmsmasters_shortcodes.animation_title, 
					descr : 	cmsmasters_shortcodes.animation_descr + " <br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.animation_descr_note + "</span>", 
					def : 		'', 
					required : 	false, 
					width : 	'half', 
					choises : 	get_animations() 
				}, 
				// Animation Delay
				animation_delay : { 
					type : 		'input', 
					title : 	cmsmasters_shortcodes.animation_delay_title, 
					descr : 	cmsmasters_shortcodes.animation_delay_descr + " <br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.animation_delay_descr_note + "</span>", 
					def : 		'0', 
					required : 	false, 
					width : 	'number', 
					min : 		'0', 
					step : 		'50' 
				}, 
				// Additional Classes
				classes : { 
					type : 		'input', 
					title : 	cmsmasters_shortcodes.classes_title, 
					descr : 	cmsmasters_shortcodes.classes_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half' 
				} 
			} 
		};
		
		cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
	} else {
		cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
	}
}


cmsmastersShortcodes = cmsmastersShortcodes_new_shortcode;


/**
 * Social Sharing
 */

var cmsmasters_social_new_fields = {}; 

for (var id in cmsmastersShortcodes.cmsmasters_social.fields) {
	if(id === "pinterest"){
		cmsmasters_social_new_fields[id] = cmsmastersShortcodes.cmsmasters_social.fields[id];

		cmsmasters_social_new_fields["dribbble"] = {
			choises: {
				true: "Show"
			},
			def: "true",
			descr: "",
			required: false,
			title: cmsmasters_theme_shortcodes.sharing_social_dribbble,
			type: "checkbox",
			width: "half",
		};

		cmsmasters_social_new_fields["linkedin"] = {
			choises: {
				true: "Show"
			},
			def: "true",
			descr: "",
			required: false,
			title: cmsmasters_theme_shortcodes.sharing_social_linkedin,
			type: "checkbox",
			width: "half",
		};

		cmsmasters_social_new_fields["reddit"] = {
			choises: {
				true: "Show"
			},
			def: "true",
			descr: "",
			required: false,
			title: cmsmasters_theme_shortcodes.sharing_social_reddit,
			type: "checkbox",
			width: "half",
		};

		cmsmasters_social_new_fields["stumbleupon"] = {
			choises: {
				true: "Show"
			},
			def: "true",
			descr: "",
			required: false,
			title: cmsmasters_theme_shortcodes.sharing_social_stumbleupon,
			type: "checkbox",
			width: "half",
		};

		cmsmasters_social_new_fields["tumblr"] = {
			choises: {
				true: "Show"
			},
			def: "true",
			descr: "",
			required: false,
			title: cmsmasters_theme_shortcodes.sharing_social_tumblr,
			type: "checkbox",
			width: "half",
		};

		cmsmasters_social_new_fields["show_text_link"] = {
			choises: {
				true: "Show"
			},
			def: "true",
			descr: "",
			required: false,
			title: cmsmasters_theme_shortcodes.sharing_show_text_link,
			type: "checkbox",
			width: "half",
		};
	} else{
		cmsmasters_social_new_fields[id] = cmsmastersShortcodes.cmsmasters_social.fields[id];
	}
}

cmsmastersShortcodes.cmsmasters_social.fields = cmsmasters_social_new_fields;


cmsmastersShortcodes.cmsmasters_portfolio.title = cmsmasters_theme_shortcodes.portfolio_title;
cmsmastersShortcodes.cmsmasters_portfolio.fields.orderby.descr = cmsmasters_theme_shortcodes.portfolio_field_orderby_descr;
cmsmastersShortcodes.cmsmasters_portfolio.fields.count.title = cmsmasters_theme_shortcodes.portfolio_field_pj_number_title;
cmsmastersShortcodes.cmsmasters_portfolio.fields.count.descr = cmsmasters_theme_shortcodes.portfolio_field_pj_number_descr;
cmsmastersShortcodes.cmsmasters_portfolio.fields.categories.descr = cmsmasters_theme_shortcodes.portfolio_field_categories_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.portfolio_field_categories_descr_note + "</span>";
cmsmastersShortcodes.cmsmasters_portfolio.fields.layout.choises.grid = cmsmasters_theme_shortcodes.portfolio_field_layout_choice_grid;
cmsmastersShortcodes.cmsmasters_portfolio.fields.layout.descr = cmsmasters_theme_shortcodes.portfolio_field_layout_mode_descr;
cmsmastersShortcodes.cmsmasters_portfolio.fields.layout_mode.descr = cmsmasters_theme_shortcodes.portfolio_field_layout_descr;
cmsmastersShortcodes.cmsmasters_portfolio.fields.columns.descr = cmsmasters_theme_shortcodes.portfolio_field_col_count_descr  + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.portfolio_field_col_count_descr_note + "<br />" + cmsmasters_shortcodes.portfolio_field_col_count_descr_note_custom + "</span>";
cmsmastersShortcodes.cmsmasters_portfolio.fields.metadata_grid.descr = cmsmasters_theme_shortcodes.portfolio_field_metadata_descr;
cmsmastersShortcodes.cmsmasters_portfolio.fields.metadata_puzzle.descr = cmsmasters_theme_shortcodes.portfolio_field_metadata_descr;
cmsmastersShortcodes.cmsmasters_portfolio.fields.gap.descr = cmsmasters_theme_shortcodes.portfolio_field_gap_descr;
cmsmastersShortcodes.cmsmasters_portfolio.fields.filter.descr = cmsmasters_theme_shortcodes.portfolio_field_filter_descr;
cmsmastersShortcodes.cmsmasters_portfolio.fields.sorting.descr = cmsmasters_theme_shortcodes.portfolio_field_sorting_descr;

cmsmastersShortcodes.cmsmasters_posts_slider.fields.post_type.choises.project = cmsmasters_theme_shortcodes.posts_slider_field_poststype_choice_project;
cmsmastersShortcodes.cmsmasters_posts_slider.fields.portfolio_categories.title = cmsmasters_theme_shortcodes.posts_slider_field_pjcateg_title;
cmsmastersShortcodes.cmsmasters_posts_slider.fields.portfolio_categories.descr = cmsmasters_theme_shortcodes.posts_slider_field_pjcateg_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.posts_slider_field_pjcateg_descr_note + "</span>";
cmsmastersShortcodes.cmsmasters_posts_slider.fields.portfolio_metadata.title = cmsmasters_theme_shortcodes.posts_slider_field_pjmeta_title;
cmsmastersShortcodes.cmsmasters_posts_slider.fields.portfolio_metadata.descr = cmsmasters_theme_shortcodes.posts_slider_field_pjmeta_descr;