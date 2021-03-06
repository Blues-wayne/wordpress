<?php get_header(); ?>
<div id="content">
	<div id="postlist">
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<div class="article">
		
	<div class="tagleft">
		<h9><a href="<?php the_permalink() ?>" target="_blank" rel="bookmark" title="<?php the_title_attribute(); ?>">
		
		<?php the_title(); ?><em><?php $t1=$post->post_date; $t2=date("Y-m-d H:i:s"); $diff=(strtotime($t2)-strtotime($t1))/3600; if($diff<24){echo "<font style='color:red;font-size:8px;'> New</font>";} ?></em></a></h9>
	</div>
	<div class="thumbnail_box">
		<div class="thumbnail">
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">
			<?php if ( get_post_meta($post->ID, 'show', true) ) : ?>
				<?php $image = get_post_meta($post->ID, 'show', true); ?>
				<img src="<?php echo $image; ?>"width="140" height="100" alt="<?php the_title(); ?>"/>
				<?php else: ?>
				<?php if (has_post_thumbnail()) { the_post_thumbnail('home-thumb' ,array( 'alt' => trim(strip_tags( $post->post_title )), 'title' => trim(strip_tags( $post->post_title )),'class' => 'home-thumb')); }
				else { ?>
					 <img src="<?php echo my_thumbnail() ?>" alt="<?php the_title(); ?>" width="140" height="100" />
				<?php } ?>
				<?php endif; ?>
				</a>
		</div>
	</div>
	<div class="entry_post">
<span><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 312,"  ...  "); ?><a href="<?php the_permalink() ?>" rel="bookmark" target="_blank" title="<?php the_title(); ?> - 阅读全文">  【 阅读全文 】</a></span>
<div class="clear"></div>
</div></li></ul>
	
<div class="infotop2">
本文于<span class="post-info-date"><?php the_time('m') ?>月<?php the_time('d') ?>日</span>
发布在<span class="post-info-category">（<?php the_category(',') ?>）分类下</span>
<span class="post-info-view"><?php printf( _e( '被小伙伴们围观了','Gztro' ) ); ?> <?php post_views(' '); ?>次</span>
<span class="post-info-comment"><?php comments_popup_link ('沙发还在','还有板凳','共%条评论'); ?> &nbsp; </span></div>
</div>
		<?php endwhile; endif; ?>
		<div class="pagenavi"><?php pagenavi(); ?></div>
	</div>

<?php include_once("sidebar2.php"); ?>
<?php get_footer(); ?>