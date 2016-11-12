<!-- //底部模板 -->

<div id="footer" class="clearfix">

     <div class="con_box ">
        <div class="flink">
		        <ul class="tagcloudy"> 		    
				<li><strong>热门标签:</strong>
				<?php wp_tag_cloud('number=50&largest=13&smallest=12&unit=px&order=RAND'); ?>
				</li>
				</ul>
	    </div> 
	</div>

    <div class="con_box ">
	            <?php wp_reset_query();if ( is_home()){ ?>
    	  <div class="flink">
			    <strong>友情链接:</strong>
        		<?php Hcms_links("txt",24) ?>
				<a target="_blank" href="http://www.jingyankr.com">京颜皮肤管理</a>
				<a target="_blank" href="http://www.jingyanbanyongjiu.com/">京颜半永久</a>
		        <!-- <a target="_blank" title="点击此处申请链接" href="/" class="curflink">申请链接</a> -->
          </div>
 	            <?php } ?>

          <div class="footer_bug">
			 <a target="_blank" href="">网站导航</a> | <a href="">减肥瘦身</a> | <a href="">美容美发</a> | <a href="">丰胸美体</a> | <a href="">时尚美丽</a> | <a target="_blank" href="">网站地图</a>
          </div>
    </div>

    <div class="copyright">
	    <p>
		    版权所有: <a href="/" target="_parent"><?php bloginfo('name'); ?></a><?php echo stripslashes(get_option('swt_track_code')); ?>  <?php echo get_num_queries(); ?>次查询 
		</p>
		<p>广告联系QQ：400-00-400 广告服务 意见反馈 E-mail： 1239672384@qq.com</p>
		<p>
		郑重声明：未经授权，禁止转载、摘编、复制本站文章，如有违反，追究法律责任
		</p>
        <p>
		    <!-- 百度统计 -->
            京颜门户网
			<!-- 量子统计 -->    Copyright (c) 2012 www.jingyan.com  All rights reserved 
        </p>
<!-- /powered -->
   </div>
   
   
   
   
   
   
   <div class="footer_right">
    <a target="_blank" href=""><img atl="" src="/wordpress/wp-content/themes/ssmay/images/logo.jpg" width="150" height="60"></a>
	
	</div>
   <?php wp_footer(); ?>
		<div id="shangxia"><div id="shang" title="↑ 返回顶部"></div>
		<?php if ( is_singular() ){ ?>
		<div id="comt" title="查看评论"></div>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script>
		<?php } ?>
		<div id="xia" title="↓ 移至底部"></div>
		

</div>


<!-- 分享按钮 --><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=29a84930-564c-423f-8713-848f12a800e4&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>


</div>
</body>
</html>