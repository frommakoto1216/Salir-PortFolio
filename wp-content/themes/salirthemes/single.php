<?php
/*
Template Name: Single
*/
if ( in_category('3') ) {
  include(TEMPLATEPATH . '/single/web.php');
} else if ( in_category('4') ) {
  include(TEMPLATEPATH . '/single/image.php');
} else if ( in_category('5') ) {
  include(TEMPLATEPATH . '/single/movie.php');
} else if ( in_category('11') ) {
  include(TEMPLATEPATH . '/single/writer.php');
}else {
  include(TEMPLATEPATH . '/single/news.php');
}
?>