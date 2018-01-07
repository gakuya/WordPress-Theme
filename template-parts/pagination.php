<?php 
global $wp_query;
$max_page = $wp_query->max_num_pages;

if ($max_page > 1) {
  $big = 999999999;
  echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'prev_text' => __('<'),
    'next_text' => __('>'),
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'mid_size' => 1
  ) );
}
?>
