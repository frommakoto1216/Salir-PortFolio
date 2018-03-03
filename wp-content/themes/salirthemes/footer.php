<?php
/**
 * Salir Footer - Common
 */
?>
 <!-- bread -->
<?php breadcrumb(); ?>
 <!-- /bread -->
 <!-- linkarea -->
 <section id="linkarea">
 <div id="linkslider">
 <?php dynamic_sidebar('linkslider'); ?>
 </div>
 </section>
</main>
<!-- Main -->
<!-- Footer -->
<footer id="footer">
 <nav>
  <ul id="f_nav">
   <li><a href="<?php echo get_category_link( 1 ); ?>" title="News Release">News Release</a>
   </li>
   <li><a href="<?php echo get_permalink(10); ?>" title="About US">About US</a>
    <ul class="f_nav_sub">
	 <li><a href="<?php echo get_permalink(10); ?>" title="Information">Information</a></li>
	 <li><a href="<?php echo get_permalink(12); ?>" title="Profile">Profile</a></li>
	</ul>
   </li>
   <li><a href="<?php echo get_category_link( 2 ); ?>" title="Discography">Discography</a>
    <ul class="f_nav_sub">
	<li><a href="<?php echo get_category_link( 3 ); ?>" title="WebSite">WebSite</a></li>
	<li><a href="<?php echo get_category_link( 4 ); ?>" title="Images">Images</a></li>
	<li><a href="<?php echo get_category_link( 5 ); ?>" title="Movie">Movie</a></li>
	<li><a href="<?php echo get_category_link( 11 ); ?>" title="Writer">Writer</a></li>
	</ul>
   </li>
   <li><a href="<?php echo get_permalink(14); ?>" title="Contact">Contact</a>
    <ul class="smpopen">
	<li><a href="<?php echo get_permalink(16); ?>" title="Privacy Policy">Privacy Policy</a></li>
	<li><a href="<?php echo get_permalink(18); ?>" title="Site Policy">Site Policy</a></li>
	</ul>
   </li>
  </ul>
  <ul id="f_sns">
   <li><div><a href="https://www.facebook.com/salir.pr/" title="Facebook" target="_blank"><i class="icon-facebook"></i></a></div></li>
   <li><div><a href="https://twitter.com/salir_pr" title="Twitter" target="_blank"><i class="icon-twitter-bird"></i></a></div></li>
   <li><div><a href="https://www.instagram.com/from.makoto/" title="Instagram" target="_blank"><i class="icon-instagram"></i></a></div></li>
  </ul>
 </nav>
 <div id="topjamp"><a href="#wrap"><i class="icon-up"></i><p>top</p></a></div>
 <address><a href="<?php echo get_permalink(18); ?>" title="Site Policy">Copyright&copy;</a> 2011 - <?php echo date('Y');?>,Salir,Inc.All rights reserved.
 <script type="text/javascript" src="<?php bloginfo(stylesheet_directory); ?>/js/jquery.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo(stylesheet_directory); ?>/js/jquery-migrate.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo(stylesheet_directory); ?>/js/jquery.lazyload.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo(stylesheet_directory); ?>/js/slick.min.js"></script>
 <script src="<?php bloginfo(stylesheet_directory); ?>/js/idxslickslider.js"></script>
 <script src="<?php bloginfo(stylesheet_directory); ?>/js/linkslickslider.js"></script>
 <script type="text/javascript" src="<?php bloginfo(stylesheet_directory); ?>/js/lity.min.js"></script>
 <script type="text/javascript" src="<?php bloginfo(stylesheet_directory); ?>/js/loading.js"></script>
 <script type="text/javascript" src="<?php bloginfo(stylesheet_directory); ?>/js/topjamp.js"></script>
 <script src="<?php bloginfo(stylesheet_directory); ?>/js/classie.js"></script>
 <script src="<?php bloginfo(stylesheet_directory); ?>/js/modalEffects.js"></script>
 </address>
</footer>
<!-- /Footer -->
</body>
</html>
