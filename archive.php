<?php
get_header();
if (is_category()) {
	$category_id = get_query_var('cat');
	$category = get_category($category_id);
	$category_str = "カテゴリー：" . $category->name;
	echo($category_str);
} elseif(is_date()) {
	single_month_title();
}
get_template_part('template-parts/loop');
get_footer();
?>
