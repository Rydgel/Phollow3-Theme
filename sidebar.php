<aside class="four columns">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
<ul id="sidebar">
    <li class="recent-posts">
        <h3>Billets récents</h3>
        <ul>
        <?php
         global $post;
         $myposts = get_posts('numberposts=7&offset=0');
         foreach($myposts as $post) :
           setup_postdata($post);
         ?>
            <li><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
         <?php endforeach; ?>
      </ul>
    </li>
    
    <li class="categories">
      <h3 class="widget-title">Catégories</h3>
      <ul>
        <?php wp_list_categories( 'title_li=&show_count=1' ); ?>
      </ul>
    </li>
    <li class="blogoliste">
      <h3>D'autres blogs</h3>
      <ul>
        <?php wp_list_bookmarks( 'title_li=&categorize=0' ); ?> 
      </ul>
    </li>
    <li class="archives">
      <h3>Archives</h3>
      <ul>
        <?php wp_get_archives('show_post_count=true'); ?> 
      </ul>
    </li>
</ul>
  <?php endif; ?>
</aside>