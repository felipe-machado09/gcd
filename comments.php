<?php
/**
 * @package 	WordPress
 * @subpackage 	Magazilla
 * @version		1.0.0
 * 
 * Comments Template
 * Created by CMSMasters
 * 
 */


if (post_password_required()) { 
	echo '<p class="nocomments">' . esc_html__('This post is password protected. Enter the password to view comments.', 'magazilla') . '</p>';
	
	
    return;
}


if (have_comments()) {
	echo '<aside id="comments" class="post_comments">' . "\n" . 
		'<h2 class="post_comments_title">';
	
	
	comments_number(esc_attr__('Sem comentários', 'magazilla'), esc_attr__('Comentário', 'magazilla') . ' (1)', esc_attr__('Comentários', 'magazilla') . ' (%)');
	
	
	echo '</h2>' . "\n";
	
	
	if (get_previous_comments_link() || get_next_comments_link()) {
		echo '<aside class="comments_nav">';
			
			if (get_previous_comments_link()) {
				echo '<span class="comments_nav_prev cmsmasters_theme_icon_comments_nav_prev">';
					
					previous_comments_link(esc_attr__('Comentários antigos', 'magazilla'));
					
				echo '</span>';
			}
			
			
			if (get_next_comments_link()) {
				echo '<span class="comments_nav_next cmsmasters_theme_icon_comments_nav_next">';
					
					next_comments_link(esc_attr__('Comentários novos', 'magazilla'));
					
				echo '</span>';
			}
			
		echo '</aside>';
	}
	
	
	echo '<ol class="commentlist">' . "\n";
	
	
	wp_list_comments(array( 
		'type' => 'comment', 
		'callback' => 'magazilla_mytheme_comment' 
	));
	
	
	echo '</ol>' . "\n";
	
	
	if (get_previous_comments_link() || get_next_comments_link()) {
		echo '<aside class="comments_nav">';
			
			if (get_previous_comments_link()) {
				echo '<span class="comments_nav_prev cmsmasters_theme_icon_comments_nav_prev">';
					
					previous_comments_link(esc_attr__('Comentários antigos', 'magazilla'));
					
				echo '</span>';
			}
			
			
			if (get_next_comments_link()) {
				echo '<span class="comments_nav_next cmsmasters_theme_icon_comments_nav_next">';
					
					next_comments_link(esc_attr__('Comentários novos', 'magazilla'));
					
				echo '</span>';
			}
			
		echo '</aside>';
	}
	
	
	echo '</aside>';
}


if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) {
	echo '<h5 class="no-comments cmsmasters_comments_closed">' . esc_html__('Comments are closed.', 'magazilla') . '</h5>';
}


$form_fields =  array( 
	'author' => '<p class="comment-form-author">' . "\n" . 
		'<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' placeholder="' . esc_attr__('Insira seu nome...', 'magazilla') . (($req) ? ' *' : '') . '" />' . "\n" . 
	'</p>' . "\n", 
	'email' => '<p class="comment-form-email">' . "\n" . 
		'<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' placeholder="' . esc_attr__('Insira seu email...', 'magazilla') . (($req) ? ' *' : '') . '" />' . "\n" . 
	'</p>' . "\n",
	'cookies' => '<p class="comment-form-cookies-consent">' . "\n" . 
		'<input type="checkbox" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" value="yes"' . (empty($commenter['comment_author_email']) ? '' : ' checked="checked"') . ' />' . "\n" . 
		'<label for="wp-comment-cookies-consent">' . esc_html__('Salvar meu nome, email e website neste navegador para meus próximos comentários.', 'magazilla') . '</label>' . "\n" . 
	'</p>' . "\n" 
);


comment_form(array( 
	'fields' => 			apply_filters('comment_form_default_fields', $form_fields), 
	'comment_field' => 		'<p class="comment-form-comment">' . 
								'<textarea name="comment" id="comment" cols="67" rows="2" placeholder="' . esc_attr__('Comentário', 'magazilla') . '"></textarea>' . 
							'</p>', 
	'must_log_in' => 		'<p class="must-log-in">' . 
								esc_html__('You must be', 'magazilla') . 
								' <a href="' . esc_url(wp_login_url(apply_filters('the_permalink', get_permalink()))) . '">' 
									. esc_html__('logged in', 'magazilla') . 
								'</a> ' 
								. esc_html__('to post a comment', 'magazilla') . 
							'.</p>' . "\n", 
	'logged_in_as' => 		'<p class="logged-in-as">' . 
								esc_html__('Você está conectado como', 'magazilla') . 
								' <a href="' . esc_url(admin_url('profile.php')) . '"><strong>' . 
									$user_identity . 
								'</strong></a>. ' . 
								'<a class="all" href="' . esc_url(wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '" title="' . esc_attr__('Sair desta conta', 'magazilla') . '">Quero <strong>' . 
									esc_html__('sair desta conta', 'magazilla') . 
								'.</strong></a>' . 
							'</p>' . "\n", 
	'comment_notes_before' => 	'<p class="comment-notes">' . 
									esc_html__('Seu endereço de email não será publicado.', 'magazilla') . 
								'</p>' . "\n", 
	'comment_notes_after' => 	'', 
	'id_form' => 				'commentform', 
	'id_submit' => 				'submit', 
	'title_reply' => 			esc_html__('Deixe seu Comentário', 'magazilla'), 
	'title_reply_to' => 		esc_html__('Deixe seu Comentário para', 'magazilla'), 
	'cancel_reply_link' => 		esc_html__('Cancelar Envio', 'magazilla'), 
	'label_submit' => 			esc_html__('Enviar Comentário', 'magazilla') 
));

