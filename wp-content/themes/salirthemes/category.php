<?php
/*
Template Name: Category
*/
if ( in_category('2') ) {
  include(TEMPLATEPATH . '/category/discography.php');
} else if ( in_category('3') ) {
  include(TEMPLATEPATH . '/category/discography.php');
} else if ( in_category('4') ) {
  include(TEMPLATEPATH . '/category/discography.php');
} else if ( in_category('5') ) {
  include(TEMPLATEPATH . '/category/discography.php');
} else if ( in_category('11') ) {
  include(TEMPLATEPATH . '/category/discography.php');
}else {
  include(TEMPLATEPATH . '/category/news.php');
}
?><?php get_footer(""); ?>