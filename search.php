<?php get_header(); ?>

	<?php if (have_posts()) : ?>
<section id="claim" class="sixteen columns">
		<h2 class="pagetitle">Résultats de la recherche <em><b>‘ <?php echo $_GET['s']; ?> ’</b></em></h2>
    <hr>
</section>

<div id="container" class="twelve columns">
		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

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

		<h2>No posts found.</h2>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>