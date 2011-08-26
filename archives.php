<?php
/*
Template Name: Archives page
*/
?>
<?php get_header(); ?>

<?php
  global $wp_query;
  $count_posts = wp_count_posts();
  $numposts = $count_posts->publish; // Nombre de billets publiés

  // nombre de billets dans la première et deuxième colonne
  $columnOneTwoPosts = round($numposts / 3);

  // dans la troisième...
  if(3 * $columnOneTwoPosts < $numposts) {
  	$columnThreePosts = $columnOneTwoPosts + 1;
  } elseif(3 * $columnOneTwoPosts > $numposts) {
  	$columnThreePosts = $columnOneTwoPosts - 1;
  } elseif(3 * $columnOneTwoPosts == $numposts) {
  	$columnThreePosts = $columnOneTwoPosts;
  }
  
  $columnOneOffset = 0;
  $columnTwoOffset = $columnOneTwoPosts;
  $columnThreeOffset = 2 * $columnOneTwoPosts;
?>
<section id="claim" class="sixteen columns">
  <h2 class="pagetitle"><em>Archives - CTRL-F, ????, <b>PROFIT!</b></em></h2>
  <hr>
</section>
<div id="container" class="sixteen columns">
  <div class="one-third column alpha">
     <ul class="archives-list">
        <?php query_posts('showposts='.$columnOneTwoPosts.'&offset='.$columnOneOffset); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <li><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

        <?php endwhile; endif; ?>
     </ul>
  </div>
  <div class="one-third column">
     <ul class="archives-list">
        <?php query_posts('showposts='.$columnOneTwoPosts.'&offset='.$columnTwoOffset); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <li><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

        <?php endwhile; endif; ?>
     </ul>
  </div>
  <div class="one-third column omega">
     <ul class="archives-list">
        <?php query_posts('showposts='.$columnThreePosts.'&offset='.$columnThreeOffset); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <li><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

        <?php endwhile; endif; ?>
     </ul>
  </div>
</div>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>