<?php get_header(); ?>
<section id="claim" class="sixteen columns">
  <h1>Créateur de pixels <em>&amp;</em> codeur, <em>depuis</em> 1986.</h2>
  <hr>
</section>
<div id="container" class="twelve columns">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <header>
			<h2 class="entry-title"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
      </header>	

			<div class="entry">
				<?php echo improved_trim_excerpt(); ?>
			</div>

			<footer class="permalink-button">
				<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="button">Lire la suite &gt;</a>
			</footer>

		</article>
    <hr>
	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>404</h2>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>