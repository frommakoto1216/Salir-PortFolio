<?php
// functions.php

function breadcrumb(){
    global $post;
    $str ='';
    if(!is_home()&&!is_admin()){
        $str.= '<section id="bread" class="cf"><ul itemscope itemtype="http://data-vocabulary.org/Breadcrumb"">';
        $str.= '<li id="b_home"><a href="'. home_url() .'" itemprop="url"><i class="icon-home" itemprop="title"></i></a></li>';
        if(is_category()) {
            $cat = get_queried_object();
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                foreach($ancestors as $ancestor){
$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor) .'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor) .'</span></a> &gt;&#160;</li>';
                }
            }
$str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a> &gt;&#160;</li>';
        } elseif(is_page()){
            if($post -> post_parent != 0 ){
                $ancestors = array_reverse(get_post_ancestors( $post->ID ));
                foreach($ancestors as $ancestor){
                    $str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_permalink($ancestor).'" itemprop="url"><span itemprop="title">'. get_the_title($ancestor) .'</span></a> &gt;&#160;</li>';
                }
            }
        } elseif(is_single()){
            $categories = get_the_category($post->ID);
            $cat = $categories[0];
            if($cat -> parent != 0){
                $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
                foreach($ancestors as $ancestor){
                    $str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor).'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor). '</span></a>→</li>';
                }
            }
            $str.='<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a> &gt;&#160;</li>';
        } else{
            $str.='<li>'. wp_title('', false) .'</li>';
        }
        $str.='</ul></section>';
    }
    echo $str;
}



/**
 * 画像のURLからattachemnt_idを取得する
 *
 * @param string $url 画像のURL
 * @return int attachment_id
 */
function get_attachment_id($url)
{
    global $wpdb;
  $sql = "SELECT ID FROM {$wpdb->posts} WHERE guid = %s";
  $post_name = $url;
  $id = (int)$wpdb->get_var($wpdb->prepare($sql, $post_name));
 
  if($id == 0)
  {
    $sql = "SELECT ID FROM {$wpdb->posts} WHERE post_name = %s";
    preg_match('/([^\/]+?)(-e\d+)?(-\d+x\d+)?(\.\w+)?$/', $url, $matches);
    $post_name = $matches[1];
    $id = (int)$wpdb->get_var($wpdb->prepare($sql, $post_name));
  }
    return $id;
}
 
/**
 * 画像のURLのサイズ違いのURLを取得する
 * 
 * @param string $url 画像のURL
 * @param string $size 画像のサイズ (thumbnail, medium, large or full)
 */ 
function get_attachment_image_src($url, $size) 
{
  // $image = array();
  $image = wp_get_attachment_image_src(get_attachment_id($url), $size);
  if(is_array($image))
  {
      return $image[0];
  }else{
      return $url;
  }
}
 
/**
* サムネイルを取得する
* @param string $meta カスタムフィールドのmeta_key
**/
function catch_that_image($meta = null) 
{
    global $post;
    $first_img = '';
  //カスタムフィールドの値を取得する
  if(!empty($meta)&&is_string($meta)){
    $image = get_post_meta($post->ID,$meta,true);
     if(!empty($image)){
          $metas = get_post_meta($post->ID,$meta,false);
          foreach($metas as $val){
            $first_img = $val;
            break;
          }
        }
  }
  //なければサムネイル画像を取得する
  if(empty($first_img))
  { 
    $first_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
    if(is_array($first_img))
      $first_img = $first_img[0];
  }
  //更になければ記事の１枚目の画像を取得する
  if(empty($first_img))
  {   
      ob_start();
      ob_end_clean();
      $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
      $cnt = 0;
    foreach( $matches[1] as $key => $value)
    {
      if(!preg_match('/plugins/',$value) )
      {
        if($cnt < 1)
        {
          $first_img = $value; $cnt++;
          $first_img = preg_replace('/(-\d+x\d+)/','',$first_img);
          $thumb_img = get_attachment_image_src($first_img, "thumbnail");  
          if(!empty($thumb_img))  $first_img = $thumb_img;
        }
      }  
          
    }
  }
  //更になければダミー画像を代入する
  if(empty($first_img))
  { 
    //ダミーの画像へのパス
        $first_img = esc_url(home_url('/cms/wp-content/themes/salirthemes/images/')) . 'noimages.png';
     }
 
  return $first_img;
}

// head Clean
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_shortlink_wp_head');
add_filter( 'emoji_svg_url', '__return_false' );
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
function my_delete_local_jquery() {
    wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_delete_local_jquery' );


// widget
function sample_scripts(){
  wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'sample_scripts');

// widget アーカイブ 年
function add_nen_year_archives( $link_html ) {
    $regex = array ( 
        "/ title='([\d]{4})'/"  => " title='$1年'",
        "/ ([\d]{4}) /"         => " $1年 ",
        "/>([\d]{4})<\/a>/"        => ">$1年</a>"
    );
    $link_html = preg_replace( array_keys( $regex ), $regex, $link_html );
    return $link_html;
}
add_filter( 'get_archives_link', 'add_nen_year_archives' );
 
// カスタムメニュー
add_theme_support('menus');

//ウィジェット
function sample_widgets(){
  register_sidebar(array(
    'name' => 'AboutSide',
    'id' => 'aboutside',
    'before_widget' => '<div class="aboutside">',
    'after_widget' => '</div>',  
  ));
  register_sidebar(array(
    'name' => 'DiscographyMenu',
    'id' => 'postcategory',
    'before_widget' => '<div class="postcate">',
    'after_widget' => '</div>',  
  ));
  register_sidebar(array(
    'name' => 'RecentEntries',
    'id' => 'postarchive',
    'before_widget' => '<div class="recent">',
    'after_widget' => '</div>',  
  ));
  register_sidebar(array(
    'name' => 'ニュースアーカイブ',
    'id' => 'newsarchive',
    'before_widget' => '<div class="newsarchives">',
    'after_widget' => '</div>',  
  ));
  register_sidebar(array(
    'name' => 'リンクスライダー',
    'id' => 'linkslider',
    'before_widget' => '',
    'after_widget' => '',
  ));
}
add_action('widgets_init', 'sample_widgets');


// 保護中のタイトルを外す
function my_protected_title_format( $title ) {
       return '%s';
}
add_filter( 'protected_title_format', 'my_protected_title_format' );

// 保護中は一覧に表示しない
function my_pre_get_posts ( $query ) {
  if ( ! is_admin() && $query->is_main_query() ) {
    if ( $query->is_archive() ) {
      $query->set( 'has_password', false );
    }
  }
}
add_action( 'pre_get_posts', 'my_pre_get_posts' );

?>