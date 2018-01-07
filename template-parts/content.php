<?php
while (have_posts()) {
	the_post();
?>
	<div>カテゴリー：<?php the_category(' '); ?></div>
	<div>タイトル：<?php the_title(); ?></div>
	<div>本文：<?php the_content(); ?></div>
	<div>タグ：<?php the_tags('', ' '); ?></div>
<?php
}
?>
