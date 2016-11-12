<?php get_header(); ?>
<span id="btn_page_prev"><?php next_post_link( '%link', '<span id="fanye">〈</span>' ); ?></span>
<span id="btn_page_next"><?php previous_post_link( '%link', '<span id="fanye">〉</span>' ); ?></span>   
<div id="content">
	<div id="postlist">
	<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-single">
			<div class="post-title-single"><h9><?php if (is_sticky()) {echo "<font style='color:#D54E21;'>[推荐]</font>";} ?><?php the_title(); ?><em><?php $t1=$post->post_date; $t2=date("Y-m-d H:i:s"); $diff=(strtotime($t2)-strtotime($t1))/3600; if($diff<24){echo "<font style='color:red;font-size:10px;'> New</font>";} ?></em></h9>
<div class="post-single-info2">
	<?php the_time('Y-m-d H:i:s'); ?>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
<span class="post-info-category2">分类：<?php the_category(', ') ?></span>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
<span class="post-info-tags">标签: <?php the_tags('', ',', ' '); ?></span>
				<?php    
					$furl = get_post_meta($post->ID, 'FromURL', true);
					$fname = get_post_meta($post->ID, 'FromName', true);
					if ($furl||$fname) {            
					echo "<span class='post-info-url'><a href='$furl' rel='nofollow' target='_blank'>$fname</a></span>";         
					 }
				?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
<span class="post-info-view2"><?php printf( _e( '被小伙伴们围观了','Gztro' ) ); ?> <?php post_views(' '); ?>次</span>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<?php edit_post_link('编辑本文', '', ''); ?>
</div>
</div>
<!-- Baidu Button BEGIN -->
<div id="bdshare" style="width: 100%;margin: 10px 0px 10px 2px;" class="bdshare_t bds_tools get-codes-bdshare">
<span class="bds_more">分享到：</span>
<a class="bds_tsina"></a>
<a class="bds_qzone"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<a class="bds_t163"></a>
<a class="bds_bdhome"></a>
<a class="bds_bdxc"></a>
<a class="bds_douban"></a>
<a class="bds_mshare"></a>
<a class="bds_sqq"></a>
<a class="bds_thx"></a>
<a class="bds_hi"></a>
<a class="bds_taobao"></a>
<a class="bds_ty"></a>
<a class="bds_copy"></a>
<a class="bds_sohu"></a>
<a class="bds_tieba"></a>
<a class="bds_baidu"></a>
<a class="bds_kaixin001"></a>
<a class="bds_msn"></a>
<a class="bds_tqf"></a>
<a class="bds_qq"></a>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6533465" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->
<div class="post-content">
<?php the_content(__('阅读全文')); ?>
<?php wp_link_pages(array('before' => '<div class="pnext-st">', 'after' => '', 'next_or_number' => 'next', 'previouspagelink' => '上一页', 'nextpagelink' => "")); ?>   <?php wp_link_pages(array('before' => '', 'after' => '', 'next_or_number' => 'number', 'link_before' =>'<span>', 'link_after'=>'</span>')); ?>   <?php wp_link_pages(array('before' => '', 'after' => '</div>', 'next_or_number' => 'next', 'previouspagelink' => '', 'nextpagelink' => "下一页")); ?></div>



<div class="crinfo">			


<?php if (get_option('Gztro_wenz_ad_bottom')!="") {?>
<div class="widget-adcode">
		<?php if (get_option('Gztro_wenz_ad_bottom')!="") {?>
			<?php echo stripslashes(get_option('Gztro_wenz_ad_bottom')); ?>
		<?php }?></div>
<?php }?>



</div>
<div id="wumiiDisplayDiv" class="wumiidisplay"></div>
<div id="comments"><?php comments_template('', true); ?></div>
	</div>
	<?php endwhile; endif; ?>
	
	</div>
<?php include_once("sidebar2.php"); ?>
<?php get_footer(); ?>