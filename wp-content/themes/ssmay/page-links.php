<?php get_header(); ?>
	
<div id="wrapper" class="clearfix">

	<div id="breadcrumbs" class="con_box clearfix">
		<div class="bcrumbs"><strong><a href="<?php bloginfo('home'); ?>" title="返回首页">home</a></strong>
		<a><?php the_title(); ?></a>
		</div>
	</div>
 	<div id="art_container clearfix">
 		<div id="art_main1" class="art_white_bg fl"> 
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div class="page-links">
				<h3>友情链接</h3>
    <ul>
        <?php
        $default_ico = get_template_directory_uri().'/images/links_default.ico'; //默认 ico 图片位置
        $bookmarks = get_bookmarks('title_li=&orderby=rand'); //全部链接随机输出
        //如果你要输出某个链接分类的链接，更改一下get_bookmarks参数即可
        //如要输出链接分类ID为5的链接 title_li=&categorize=0&category=5&orderby=rand
        if ( !empty($bookmarks) ) {
            foreach ($bookmarks as $bookmark) {
            echo '<li><img src="', $bookmark->link_url , '/favicon.ico" onerror="javascript:this.src=\'' , $default_ico , '\'" /><a href="' , $bookmark->link_url , '" title="' , $bookmark->link_description , '" target="_blank" >' , $bookmark->link_name , '</a></li>';
            }
        }
        ?>
    </ul>
</div>         
                       
			<?php if (comments_open()) comments_template( '', true ); ?>
		</div><!--内容-->

			<?php endwhile; ?>

	</div>
		<div class="clear"></div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>