<?php get_header(); ?>
<section id="claim" class="sixteen columns">
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // U MAD WORDPRESS ? Pour la fonction date. ?>

			<?php if (is_category()) { ?>
				<h2 class="pagetitle"><em>Archives de la catégorie <b>&#8216;<?php single_cat_title(); ?>&#8217;</b></em></h2>

			<?php } elseif( is_tag() ) { ?>
				<h2 class="pagetitle"><em>Articles taggués <b>&#8216;<?php single_tag_title(); ?>&#8217;</b></em></h2>

			<?php } elseif (is_day()) { ?>
				<h2 class="pagetitle">Archives de <?php the_time('F jS, Y'); ?></h2>

			<?php } elseif (is_month()) { ?>
				<h2 class="pagetitle">Archives de <?php the_time('F, Y'); ?></h2>

			<?php } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archives de <?php the_time('Y'); ?></h2>

			<?php } elseif (is_author()) { ?>
				<h2 class="pagetitle">Archives de l'auteur</h2>

			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Archives du blog</h2>
			
			<?php } ?>
      <hr>
</section>
<div id="container" class="twelve columns">
			<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				  
						<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
						<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

						<div class="entry">
							<?php echo improved_trim_excerpt(50); ?>
						</div>
						
						<footer class="permalink-button">
      				<a href="<?php the_permalink(); ?>" class="button">Lire la suite &gt;</a>
      			</footer>

				</article>

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>