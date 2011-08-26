<hr>
<section role="meta" id="meta">
  <div>URL raccourcie : <a title="<?php the_title(); ?>" href="<?php echo wp_get_shortlink(); ?>"><?php echo wp_get_shortlink(); ?></a></div>
  <div>Tags : <?php the_tags('', ', ', ''); ?></div>
</section>
<br>
<footer class="share">
<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo urlencode(the_permalink()); ?>" data-text="<?php echo the_title(); ?>" data-count="horizontal" data-via="phollow" data-lang="fr">Tweet</a>
<g:plusone size="medium" href="<?php echo urlencode(the_permalink()); ?>" count="true"></g:plusone>
<span class="fb_like"><fb:like href="<?php the_permalink(); ?>" layout="button_count" show_faces="false"></fb:like></span>
</footer>