<?php
function the_breadcrumb() {
    echo '<ol class="breadcrumb">';
  if (!is_home()) {
    echo '<li class="breadcrumb-item"><a href="';
    echo get_option('home');
    echo '">';
    echo 'Home';
    echo "</a></li>";
    if (is_category() || is_single()) {
      echo '<li class="breadcrumb-item">';
      the_category(' </li><li> ');
      if (is_single()) {
        echo "</li><li>";
        the_title();
        echo '</li>';
      }
    } elseif (is_page()) {
      echo '<li class="breadcrumb-item active">';
      echo the_title();
      echo '</li>';
    }
  }
  elseif (is_tag()) {single_tag_title();}
  elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
  elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
  elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
  elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
  elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
  elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
  echo '</ul>';
}

function get_menu_by_location( $location ) {
    if( empty($location) ) return false;

    $locations = get_nav_menu_locations();
    if( ! isset( $locations[$location] ) ) return false;

    $menu_obj = get_term( $locations[$location], 'nav_menu' );

    return $menu_obj;
}

function the_excerpt_shortcode(){
  $excerpt = get_the_content();
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  $the_str = substr($excerpt, 0, 140)." ...";
  echo $the_str;
}