<?php
/**
 * Salir Header - Common
 */
?>
<!doctype html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# video: http://ogp.me/ns/video#">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<?php
$cat = get_the_category();
$catId = $cat[0]->cat_ID;
$catName = $cat[0]->name;
$catSlug = $cat[0]->category_nicename;
?>
<title><?php wp_title(''); ?> - <?php echo $catName; ?> &#x7C; Salir</title>
<meta name="description" content="Salirが制作･製作する作品情報の公式サイトです。お知らせやDiscographyなど、作品情報はこちらから！">
<meta name="author" content="Salir">
<meta property="og:title" content="Salir">
<meta property="og:type" content="website">
<meta property="og:description" content="Salirが制作･製作する作品情報の公式サイトです。お知らせやDiscographyなど、作品情報はこちらから！">
<meta property="og:url" content="https://salir-s.com">
<meta property="og:image" content="https://salir-s.com/cms/wp-content/themes/salirthemes/images/ogp/ogp_facebook.png">
<meta property="og:site_name" content="Salir">
<meta property="fb:app_id" content="318849258149863">
<meta property="og:locale" content="ja_JP">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KSHLNS');</script>
<!-- End Google Tag Manager -->
<?php wp_head(); ?>
<link rel="apple-touch-icon" href="<?php bloginfo(stylesheet_directory); ?>/images/icon.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjp.css">
<link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/fontello.css">
<link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/lity.min.css">
<link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/slick.css">
<link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/slick-theme.css">
<link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/common.css">
<link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/single.css">
<link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>/css/animation.css">
<!--[if IE 7]><link rel="stylesheet" href="<?php bloginfo(stylesheet_directory); ?>css/fontello-ie7.css"><![endif]-->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSHLNS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Loading -->
<div id="loader-bg">
  <div id="loader">
    <img src="<?php bloginfo(stylesheet_directory); ?>/images/loading.gif" alt="Now Loading..." />
  </div>
</div>
<!-- /Loading -->
<!-- Header -->
<header id="header">
 <nav>
 <h1><a href="<?php echo home_url() ?>" title="Salir">Salir</a></h1>
 <button class="md-trigger" data-modal="modal"><i class="icon-menu"></i></button>
 <div class="md-modal md-effect" id="modal">
<div class="md-content">
 <button class="md-close"><i class="icon-cancel"></i></button>
 <ul id="gnav">
  <li><a href="<?php echo get_category_link( 1 ); ?>" title="News Release">News Release</a></li>
  <li><a href="<?php echo get_permalink(10); ?>" title="About US">About US</a></li>
  <li><a href="<?php echo get_category_link( 2 ); ?>" title="Discography">Discography</a></li>
  <li><a href="https://ameblo.jp/a-kids/" title="Blog" target="_blank">Blog</a></li>
  <li><a href="<?php echo get_permalink(14); ?>" title="Contact">Contact</a></li>
 </ul>
 </div>
	</div>
<div class="md-overlay"></div>
</nav>
</header>
<!-- /Header -->