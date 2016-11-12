<?php
/*
Template Name: Sidebarbox边栏幻灯
*/
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sidebarbox页面</title>
<meta name="description" content="www.nocower.com" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.hoveraccordion.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
	$('#accoradion01').hoverAccordion({
		activateItem:4,	     //默认下设置第4个滑动门展开	 
		onClickOnly:true,   //点击或悬停触发"false"、"true" 
		speed:'fast'         //滑动门切换过渡效果"fast"、"slow"、"normal"
	}); 
});
</script>
<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{font:12px/180% "微软雅黑";}
/* accoradion */
.accoradion{width:302px;background:#fff;color:#000;}
.accoradion ul{overflow:hidden;}
.accoradion li a.header{padding:0 0 0 10px;display:block;height:35px;line-height:35px;border-top:solid 1px #ffffff;position:relative;margin:-1px 0 0 0;font-size:14px;text-decoration:none;}
.accoradion li a.closed{background:#009ad9;color:#eeeeee}
.accoradion li a.opened{color: rgb(248, 248, 248);background: rgb(105, 105, 105);}
.accoradion li li{height:200px;position:relative;}
.accoradion li li h3{line-height:22px;padding:0 0 10px 0;}
.accoradion li li p{line-height:22px;}
.accoradion li a.opened:hover{color: #ff7227;background: rgb(107, 104, 104);}
.accoradion li a.header:hover{color: #ff7227;background-color: rgb(122, 122, 122);}
.accoradion li a.closed:hover{background: rgb(58, 176, 224);}
</style>
</head>
<body>
<div class="fqwen" style="width: 302px;  overflow: hidden;">
<ul id="accoradion01" class="accoradion">
<?php query_posts('meta_key=sidebar&showposts=4');while (have_posts()) : the_post(); ?>
<?php if (0) : ?><?php else: ?>
<li> <a href="javascript:;" target="_self" title="<?php the_title(); ?>" ><?php echo mb_strimwidth(get_the_title(), 0, 39, '...'); ?></a> 
<ul><li><a href="<?php the_permalink() ?>" target="_parent" rel="bookmark" title="<?php the_title(); ?>" ><?php the_post_thumbnail('sidebar',array('alt' => trim(strip_tags( $post->post_title )),'title'=> trim(strip_tags( $post->post_title )))); ?></a></li></ul></li>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
</div>
</body>
</html>
