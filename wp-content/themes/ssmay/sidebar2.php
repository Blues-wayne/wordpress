<div id="sider" class="fr">
	

 <div class="twitbar">
                     <ul>分享到:</ul>
                    <div class="bshare-custom icon-medium">
                          <a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到腾讯微博" class="bshare-qqmb" href="javascript:void(0);"></a><a title="分享到QQ空间" class="bshare-qzone" href="javascript:void(0);"></a><a title="分享到人人网" class="bshare-renren"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count" style="float: none; ">11.5K</span>
                     </div>
            </div>
			
			

<?php if (get_option('swt_email') == 'Hide') { ?>
		<?php { echo ''; } ?>
		<?php } else { include(TEMPLATEPATH . '/includes/feed_email.php'); } ?>
<div class="clear"></div>



<div class="twitbar-3"><!-- 淘宝搜索-->
            <script type="text/javascript">
alimama_pid="mm_12995397_3440838_11155925";
alimama_type="g";
alimama_tks={};
alimama_tks.style_i=1;
alimama_tks.lg_i=0;
alimama_tks.w_i="270";
alimama_tks.h_i=45;
alimama_tks.btn_i=1;
alimama_tks.txt_s="";
alimama_tks.hot_i=0;
alimama_tks.hc_c="0065FF";
alimama_tks.cid_i=0;
alimama_tks.c_i=0;
</script>
<script type="text/javascript" src="http://a.alimama.cn/inf.js"></script>
</div>

<div class="huanden3"> <!--置顶文章数量-->				         
				     <script type="text/javascript">
                        var pic_width=275; //图片宽度
                        var pic_height=275; //图片高度
                        var button_pos=2; //按扭位置 1左 2右 3上 4下
                        var stop_time=7000; //图片停留时间(1000为1秒钟)
                        var show_text=0; //是否显示文字标签 1显示 0不显示
                        var txtcolor="ffffff"; //文字色
                        var bgcolor="ffffff"; //背景色
                        var imag=new Array();
                        var link=new Array();
                        var text=new Array();

                        imag[1]='<?php bloginfo('template_directory'); ?>/images/1.jpg';
                        link[1]="<?php bloginfo('template_directory'); ?>/tuijian/tuijianno1.php";
                        text[1]="颈榷枕头";
                        imag[2]='<?php bloginfo('template_directory'); ?>/images/2.jpg';
                        link[2]="<?php bloginfo('template_directory'); ?>/tuijian/tuijianno2.php";
                        text[2]="标题 2";
                        imag[3]='<?php bloginfo('template_directory'); ?>/images/3.jpg';
                        link[3]="<?php bloginfo('template_directory'); ?>/tuijian/tuijianno3.php";
                        text[3]="标题 3";  
						imag[4]='<?php bloginfo('template_directory'); ?>/images/4.jpg';
                        link[4]="<?php bloginfo('template_directory'); ?>/tuijian/tuijianno4.php";
                        text[4]="颈榷枕头";
                        imag[5]='<?php bloginfo('template_directory'); ?>/images/5.jpg';
                        link[5]="<?php bloginfo('template_directory'); ?>/tuijian/tuijianno5.php";
                        text[5]="标题 5";
                        imag[6]='<?php bloginfo('template_directory'); ?>/images/6.jpg';
                        link[6]="<?php bloginfo('template_directory'); ?>/tuijian/tuijianno6.php";
                        text[6]="标题 3";                   

                        //可编辑内容结束
                        var swf_height=show_text==1?pic_height+20:pic_height;
                        var pics="", links="", texts="";
                        for(var i=1; i<imag.length; i++){
	                        pics=pics+("|"+imag[i]);
	                        links=links+("|"+link[i]);
	                        texts=texts+("|"+text[i]);
                        }
                        pics=pics.substring(1);
                        links=links.substring(1);
                        texts=texts.substring(1);
                        document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cabversion=6,0,0,0" width="'+ pic_width +'" height="'+ swf_height +'">');
                        document.write('<param name="movie" value="http://ssmay.com/wp-content/themes/Hcms/focus.swf">');
                        document.write('<param name="quality" value="high"><param name="wmode" value="opaque">');
                        document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'">');
                        document.write('<embed wmode="opaque" src="http://ssmay.com/wp-content/themes/Hcms/focus.swf" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'" quality="high" width="'+ pic_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
                        document.write('</object>');

                      </script>     
				</div>　

<div class="twitbar-2"><!-- 图片缩略图-->
<?php if(function_exists('wp_thumbnails_for_recent_posts')) { wp_thumbnails_for_recent_posts(); } ?>
</div>	

<!-- 侧边栏广告开始-->  
	<?php wp_reset_query();  ?>
		<?php if (get_option('swt_ads') == 'Hide') { ?>
		<?php { echo ''; } ?>
		<?php } else { include(TEMPLATEPATH . '/includes/ad_s.php'); } ?>
		<div class="clear"></div>
	

	<div class="con_box htabs_art clearfix"> 
		<ul class="cooltab_nav sj_nav clearfix">	
		    <li><a href="#" class="active" title="new_art">热门信息</a></li>			
			<li><a href="#" title="hot_art">最新信息</a></li>
					
		</ul>   
		<div id="new_art" class="com_cont">   
			<ul>
			    <?php query_posts('posts_per_page=8&caller_get_posts=1&orderby=comment_count'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li>
				<a target="_blank" href="<?php the_permalink(); ?>" class="title" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,34); ?></a>
				</li>
				<?php endwhile; ?>
				
			</ul>                    
		</div>
        <div id="hot_art" class="com_cont">  
            <ul>
				<?php query_posts('posts_per_page=8&caller_get_posts=1'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li>
				<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="title"><?php echo cut_str($post->post_title,34); ?></a>
				</li>
				<?php endwhile; ?>
			</ul>      
		</div>		
	</div>
	
	
	<!-- 淘宝橱窗广告开始--> 
	<div class="twitbar">
	       <script type="text/javascript">
               alimama_pid="mm_12995397_3440838_11155395";
               alimama_width=250;
               alimama_height=250;
           </script>
            <script src="http://a.alimama.cn/inf.js" type="text/javascript"></script>
    </div>
	
	
	
	
	
	<div class="con_box hot_box"> 				
			<h3>随机推荐</h3>		
		<div id="rand_art" >  
			<ul>
				<?php query_posts('posts_per_page=8&caller_get_posts=1&orderby=rand'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li>
				<a target="_blank" href="<?php the_permalink(); ?>" class="title" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,34); ?></a>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>   
	</div>
	
	
	
	<!-- 侧边栏广告开始-->  
		<div class="con_box hot_box"> 
		<?php wp_reset_query();  ?>
		<?php if (get_option('swt_adss') == 'Hide') { ?>
		<?php { echo ''; } ?>
		<?php } else { include(TEMPLATEPATH . '/includes/ad_ss.php'); } ?>
		<div class="clear"></div>
	     <!-- 侧边栏广告结束--> 
		</div>   
	
	
	
	</div>
</div> 
</div><!-- //wrapper -->