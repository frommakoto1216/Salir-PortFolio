<?php
/*
Template Name: Index
*/
?>
<?php get_header("idx"); ?>
<main id="main">
 <!-- slideshow -->
 <section id="slideshow">
  <ul class="idxslider">
   <li><img src="<?php bloginfo(stylesheet_directory); ?>/images/slide01.jpg" alt="img1"></li>
   <li><img src="<?php bloginfo(stylesheet_directory); ?>/images/slide02.jpg" alt="img2"></li>
   <li><img src="<?php bloginfo(stylesheet_directory); ?>/images/slide03.jpg" alt="img3"></li>
  </ul>
 </section>
 <!-- contents -->
 <div id="container">
  <div id="contents">
   <div class="c_area idx_h">
      <p>
    <h3>Topics</h3>
     <ul id="maintopix">
     <?php
     $posts = get_posts(array(
     'posts_per_page' => '3', 
     'offset'         => '0'
     ));
     ?>
     <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
     <li>
     <div class="topixarea">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
       <div class="trim">
	<?php if(get_field('screen')): ?>
	<img style="z-index:10;" src="<?php the_field('screen'); ?>">
	<?php endif; ?>
	<?php if(get_field('images')): ?>
	<img style="z-index:10;" src="<?php the_field('images'); ?>">
	<?php endif; ?>
	<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>">
       </div>
       <span class="cat"><?php $cat = get_the_category(); $cat = $cat[0]; $cat_name = $cat->cat_name; echo $cat_name; ?></span>
       <h4><?php the_title(); ?></h4>
       <small><time><?php the_time('Y年n月j日'); ?></time></small>
       <p><?php echo mb_substr(get_the_excerpt(), 0, 45); ?></p>
       <div class="morebtn">More</div>
	  </a>
      </div>
     </li>
     <?php endforeach; endif; ?> 
     </ul>
        <dl id="subtopix">
        <?php
        $posts = get_posts(array(
        'numberposts'     => '0',
        'offset'   => 3,
        'post_type'       => 'post'
        ));
        ?>
   <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
   <dt><div class="trim" style="z-index:100">
	<?php if(get_field('screen')): ?>
	<img style="z-index:10;" src="<?php the_field('screen'); ?>">
	<?php endif; ?>
	<?php if(get_field('images')): ?>
	<img style="z-index:10;" src="<?php the_field('images'); ?>">
	<?php endif; ?>
	<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>">
   </div></dt>
   <dd>
   <span class="cat"><?php $cat = get_the_category(); $cat = $cat[0]; $cat_name = $cat->cat_name; echo $cat_name; ?></span>
   <h4><?php the_title(); ?></h4>
   <small><time><?php the_time('Y年n月j日'); ?></time></small>
   <p><?php echo mb_substr(get_the_excerpt(), 0, 45); ?></p>
   <div class="morebtn">More</div>
   </dd>
   </a><?php endforeach; endif; ?> 
   </dl>
   </p>
   </div>
   
   <div class="c_area idx_h">
    <p>
    <h3>Discography</h3>
    <ul id="disco_category">
     <li>
      <div class="discoset">
       <a href="https://salir-s.com/category/discography/web/" title="Website">
        <h4>WebSite</h4>
        <div class="d_trim"><img src="<?php bloginfo(stylesheet_directory); ?>/images/img_idx_web.png" alt="website"></div>
        <p>過去に制作したWebSiteをまとめています。</p>
        <div class="morebtn">More</div>
       </a>
      </div>
     </li>
     <li>
     <div class="discoset">
      <a href="https://salir-s.com/category/discography/image/" title="Images">
       <h4>Images</h4>
       <div class="d_trim"><img src="<?php bloginfo(stylesheet_directory); ?>/images/img_idx_image.png" alt="images"></div>
       <p>過去に制作した静止画･画像などをまとめています。</p>
       <div class="morebtn">More</div>
      </a>
     </div>
     </li>
     <li>
     <div class="discoset">
      <a href="https://salir-s.com/category/discography/movie/" title="Movie">
       <h4>Movie</h4>
       <div class="d_trim"><img src="<?php bloginfo(stylesheet_directory); ?>/images/img_idx_movie.png" alt="movie"></div>
       <p>過去に制作した動画･VTRをまとめています。</p>
       <div class="morebtn">More</div>
      </a>
     </div>
     </li>
     </ul>
     </p>
    </div>
  </div>

  <div id="sidenav">
  <div class="s_area">
   <h5>Trailer</h5>
   <div id="trailerarea">
   <p>現在映像がありません</p>
   </div>
  </div>
</div></div>
<!-- bread -->
 <section id="bread">
<ul>
   <li id="b_home"><a href="https://salir-s.com" title="Home"><i class="icon-home"></i></a></li>
   <li></li>
  </ul>
<?php get_footer("idx"); ?>