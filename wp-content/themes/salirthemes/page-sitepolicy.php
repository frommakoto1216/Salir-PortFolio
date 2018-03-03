<?php
/*
Template Name: Page - Site Policy
*/
?>
<?php get_header("page"); ?>
<main id="main">
 <!-- contentshead -->
 <div class="conthead policy">
  <div id="conttext">
  <img src="<?php bloginfo(stylesheet_directory); ?>/images/h2_title_spolicy.png" alt="Site Policy">
  </div>
 </div>
 <!-- contents -->
 <div id="container">
   <div class="wf_area">
   <?php if(have_posts()): while(have_posts()):the_post(); ?>
   <p><?php the_content(); ?></p>
   <?php endwhile; endif; ?>
   </p>
   </div>
  </div>
 <?php get_footer(""); ?>