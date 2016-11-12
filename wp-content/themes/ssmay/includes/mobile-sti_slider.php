<?php query_posts(array(
				'posts_per_page' => 3,
				'post__in'  => get_option('sticky_posts'),
				'caller_get_posts' => 10
				)
);
?>