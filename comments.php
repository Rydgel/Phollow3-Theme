<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('I see wat u did motherfucker.');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>

<section id="commentaires" role="comments">

<h2><?php comments_number('Pas de commentaires', 'Un commentaire', '% commentaires' );?></h2>
<section role="contact-comments" id="contact-comments">
  <a href="<?php comments_link(); ?>">Laisse un commentaire</a> ou contacte moi via Twitter <a title="Twitter Jérôme Mahuet" href="http://twitter.com/@phollow">@phollow</a>
</section>

<?php if ( have_comments() ) : ?>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>

	<ol class="commentlist">
		<?php wp_list_comments(array('type' => 'comment', 'reply_text' => 'Répondre', 'avatar_size' => 30, 'max_depth' => 1)); ?>
	</ol>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
	
 <?php else : // pas de commentaires ?>

	<?php if ( comments_open() ) : ?>

	 <?php else : // closed, u mad? ?>
		<p>Commentaires fermés.</p>

	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

	<h2><?php comment_form_title( 'Répondre à ce billet', 'Répondre à  %s' ); ?></h2>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link(); ?>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
    <a id="comments" name="comments"></a>
    <a id="respond" name="respond"></a>
		<?php if ( is_user_logged_in() ) : ?>

			<p>Identifié en tant que <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Déconnexion">Déconnexion &raquo;</a></p>

		<?php else : ?>
<div id="comment-user-details"><?php do_action('alt_comment_login'); ?>
			<div>
			  <label for="author">Nom <?php if ($req) echo "(*)"; ?></label>
				<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
			</div>

			<div>
			  <label for="email">Email <?php if ($req) echo "(*)"; ?></label>
				<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
			</div>

			<div>
			  <label for="url">Site web</label>
				<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
			</div>
</div>
		<?php endif; ?>

		<div>
			<textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
		</div>

		<div>
			<input name="submit" type="submit" id="submit" tabindex="5" value="Poster le commentaire" />
			<?php comment_id_fields(); ?>
		</div>
		
		<?php do_action('comment_form', $post->ID); ?>

		<!--<p>Tags disponibles : <code><?php echo allowed_tags(); ?></code></p>-->
		
	</form>

	<?php endif; ?>

</div>

<?php endif; ?>

</section>