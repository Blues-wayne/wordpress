<?php get_header(); ?>
	
<div id="wrapper" class="clearfix">

	<div id="breadcrumbs" class="con_box clearfix">
		<div class="bcrumbs"><strong><a href="<?php bloginfo('home'); ?>" title="返回首页">home</a></strong>
		<a>错误：404 找不到该页面</a>
		</div>
	</div>
 	<div id="art_container clearfix">
 		<div id="art_main1" class="art_white_bg fl"> 
            <div class="art_title clearfix">
				<h1>HTTP 404: Not Found</h1>
			</div>
			<div class="article_content">
							<strong>请继续你的操作：</strong>
							<p><a href="<?php bloginfo('home'); ?>">返回首页</a></p>
							<p><a href="javascript:history.back();">返回前一页</a></p>
							<p><a href="/guestbook" target="_blank">留言将该错误链接提交给站长</a></p>
							<p>您还可以使用本站搜索功能找到你要的文章哦</p>
			</div><!--正文-->          
		</div><!--内容-->
	</div>
		<div class="clear"></div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>