<?php
/*
Template Name: single - Discography - image
*/
?>
<?php get_header("single"); ?>
<main id="main">
 <!-- contentshead -->
 <div class="conthead disco">
  <div id="conttext">
  <img src="<?php bloginfo(stylesheet_directory); ?>/images/h2_title_disco.png" alt="Discography">
  </div>
 </div>
 <!-- contents -->
 <div id="container">
  <div id="contents">
   <div class="c_area">
   <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
   <h3><?php the_title(); ?></h3>
   <small><time><?php the_time('Y年n月j日'); ?></time></small>
   <span class="cat">
   <?php 
   $cats = get_the_category(); 
   $cat_id = $cats[1]->term_id; $cat_name = $cats[1]->name; ?>
   <?php echo $cat_name; ?>
   </span>
   <div id="thumbnail">
   <?php if(get_field('images')): ?>
   <a class="zoom" href="<?php the_field('images'); ?>" title="<?php the_title(); ?>" data-lity>
   <img src="<?php the_field('images'); ?>" alt="<?php the_title(); ?>">
   </a>
   <?php endif; ?>
   </div>
   <dl id="createinfo">
	<dt><span class="title">クライアント</span></dt>
	<dd>
	<?php if(get_field('client')): ?>
	<?php the_field('client'); ?>
	<?php endif; ?> さま
	</dd>
	<dt><span class="title">制作目的など</span></dt>
	<dd>
	<?php if(get_field('case')): ?>
	<?php the_field('case'); ?>
	<?php endif; ?>
	</dd>
   </dl>
   <p><?php the_content(); ?></p>
   </div>
  </div>
  <div id="sidenav">
  <div class="s_area">
   <h5>Recent Entry</h5>
   <ul class="s_nav">
   <?php $posts = get_posts('numberposts=5&cat=2'); global $post;?>
   <?php foreach($posts as $post): ?>
   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
   <?php endforeach; ?>
   </ul>
  </div>
  <div class="s_area">
   <h5>Archives</h5>
   <ul class="s_nav">
   <?php wp_get_archives('type=yearly&cat=2'); ?>
   </ul>
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