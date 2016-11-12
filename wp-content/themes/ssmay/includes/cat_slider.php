<?php
$cat_slider = explode(',', get_option('swt_cat_slider'));
query_posts(array(
				'posts_per_page' => 5,
				'category__in' =>$cat_slider,
				'caller_get_posts' => 10,
				)
);
?>