<?php get_header(); ?>
	<div id="wrapper" class="clearfix">
	<div id="breadcrumbs" class="con_box clearfix">
		<div class="bcrumbs"><strong><a href="<?php bloginfo('home'); ?>" title="返回首页">home</a></strong>
			<a>含有搜索词【<?php the_search_query(); ?>】的文章</a>
		</div>
	</div><!-- //search -->
 		<div id="art_container clearfix">
 			<div id="art_main" class="fl"> 
		<?php if (get_option('swt_list') == 'Blog样式') { ?>
		<?php include(TEMPLATEPATH . '/includes/blog_list.php');?>
		<?php } else { include(TEMPLATEPATH . '/includes/title_list.php'); } ?>
            </div><!--内容-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>