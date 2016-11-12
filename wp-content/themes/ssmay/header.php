<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/includes/<?php echo get_option('mytheme_colour'); ?>.css" type="text/css">
	<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js">\x3C/script>')</script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery_cmhello.js"></script>
	<?php if ( is_home() ){ ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.min.js"></script>
	<?php } ?>
	<script type="text/javascript">HcmsLazyload("<?php bloginfo('template_url'); ?>/images/space.gif");</script> 

	<title><?php if (is_home() ) {?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?><?php } else {?><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?> <?php } ?></title>
	<?php if (is_home())
	{
	$description = get_option('swt_description');
	$keywords = get_option('swt_keywords');
	}
	elseif (is_category())
	{
	$description = category_description();
	$keywords = single_cat_title('', false);
	}
	elseif (is_tag())
	{
	$description = tag_description();
    $keywords = single_tag_title('', false);
	}
	elseif (is_single())
	{
     if ($post->post_excerpt) {$description = $post->post_excerpt;} 
	 else {$description = substr(strip_tags($post->post_content),0,240);}
    $keywords = "";
    $tags = wp_get_post_tags($post->ID);
    foreach ($tags as $tag ) {$keywords = $keywords . $tag->name . ", ";}
	}
	?>
	<meta name="keywords" content="<?php echo $keywords ?>" />
	<meta name="description" content="<?php echo $description?>" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	<link rel="alternate" type="application/rss+xml" title="网站 RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="网站 Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	
</head>



<body <?php body_class(); ?>>
<div id="zhu_beijin">
<div id="ssmay">   
       <!--  <ul id="navleft">
            <li><a target="_blank" href="http://ssmay.com/">首 页</a></li>

        </ul> -->
        <div id="navright" class="m-r-8">
            <ul>
			   <?php
                 global $user_ID, $user_identity, $user_email, $user_login;
                 get_currentuserinfo();
                 if (!$user_ID) {
               ?>
               <li class="toploginbg">
                    <form id="loginform" action="<?php echo get_settings('siteurl'); ?>/wp-login.php" method="post" target="_blank">用户名：<input class="toplogin_input" type="text" name="log" id="log" />　密码：<input class="toplogin_input" type="password" name="pwd" id="pwd" />
                </li>
                <li class="but_login">
				        <input type="submit" class="but_loginlogin" value="登录" name="submit" target="_blank" /></form>
				</li>
				
				 <li><a rel="nofollow" href="" target="_blank" class="tqq" title="关注我的微博">微博</a></li><li><div class="topline"></div></li><li><a href="" target="_blank" class="rssmail" title="给我发邮件" rel="nofollow">邮箱</a></li>
				
				<?php } 
                              else { ?><div id="navrightr" class="m-r-8"><div class="navrightlogin"><ul><li><a href="<?php bloginfo('url') ?>/wp-admin/" target="_blank">控制面板</a></li>
                <li><div class="topline"></div></li>
				<li><a href="<?php bloginfo('url'); ?>/wp-admin/post-new.php" target="_blank">撰写文章</a></li><li><div class="topline"></div></li>
				<li><a href="<?php bloginfo('url'); ?>/wp-admin/edit-comments.php" target="_blank">评论管理</a></li><li><div class="topline"></div></li>
				<li><a href="<?php bloginfo('url'); ?>/wp-login.php?action=logout&amp;redirect_to=<?php echo urlencode($_SERVER['REQUEST_URI']) ?>">登出</a></li></ul></div></div><?php } ?>
				
             </ul>
        </div>
</div>
 



<div id="header" class="png_bg">
	<div id="search_bg">
                  <div id="search_main">
                         <div class="logo">
		                          <a target="_blank" href="http://www.fashion8844.com/"><img atl="爱美时尚网" src="<?php bloginfo('template_url'); ?>/images/logo.jpg"></a>
                         </div>
	                    
	                     <div class="logo4"><!--图片广告-->	
	                              <?php if (get_option('swt_top') == 'Hide') { ?>
				                  <?php { echo ''; } ?>
				                  <?php } else { include(TEMPLATEPATH . '/includes/ad_c1.php'); } ?>
	                     </div>	 		  
                  </div>

	              <div class="topnav"><!-- 菜单 -->
                                 <?php wp_nav_menu( array( 'container' => '','items_wrap' => '<ul id="nav" class="menu">%3$s</ul>','fallback_cb'     => '' ) ); ?>
								
                                 <?php include (TEMPLATEPATH . '/searchform.php'); ?>	
				  </div>
				  
				  <?php if (get_option('swt_new_pp') == 'Display') { ?><!-- 菜单下面附页 -->
					 <?php include (TEMPLATEPATH .'/includes/header_fuye.php'); ?> 
			<?php } else { echo ''; } ?>  
			   
			   
	   
	      <div class="clearfix"></div>
   </div>
</div>