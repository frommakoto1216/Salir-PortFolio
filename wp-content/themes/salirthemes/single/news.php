<?php
/*
Template Name: single - News Release
*/
?>
<?php get_header("single"); ?>
<main id="main">
 <!-- contentshead -->
 <div class="conthead news">
  <div id="conttext">
  <img src="<?php bloginfo(stylesheet_directory); ?>/images/h2_title_news.png" alt="News Release">
  </div>
 </div>
 <!-- contents -->
 <div id="container">
  <div id="contents">
   <div class="c_area">
   <?php if(have_posts()): while(have_posts()):the_post(); ?>
   <h3><?php the_title(); ?></h3>
   <small><time><?php the_time('Y年n月j日'); ?></time></small>
   <span class="cat">News Release</span>
   <p style="clear:both;"><?php the_content(); ?></p>
   </div>
  </div>
  <div id="sidenav">
  <div class="s_area">
   <h5>Recent Entry</h5>
   <ul class="s_nav">
   <?php $posts = get_posts('numberposts=5&cat=1'); global $post;?>
   <?php foreach($posts as $post): ?>
   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
   <?php endforeach; ?>
   </ul>
  </div>
  <div class="s_area">
   <h5>Archives</h5>
   <ul class="s_nav"><ul><?php wp_get_archives('type=yearly&cat=1'); ?></ul></ul>
  </div>
  </div>
</div>
<?php endwhile; ?>
<?php else : ?>
  <div class="contents">
  <div class="c_area">
  <h3>記事がありません</h3>
  <p style="text-align:center;">表示する記事はありませんでした。</p>
  </div>
  </div>
  <?php endif; ?>
 <?php get_footer(""); ?>