<?php
	$scrollcount = get_option('swt_new_post');
 ?>
<?php query_posts('&showposts='.$scrollcount.'&caller_get_posts=10.&cat='.get_option('swt_new_exclude')); while ( have_posts() ) : the_post();$do_not_duplicate[] = $post->ID; ?>

    <div class="art_img_box clearfix">
	<div class="fl innerimg_box">
	  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">
			<?php if ( get_post_meta($post->ID, 'show', true) ) : ?>
				<?php $image = get_post_meta($post->ID, 'show', true); ?>
				<img src="<?php echo $image; ?>"width="200" height="154" alt="<?php the_title(); ?>"/>
				<?php else: ?>
				<?php if (has_post_thumbnail()) { the_post_thumbnail('home-thumb' ,array( 'alt' => trim(strip_tags( $post->post_title )), 'title' => trim(strip_tags( $post->post_title )),'class' => 'home-thumb')); }
				else { ?>
					 <img src="<?php echo catch_first_image() ?>" alt="<?php the_title(); ?>" width="200" height="154" />
				<?php } ?>
				<?php endif; ?>
				</a>
	</div>
    <div class="fr box_content">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php echo cut_str($post->post_title,40); ?></a></h2>        		
						<div class="info">
                    	<span>发布日期：<?php the_time('Y年m月d日') ?></span>|                        
						<span>点击：<small><?php post_views(' ', ' 次'); ?></small></span>|
						<span><?php comments_popup_link('暂无评论', '评论： <small>1</small>', '评论：<small>%</small>'); ?></span>
						</div>
                          <ul class="clearfix">
                  	 	<li>所属栏目：<?php the_category(', ') ?></li>
                   		<li class="art_tag"><?php the_tags(); ?></li>

                   </ul>   
                        
					<p class="intro">
						<?php if(has_excerpt()) the_excerpt();  
							else  
								 echo dm_strimwidth(strip_tags($post->post_content),0,110,"..."); ?>
					</p>
                   </div>
			<div class="news"></div>
             </div>
	<!-- ad -->
	<?php if ($wp_query->current_post == 0) : ?>
	<?php if (get_option('swt_adh') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/ad_h.php'); } ?>
	<?php endif; ?>	
	<!-- end: ad -->
<?php endwhile; ?>