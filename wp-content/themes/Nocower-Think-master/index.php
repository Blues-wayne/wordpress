<?php get_header(); ?>
<div id="content">
<div id="postlist">
<div class="indexwz1" >
<div class="indexwz" >
<div class="picwz" ><ul>
<?php query_posts('meta_key=hot&showposts=5');while (have_posts()) : the_post(); ?>
<?php if (1) : ?>
<li class="biaoti" style="margin:7px 0px 7px 0px;float: none;"><a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,31); ?></a></li>
<li style="height: 64px;border-bottom: 1px solid #eee;padding-bottom: 7px;">
<div class="picwzpic">
    <?php 
if ( has_post_thumbnail() ) { ?> 
<a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
<?php } else {?> 
<a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/nopic<?php echo rand(1,10)?>.jpg" /></a>
<?php } ?></div>
<p style="line-height: 19px;overflow: hidden;font-size: 12px;padding-top: 4px;float: none;">
<?php if (has_excerpt()) {
                echo $description = get_the_excerpt(); //文章编辑中的摘要
            }else {
                echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 83,"…"); //文章编辑中若无摘要，自定截取文
            } ?></p></li>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</li></ul></div>
<div class="tjwz3" ><h1 style="height: 40px;font-size: 16px;color: #f60;line-height: 30px;font-weight: bold;text-shadow: 0 1px 0 #EEE;">推荐文章</h1>
<?php query_posts('meta_key=top&showposts=5');while (have_posts()) : the_post(); ?>
<?php if (0) : ?>
<?php else: ?>
<div class="tjwz3bt"><li style="color: #0060a6!important;text-align: center;"><a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,41); ?></a></li>
<li><p><?php if (has_excerpt()) {
                echo $description = get_the_excerpt(); //文章编辑中的摘要
            }else {
                echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 109,"…"); //文章编辑中若无摘要，自定截取文
            } ?></p></li></div>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?></ul></div>
<div class="tjwz4" ><ul style="width: 360px;height: 80px;padding: 10px;padding-top: 15px;">
<?php query_posts('meta_key=zhuanti&showposts=1');while (have_posts()) : the_post(); ?>
<?php if (1) : ?>
<div class="picwz3"><div class="picwzpic2">
    <?php 
if ( has_post_thumbnail() ) { ?> 
<a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a><?php } else {?> 
<a href="<?php the_permalink(); ?>" target="_blank"  title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/zhuanti.jpg" /></a>
<?php } ?></div>
<li><a href="<?php the_permalink(); ?>"  target="_blank" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,31); ?></a></li><li>
<font style="font-size: 12px;color: #444!important;">
<?php if (has_excerpt()) {
                echo $description = get_the_excerpt(); //文章编辑中的摘要
            }else {
                echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 80,"…"); //文章编辑中若无摘要，自定截取文
            } ?></font>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?> 
</li></div></ul></div></div>
<div class="xwzx" >
<h1 style="height: 30px;font-size: 16px;color: #f60;line-height: 30px;font-weight: bold;text-shadow: 0 1px 0 #EEE;">最新看点</h1>
<?php $pop = $wpdb->get_results("SELECT id, post_title FROM {$wpdb->prefix}posts WHERE post_type='post' AND post_status='publish' AND post_password='' AND comment_count = 0 ORDER BY post_date desc LIMIT 40"); ?>
<div class="wenzneir" style="width: 670px;  height: 450px;">
<?php
query_posts('showposts=40');
while(have_posts()) : the_post();
?>
<ul> 
<li><a href="<?php the_permalink() ?>" target="_blank" title=”<?php the_title(); ?>”><?php echo cut_str($post->post_title,41); ?></a>
<span><?php the_time('m/d'); ?></span></li>
</ul>
<?php endwhile; ?></div></div></div>
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
<div class="article">
<div class="tagleft">
<h9><a href="<?php the_permalink() ?>" rel="bookmark" target="_blank" title="<?php the_title_attribute(); ?>">
		<?php the_title(); ?><em><?php $t1=$post->post_date; $t2=date("Y-m-d H:i:s"); $diff=(strtotime($t2)-strtotime($t1))/3600; if($diff<24){echo "<font style='color:red;font-size:8px;'> New</font>";} ?></em></a></h9></div>
<div class="thumbnail_box">
<div class="thumbnail">
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">
			<?php if ( get_post_meta($post->ID, 'show', true) ) : ?>
				<?php $image = get_post_meta($post->ID, 'show', true); ?>
				<img src="<?php echo $image; ?>"width="110" height="110" alt="<?php the_title(); ?>"/>
				<?php else: ?>
				<?php if (has_post_thumbnail()) { the_post_thumbnail('home-thumb' ,array( 'alt' => trim(strip_tags( $post->post_title )), 'title' => trim(strip_tags( $post->post_title )),'class' => 'home-thumb')); }
				else { ?>
					 <img src="<?php echo my_thumbnail() ?>" alt="<?php the_title(); ?>" width="110" height="110" />
				<?php } ?>
				<?php endif; ?></a></div></div>
<div class="entry_post">
<span><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 312,"  ...  "); ?><a href="<?php the_permalink() ?>" rel="bookmark" target="_blank" title="<?php the_title(); ?> - 阅读全文">  【 阅读全文 】</a></span>
<div class="clear"></div>
<div class="infotop">
本文于<span class="post-info-date"><?php the_time('m') ?>月<?php the_time('d') ?>日</span>
发布在<span class="post-info-category">（<?php the_category(',') ?>）分类下</span>
<span class="post-info-view"><?php printf( _e( 'viewsa','Gztro' ) ); ?> <?php post_views(' '); ?> <?php printf( _e( 'viewsb','Gztro' ) ); ?></span>
<span class="post-info-comment"><?php comments_popup_link ('沙发还在','还有板凳','共%条评论'); ?> &nbsp; </span></div></div></li></ul></div>
<?php endwhile; endif; ?>
<div class="pagenavi"><?php pagenavi(); ?></div></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>