<?php get_header(); ?>



<div id="wrapper" class="clearfix">
	<div id="breadcrumbs" class="con_box clearfix">
		<div class="bcrumbs"><strong><a href="<?php bloginfo('home'); ?>" title="返回首页">home</a></strong>
		<li><?php the_category('  |  ') ?></li>
		<li><?php the_title() ?></li>
		</div>
	</div>
 	<div id="art_container clearfix">
 		<div id="art_main1" class="art_white_bg fl"> 
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div class="art_title clearfix">
            <span class="face_img"><?php echo get_avatar( get_the_author_email(), '50' ); ?></span>
				<h1><?php the_title(); ?></h1>
				<p class="info">
				
				<small>栏目:</small><?php the_category(', ') ?> 
				<small>作者:</small><?php the_author(); ?> 
				<small>评论:</small><?php comments_number('0','1','%'); ?>
				<small>点击:</small><?php post_views(' ', ' 次'); ?>
				<?php edit_post_link( __('[编辑文章]')); ?>
				</p><!-- /info -->  
			</div>
			<div class="article_content">
				<div class="article-tag">
				<?php the_tags('<p><strong>本文标签</strong>： ', ' , ','</p>' ); ?>
				</div>
				
				<?php if (get_option('swt_adr') == 'Hide') { ?>
				<?php { echo ''; } ?>
				<?php } else { include(TEMPLATEPATH . '/includes/adr.php'); } ?>
				
				<div class="clear"></div>
				<?php the_content(); ?> 
								</br><?php wp_link_pages(array('before' => '<div class="fenye">文章分页：', 'after' => '', 'next_or_number' => 'next', 'previouspagelink' => '上一页', 'nextpagelink' => "")); ?>
<?php wp_link_pages(array('before' => '', 'after' => '', 'next_or_number' => 'number', 'link_before' =>'<span>', 'link_after'=>'</span>')); ?>
<?php wp_link_pages(array('before' => '', 'after' => '</div>', 'next_or_number' => 'next', 'previouspagelink' => '', 'nextpagelink' => "下一页")); ?>



<!--相关文章开始-->
<div class="similarity">
<br><h5>相关文章：</h5>
<?php
$post_tags=wp_get_post_tags($post->ID); //如果存在tag标签，列出tag相关文章
$pos=1;
if($post_tags) {
foreach($post_tags as $tag) $tag_list[] .= $tag->term_id;
$args = array(
'tag__in' => $tag_list,
'category__not_in' => array(NULL), // 不包括的分类ID,可以把NULL换成分类ID
'post__not_in' => array($post->ID),
'showposts' => 0, // 显示相关文章数量
'caller_get_posts' => 1,
'orderby' => 'rand'
);
query_posts($args);
if(have_posts()):while (have_posts()&&$pos<=6) : the_post(); update_post_caches($posts); ?>
<li><span><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php if(get_the_title())the_title();else the_time('Y-m-d'); ?></a></span> <span id="shijian"><?php the_time('Y-m-d') ?></span></li>
<?php $pos++;endwhile;wp_reset_query();endif; ?>
<?php } //end of rand by tags ?>
<?php if($pos<=6): //如果tag相关文章少于10篇，那么继续以分类作为相关因素列出相关文章
$cats = wp_get_post_categories($post->ID);
if($cats){
$cat = get_category( $cats[0] );
$first_cat = $cat->cat_ID;
$args = array(
'category__in' => array($first_cat),
'post__not_in' => array($post->ID),
'showposts' => 0,
'caller_get_posts' => 1,
'orderby' => 'rand'
);
query_posts($args);
if(have_posts()): while (have_posts()&&$pos<=6) : the_post(); update_post_caches($posts); ?>
<li><span><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute();?>"><?php if(get_the_title())the_title();else the_time(‘Y-m-d’); ?></a></span> <span id="shijian"><?php the_time('Y-m-d');if($options['tags']):the_tags(", '/', ");endif; ?></span></li>
<?php $pos++;endwhile;wp_reset_query();endif; ?>
<?php } endif; //end of rand by category ?>
<?php if($pos<=10){ //如果上面两种相关都还不够10篇文章，再随机挑几篇凑成10篇 ?>
<?php query_posts('showposts=10&orderby=rand');while(have_posts()&&$pos<=6):the_post(); ?>
<li><span><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php if(get_the_title())the_title();else the_time('Y-m-d') ?></a></span> <span id="shijian"><?php the_time('Y-m-d') ?></span></li>
<?php $pos++;endwhile;wp_reset_query();?>
<?php } ?>
</div><!--相关文章结束-->





				
				</br><div class="bshare-custom icon-medium"><div class="bsPromo bsPromo2"></div><a title="分享到" href="http://www.bShare.cn/" id="bshare-shareto" class="bshare-more">分享到</a><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到开心网" class="bshare-kaixin001" href="javascript:void(0);"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到搜狐微博" class="bshare-sohuminiblog" href="javascript:void(0);"></a><a title="分享到网易微博" class="bshare-neteasemb" href="javascript:void(0);"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count" style="float: none; ">12.8K</span></div>
				
				
				<?php if (get_option('swt_adt') == 'Hide') { ?><!-- 图片广告 --> 
				<?php { echo ''; } ?>
				<?php } else { include(TEMPLATEPATH . '/includes/adt.php'); } ?>
				
				<div class="clear"></div>
            			<?php   $custom_fields = get_post_custom_keys($post_id);
				if (!in_array ('copyright', $custom_fields)) : ?>

				<div class="postcopyright">
					<p><strong> 声明: </strong> 本文由(<a href="<?php bloginfo('home'); ?>"> <?php the_author(); ?> </a>)原创编译，转载请保留链接: <a href="<?php the_permalink()?>" title=<?php the_title(); ?>><?php the_title(); ?></a></p>
				</div>
			<?php else: ?>
			<?php  $custom = get_post_custom($post_id);
$custom_value = $custom['copyright']; ?>
				<div class="postcopyright">
					<p><strong> 声明: </strong> 本文参考自 <a rel="nofollow" target="_blank" href="/go.php?url=<?php echo $custom_value[0] ?>"><?php echo $custom_value[0] ?></a> ，由(<a href="<?php bloginfo('home'); ?>"> <?php the_author(); ?> </a>) 整编。</p>
					<p><strong> 本文链接: </strong><a href="<?php the_permalink()?>" title=<?php the_title(); ?>><?php the_title(); ?></a> .</p>
</div>
			<?php endif; ?>
				</div><!--正文--> 
			<div class="con_pretext clearfix">
					<ul>
						<li class="first">上一篇：<?php previous_post_link('%link') ?> </li>
						<li class="last">下一篇：<?php next_post_link('%link') ?></li>
					</ul>
					<?php if(function_exists('wp_thumbnails_for_related_posts')) { wp_thumbnails_for_related_posts();} ?>
			       <!--如果出错，请安装WP Keyword Link插件；如果不想安装插件，可以删除这句代码 -->
			</div>          
			  <?php if (comments_open()) comments_template( '', true ); ?>
				<?php if (get_option('swt_adc') == 'Hide') { ?>
				<?php { echo ''; } ?>
				<?php } else { include(TEMPLATEPATH . '/includes/ad_c.php'); } ?>
				<div class="clear"></div>
		</div><!--内容-->

			<?php endwhile; ?>

	
		<div class="clear"></div>
		

         <!--侧边栏-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
