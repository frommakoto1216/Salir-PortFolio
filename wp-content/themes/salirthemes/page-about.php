<?php
/*
Template Name: Page - About
*/
?>
<?php get_header("about"); ?>
<main id="main">
 <!-- contentshead -->
 <div class="conthead about">
  <div id="conttext">
  <img src="<?php bloginfo(stylesheet_directory); ?>/images/h2_title_about.png" alt="About US">
  </div>
 </div>
 <!-- contents -->
 <div id="container">
  <div id="contents">
   <div class="c_area">
   <?php if(have_posts()): while(have_posts()):the_post(); ?>
   <h3><?php the_title(); ?></h3>
   <p><?php the_content(); ?></p>
   <?php endwhile; endif; ?>
   </p>
   </div>
  </div>
  <div id="sidenav">
  <div class="s_area">
   <h5>Menu</h5>
   <ul class="s_nav">
<?php dynamic_sidebar('aboutside'); ?>
   </ul>
  </div>
  </div>
  </div>
 <?php get_footer(""); ?>