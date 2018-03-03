<?php
/*
Template Name: Category - Discography
*/
?>
<?php get_header(""); ?>
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
   <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <div class="c_area">
    <dl class="categoryset">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <dt>
	<div class="trim">
	<?php if(get_field('screen')): ?>
	<img style="z-index:10;" src="<?php the_field('screen'); ?>">
	<?php endif; ?>
	<?php if(get_field('images')): ?>
	<img style="z-index:10;" src="<?php the_field('images'); ?>">
	<?php endif; ?>
	<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>">
	</div>
	</dt>
    <dd>
    <small><time><?php the_time('Y年n月j日'); ?></time></small>
   <span class="cat">
   <?php 
   $cats = get_the_category(); 
   $cat_id = $cats[1]->term_id; $cat_name = $cats[1]->name; ?>
   <?php echo $cat_name; ?>
   </span><br /><br /><br />
    <h4><?php the_title(); ?></h4>
    <p>
    <?php
    if(mb_strlen($post->post_content,'UTF-8')>150){
	$content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 200,'UTF-8'));
	echo $content.'……';
    }else{
    	echo str_replace('\n', '', strip_tags($post->post_content));
    }
    ?>
    </p>
    </dd>
    <div class="morebtn">More</div></a>
    </dl>
   </div>
   <?php endwhile; endif; ?>
   <?php if(function_exists('wp_pagenavi')) : wp_pagenavi(); endif; ?>
  </div>
  <div id="sidenav">
  <div class="s_area">
   <h5>Category</h5>
   <ul class="s_nav">
   <?php dynamic_sidebar( 'DiscographyMenu' ); ?>
   </ul>
  </div>
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
   <ul><?php wp_get_archives('type=yearly&cat=2'); ?></ul>
   </ul>
  </div>

  </div>
  </div>

 <?php get_footer(""); ?>