<?php
add_action('admin_menu', 'Gztro_page');
function Gztro_page (){

			if ( count($_POST) > 0 && isset($_POST['Gztro_settings']) ){
		$options = array ('keywords','description','analytics','sina','tqq','csecode','sid_ad_top','sid_ad_bottom','sid_ad_bottom2','wenz_ad_bottom');
		foreach ( $options as $opt ){
			delete_option ( 'Gztro_'.$opt, $_POST[$opt] );
			add_option ( 'Gztro_'.$opt, $_POST[$opt] );	
		}
	}
	add_theme_page(__('主题选项'), __('主题选项'), 'edit_themes', basename(__FILE__), 'Gztro_settings');
}
function Gztro_settings(){?>
<style>
	fieldset{width:700px;border:1px solid #aaa;padding-bottom:20px;margin-top:20px;}
	legend{margin-left:5px;padding:0 5px;color:#2481C6;background:#F9F9F9;}
	textarea{width:100%;font-size:11px;border:1px solid #aaa;background:none;}
	label{cursor:default;}


</style>
<div class="wrap">
<h2>Nocower-Think 主题设置</h2>

<div style="font-size: 16px; line-height: 30px;letter-spacing: 1px;margin: 20px 0;  padding: 5px;  border: 1px solid #E6DB55;  background: #FFFBCC;width: 728px;">请 <a href="http://www.nocower.com/3908.html"  target="_blank">点此访问</a> 主题发布页查看主题安装教程，QQ群：① 288325802 ② 137080447<br>另外请大家如果有心意的话可以<a href="https://me.alipay.com/nocower"  target="_blank">【点此支付宝捐款】</a>或者点击下面的广告支持本站，谢谢！</div>
	<div class="ssss" style="font-size: 16px; line-height: 30px;width: 728px;letter-spacing: 1px;margin: 20px 0;  padding: 5px;  border: 1px solid #E6DB55;  background: #FFFBCC;padding-bottom: 0px;"><iframe src="http://www.nocower.com/metro2.html"  scrolling="no" height="90px" width="730px" frameborder="0"></iframe></div>


<form method="post" action="">
	<fieldset>
	<legend><strong>网站基础代码的添加</strong></legend>
		<table class="form-table">
		<tr><td>
				<textarea name="keywords" id="keywords" rows="1" cols="70"><?php echo get_option('Gztro_keywords'); ?></textarea><br />
				<label>网站关键词（Meta Keywords），中间用半角逗号隔开。如： Nocower-Think,主题,设置</label>
			</td></tr>
			<tr><td>
				<textarea name="description" id="description" rows="2" cols="70"><?php echo get_option('Gztro_description'); ?></textarea>
				<label>网站描述（Meta Description），针对搜索引擎设置的网页描述。如：本站域名www.nocower.com</label>
			</td></tr>
			<tr><td>
				<textarea name="analytics" id="analytics" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_analytics')); ?></textarea>
				<label>此处填写网站的【统计代码,包含script前后标签!】【侧边栏分享代码】【网站两侧悬浮广告代码】</label>
			</td></tr>
			<tr><td>
				<textarea name="sina" id="analytics" rows="4" cols="70" style="height: 35px;"><?php echo stripslashes(get_option('Gztro_sina')); ?></textarea>
				<label style="font-size: 12px;font-weight: bold;color: #009ad9;">上面框框填写你的新浪微博地址，比如：http://weibo.com/nocower </label>
			</td></tr>
			<tr><td>
				<textarea name="tqq" id="analytics" rows="4" cols="70" style="height: 35px;"><?php echo stripslashes(get_option('Gztro_tqq')); ?></textarea>
				<label style="font-size: 12px;font-weight: bold;color: #009ad9;">上面框框填写你的腾讯微博地址，比如：http://t.qq.com/nocower </label>
			</td></tr>
		</table>
	</fieldset>
 <p>

	<fieldset>
	<legend><strong>侧边栏广告代码</strong></legend>
		<table class="form-table">
			<tr><td>
				<textarea name="sid_ad_top" id="sid_ad_top" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_sid_ad_top')); ?></textarea>
				<label>此处填写侧边栏广告位1，在此粘贴你的广告联盟代码...</label>
			</td></tr>
			<tr><td>
				<textarea name="sid_ad_bottom" id="sid_ad_bottom" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_sid_ad_bottom')); ?></textarea>
				<label>此处填写侧边栏广告位2，在此粘贴你的广告联盟代码...</label>
			</td></tr>
			<tr><td>
				<textarea name="sid_ad_bottom2" id="sid_ad_bottom2" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_sid_ad_bottom2')); ?></textarea>
				<label>此处填写网站右边栏最下方广告位代码，在此粘贴你的广告联盟代码...</label>
			</td></tr>
<tr><td>
				<textarea name="wenz_ad_bottom" id="wenz_ad_bottom" rows="4" cols="70"><?php echo stripslashes(get_option('Gztro_wenz_ad_bottom')); ?></textarea>
				<label>此处填写文章页文章正文下广告横幅代码，在此粘贴你的广告联盟代码...</label>
			</td></tr>

		</table>
	</fieldset>
 <p>

 <label>主题发布网站：<a href="http://www.nocower.com/theme" target="_blank">http://www.nocower.com/theme</a></label><br/><br/>
 <label><font color="red">注：主题可以不保留版权可后期开发，但是严禁翻版倒带！！</font></label>
 </p>
	<p class="submit">
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
		<input type="hidden" name="Gztro_settings" value="save" style="display:none;" />
		<input style="font-size:12px !important;" name="reset" type="submit" value="还原默认设置" /><label><font color="red">警告：将还原至初始状态！</font></label>
	</p>
 
</form>
</div>

<?php }