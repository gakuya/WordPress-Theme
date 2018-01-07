<table>
<thead></thead>
<tbody>
<?php
while (have_posts()){
	the_post();		// 次の投稿を取得する。
?>
	<tr>
		<td>
			<a href=<?php the_permalink() ?>/>
				<?php the_title() ?>
			</a>
		</td>
	</tr>
<?php
}
?>
</tbody>
</table>
<div>
<?php
get_template_part('template-parts/pagination');
?>
</div>
