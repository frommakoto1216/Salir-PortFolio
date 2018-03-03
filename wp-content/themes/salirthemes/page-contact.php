<?php
/*
Template Name: Page - Contact
*/
?>
<?php get_header(""); ?>
<main id="main">
 <!-- contentshead -->
 <div class="conthead contact">
  <div id="conttext">
  <img src="<?php bloginfo(stylesheet_directory); ?>/images/h2_title_contact.png" alt="Contact">
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