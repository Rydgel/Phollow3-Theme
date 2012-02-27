<?php
/*
Template Name: Archives page
*/
?>
<?php get_header(); ?>

<section id="claim" class="sixteen columns">
  <h2 class="pagetitle"><em>Archives - CTRL-F, ????, <b>PROFIT!</b></em></h2>
  <hr>
</section>
<div id="container" class="sixteen columns">
     <ul class="archives-list">
        <?php query_posts('posts_per_page=-1'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li>
          <time class="archives-date three columns">
            <?php the_time('j F, Y') ?>
          </time>
          <section class="archives-perma seven columns">
            <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          </section>
          <section class="archives-comments three columns">
            <a href="<?php comments_link(); ?>"><?php comments_number('0 commentaire', '1 commentaire', '% commentaires' );?></a>
          </section>
          <section class="archives-permalink three columns">
            <a href="<?php the_permalink() ?>">Permalien</a>
          </section>
          <div class="clearfix"></div>
        </li>
        <?php endwhile; endif; ?>
     </ul>
  </div>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>