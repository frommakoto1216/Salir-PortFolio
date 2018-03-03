<?php
/*
Template Name: Archive
*/
if ( in_category('2') ) {
  include(TEMPLATEPATH . '/archive/discography.php');
} else if ( in_category('3') ) {
  include(TEMPLATEPATH . '/archive/discography.php');
} else if ( in_category('4') ) {
  include(TEMPLATEPATH . '/archive/discography.php');
} else if ( in_category('5') ) {
  include(TEMPLATEPATH . '/archive/discography.php');
} else if ( in_category('11') ) {
  include(TEMPLATEPATH . '/archive/discography.php');
}else {
  include(TEMPLATEPATH . '/archive/news.php');
}
?><?php get_footer(""); ?>