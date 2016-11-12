<div id="sidebar">
<div class="sidebar">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('首页侧栏') ) : ?><?php if ( is_home()) { ?>
<div class="sidebox"><iframe MARGINWIDTH=0 MARGINHEIGHT=0  HSPACE=0 VSPACE=0 FRameBORDER=0 SCROLLING=no src=<?php echo get_settings('home'); ?>/sidebarbox topmargin=0 width=100% height=340></iframe></div>
<div id="search" class="search">
<form id="searchform" method="get" action="<?php echo get_settings('home'); ?>/?">
<input type="text" value="" name="s" id="s" size="30" style="height: 27px;border: 1px solid rgb(221, 221, 221);" x-webkit-speech="">
<button type="submit" id="searchsubmit" style="width: 65px;height: 30px;margin-left: 8px;background-color: rgb(226, 226, 226);border: 2px solid rgb(226, 226, 226);"><i class="iconfont" style="font-family: 微软雅黑;font-style: normal!important;">搜索</i></button></form></div>
<div class="weibo">
<a href="http://weibo.com/"><li class="sina"><img src="<?php bloginfo('template_directory'); ?>/images/sina.jpg" width: 300px;
height: 150px;></li></a>
<a href="http://t.qq.com/" target="_blank"><li class="tqq"><img src="<?php bloginfo('template_directory'); ?>/images/tqq.jpg" width: 300px;
height: 150px;></li></a></div>
<?php if (get_option('Gztro_sid_ad_top')!="") {?>
	<div class="widget-adcode">
		<?php if (get_option('Gztro_sid_ad_top')!="") {?>
			<?php echo stripslashes(get_option('Gztro_sid_ad_top')); ?>
		<?php }?></div>
<?php }?>
<?php if ( is_home()) { ?>
<?php } else {?>
<?php } ?>
<div class="feeds">
<a href="<?php bloginfo('url'); ?>/feed" target="_blank"><div class="feeds2"><li style="margin-top: 55px;margin-left: 8px;">Subscribe&nbsp;<font style="font-size: 21px;
">订阅</font><li></div></a></div>
<div class="toudi" style="height: 150px;background-color: #009ad8;margin-bottom: 8px;width: 100%;">
<a href="/toudi" target="_blank"  title="投稿给我们"><img src="<?php bloginfo('template_directory'); ?>/images/toudi.jpg" width: 300px;
height: 150px;></a></div>
<?php if (get_option('Gztro_sid_ad_bottom')!="") {?>
<div class="widget-adcode">
		<?php if (get_option('Gztro_sid_ad_bottom')!="") {?>
			<?php echo stripslashes(get_option('Gztro_sid_ad_bottom')); ?>
		<?php }?></div>
<?php }?>
<ul class="hotwz">
<div class="hotwzbt"><li><p>&nbsp;热门围观</p></li></div>
<?php 
$post_num = 18; // 设置调用条数 
$args = array( 
‘post_password’ => ”, 
‘post_status’ => ‘publish’, // 只选公开的文章. 
‘post__not_in’ => array($post->ID),//排除当前文章 
‘caller_get_posts’ => 1, // 排除置顶文章. 
‘orderby’ => ‘comment_count’, // 依评论数排序. 
‘posts_per_page’ => $post_num 
); 
$query_posts = new WP_Query(); 
$query_posts->query($args); 
while( $query_posts->have_posts() ) { $query_posts->the_post(); ?> 
<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">◆ <?php the_title(); ?></a></li> 
<?php } wp_reset_query();?></ul></div>
<div class="tagcloud2"><?php wp_tag_cloud();?>
<?php } ?>
    <?php if ( is_home()) { ?><?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&category_before=<div id=%id class="linkcat widget">&category_after=</div>'); ?><?php } ?>
<?php endif; ?>
</div></div></div></ul></li></ul></div></div></div>