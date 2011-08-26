<?php get_header(); ?>
<div id="container" class="twelve columns">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <header>
			<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
      <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
      </header>	

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<?php include (TEMPLATEPATH . '/_/inc/share.php' ); ?>

		</article>
    <hr>
	  <?php comments_template(); ?>

    <?php endwhile; endif; ?>
</div>
<aside class="four columns">
<ul id="sidebar">
    <?php if(function_exists('echo_ald_crp')) echo_ald_crp(); ?>
</ul>
</aside>

<?php get_footer(); ?>