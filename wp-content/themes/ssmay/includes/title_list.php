			<div class="cat_list">
			<div class="page_navi"><?php par_pagenavi(9); ?></div>
			<ul>
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<li>
			<h2><span class="date fr"><?php post_views(' ', '<small> ℃ </small>'); ?> | <?php the_time('Y-m-d') ?></span> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php echo cut_str($post->post_title,80); ?></a> 
			</h2>
			</li>
			<?php endwhile; ?>
			</ul> 
			<?php else : ?>
			<h3>什么也找不到！</h3>
			<p>抱歉,你要找的文章不在这里.</p>
			<?php endif; ?>
			<div class="page_navi"><?php par_pagenavi(9); ?></div>
			</div>