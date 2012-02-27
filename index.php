<?php get_header(); ?>
<section id="claim-home" class="one-third column">
  <h1>Créateur de pixels <em>&amp;</em> codeur, <em>depuis</em> 1986.</h2>
  <hr>
  <p>T’es bonne ? Je fais des photos. Développeur web <em>&amp;</em> iPhone accessoirement.</p>
  <p>Tu peux aussi suivre mes aventures <em>palpitantes</em> ailleurs si tu as le coeur bien accroché.</p>
  <p><a href="https://twitter.com/phollow" class="twitter-follow-button" data-lang="fr">Suivre @phollow</a></p>
</section>
<?php
  global $wp_query;
?>
<?php query_posts('showposts=3&offset=0'); ?>
<?php $i=0; ?>
<div id="container-home-1" class="one-third column">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <header>
  			<h2 class="entry-title"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
        </header>	

  			<p>
  				<?php echo improved_trim_excerpt(); ?>
  			</p>

  		</article>
  		<?php if($i!=2):?>
      <hr>
      <?php endif; ?>
<?php $i ++;?>
<?php endwhile; endif; ?>
</div>

<?php query_posts('showposts=3&offset=3'); ?>
<?php $i=0; ?>
<div id="container-home-2" class="one-third column">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <header>
  			<h2 class="entry-title"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
        </header>	

  			<p>
  				<?php echo improved_trim_excerpt(); ?>
  			</p>

  		</article>
      <?php if($i!=2):?>
      <hr>
      <?php endif; ?>
<?php $i ++;?>
<?php endwhile; endif; ?>
</div>

<?php wp_reset_query(); ?>


<?php get_footer(); ?>