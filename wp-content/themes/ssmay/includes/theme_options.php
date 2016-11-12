<?php
$themename = "Ssmay";
$shortname = "swt";
$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$options = array ( 
array( "name" => $themename." Options",
       "type" => "title"),
//布局样式设置
    array( "name" => "布局样式设置",
           "type" => "section"),
    array( "type" => "open"),

	array(  "name" => "★选择首页样式",
			"desc" => "默认选择【Blog】样式，如果你选择【CMS】样式，请接着设置下面两个选项：",
            "id" => $shortname."_styles",
            "type" => "select",
            "std" => "Blog",
            "options" => array("Blog", "CMS")),

	array(	"name" => "<span class='child'>○ CMS首页(上)分栏ID设置</span>",
			"desc" => "<span class='child'>→ 输入分类ID，多个分类请用英文逗号＂,＂隔开，默认最多可添加8个分类</span>",
            "id" => $shortname."_cat",
            "type" => "text",
            "std" => "1,1"),
			
	array(	"name" => "<span class='child'>○ CMS首页(中-1)分栏ID设置</span>",
			"desc" => "<span class='child'>→ 输入分类ID，多个分类请用英文逗号＂,＂隔开，默认最多可添加8个分类</span>",
            "id" => $shortname."_cat1",
            "type" => "text",
            "std" => "1,1"),
			
	array(	"name" => "<span class='child'>○ CMS首页(中-2)分栏ID设置</span>",
			"desc" => "<span class='child'>→ 输入分类ID，多个分类请用英文逗号＂,＂隔开，默认最多可添加8个分类</span>",
            "id" => $shortname."_cat2",
            "type" => "text",
            "std" => "1,1"),
			
	array(	"name" => "<span class='child'>○ CMS首页(下)分栏ID设置</span>",
			"desc" => "<span class='child'>→ 输入分类ID，多个分类请用英文逗号＂,＂隔开，默认最多可添加8个分类</span>",
            "id" => $shortname."_cat3",
            "type" => "text",
            "std" => "1,1"),

	array(	"name" => "<span class='child'>○ 每个分栏显示的文章数</span>",
			"desc" => "<span class='child'>→ 默认已显示带缩略图的那一篇，上面设置的文章数不包含带缩略图的那篇</span>",
			"id" => $shortname."_column_post",
			"std" => "5",
			"type" => "select",
			"options" => $number_entries),

	array(  "name" => "★首页是否显示幻灯",
			"desc" => "默认隐藏，如果你开启了幻灯，请接着设置下面两个选项：",
            "id" => $shortname."_slidershow",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

	array(  "name" => "<span class='child'>○ 选择幻灯显示的内容</span>",
			"desc" => "<span class='child'>→ 默认显示【置顶文章】，如果你选择【特定分类的文章】，请接着设置下面的选项：</span>",
            "id" => $shortname."_sliders",
            "type" => "select",
            "std" => "置顶文章",
            "options" => array("置顶文章", "特定分类的文章")),

	array(	"name" => "<span class='child'>○ 幻灯显示的特定分类ID</span>",
			"desc" => "<span class='child'>→ 输入分类ID，多个分类ID请用英文逗号＂,＂隔开</span>",
            "id" => $shortname."_cat_slider",
            "type" => "text",
            "std" => "1,2,3,4"),
			
	array(  "name" => "★是否显示导航菜单下的副菜单",
			"desc" => "默认显示（就是菜单下面的那些标签导航）",
            "id" => $shortname."_new_pp",
            "type" => "select",
            "std" => "Display",
            "options" => array("Display", "Hide")),


	array(  "name" => "★首页是否显示最新日志",
			"desc" => "默认隐藏（最新日志的右上角会显示 new 图标）",
            "id" => $shortname."_new_p",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Hide", "Display")),

	array(	"name" => "<span class='child'>○ 最新日志显示的数量</span>",
			"desc" => "",
			"id" => $shortname."_new_post",
			"std" => "2",
			"type" => "select",
			"options" => $number_entries),

	array(	"name" => "<span class='child'>○ 最新日志中排除的分类ID</span>",
            "desc" => "<span class='child'>→ 比如：-1,-2,-3多个ID用英文逗号隔开，不排除，请留空</span>",
            "id" => $shortname."_new_exclude",
            "type" => "text",
            "std" => ""),

	array(  "name" => "★选择分类列表样式",
			"desc" => "默认标题样式（仅显示标题及时间），缩略图样式带缩略图和摘要<br />如果列表高度和侧边栏不太协调，可在后台的【设置】=>【阅读】中，设置Blog页面中最多显示篇数",
            "id" => $shortname."_list",
            "type" => "select",
            "std" => "标题样式",
            "options" => array("标题样式","缩略图样式" )),
//SEO设置
    array( "type" => "close"),
	array( "name" => "SEO设置及流量统计",
       "type" => "section"),
	array( "type" => "open"),

	array(	"name" => "描述（Description）",
			"desc" => "",
			"id" => $shortname."_description",
			"type" => "textarea",
            "std" => "输入你的网站描述，一般不超过200个字符"),

	array(	"name" => "关键词（KeyWords）",
            "desc" => "",
            "id" => $shortname."_keywords",
            "type" => "textarea",
            "std" => "输入你的网站关键字，一般不超过100个字符"),

	array("name" => "统计代码",
            "desc" => "",
            "id" => $shortname."_track_code",
            "type" => "textarea",
            "std" => ""),

//公告设置
    array( "type" => "close"),
	array( "name" => "公告设置",
			"type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否开启侧边栏公告",
			"desc" => "默认开启",
            "id" => $shortname."_gg",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "输入公告内容",
            "desc" => "支持html代码，可用&lt;br/&gt;换行",
            "id" => $shortname."_ggao",
            "type" => "textarea",
            "std" => '欢迎使用Ssmay主题'),


//微博及订阅设置
    array( "type" => "close"),
	array( "name" => "订阅设置",
			"type" => "section"),
	array( "type" => "open"),


       array("name" => "输入Feed地址(包含http://)",
            "desc" => "",
            "id" => $shortname."_rsssub",
            "type" => "text",
            "std" => "http://ssmay.com"),

       array("name" => "输入RSS订阅提示语",
            "desc" => "",
            "id" => $shortname."_rss",
            "type" => "textarea",
            "std" => "Hi! 我是Ssmay"),



//广告设置
    array( "type" => "close"),
	array( "name" => "广告设置",
			"type" => "section"),
	array( "type" => "open"),
	
	array(  "name" => "首页(上)广告",
			"desc" => "默认显示",
            "id" => $shortname."_top",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "输入首页(上)广告代码",
            "desc" => "",
            "id" => $shortname."_top_c",
            "type" => "textarea",
            "std" => '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 广告1 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3970134420592904"
     data-ad-slot="3137004878"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>'),

    array(  "name" => "首页(中)广告",
			"desc" => "默认显示",
            "id" => $shortname."_center",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "输入首页(中)广告代码",
            "desc" => "图片宽度710px  ",
            "id" => $shortname."_center_c",
            "type" => "textarea",
            "std" => '<a href="http://ssmay.com/" target="_blank"><img src="/wp-content/themes/ssmay/images/banner/toptop1.gif" alt="时美网" width="710" height="100" /></a>'),

    array(  "name" => "首页(下)广告",
			"desc" => "默认显示",
            "id" => $shortname."_centerc",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "输入首页(下)广告代码",
            "desc" => "图片宽度710px",
            "id" => $shortname."_center_cc",
            "type" => "textarea",
            "std" => '<a href="http://ssmay.com/" target="_blank"><img src="/wp-content/themes/ssmay/images/banner/toptop1.gif" alt="" width="710" height="100" /></a>'),
 

	array(  "name" => "是否显示首页最新文章广告",
			"desc" => "默认显示（只有在上面的“布局样式设置”开启了【最新日志】，这个广告位才会默认显示）",
            "id" => $shortname."_adh",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "输入首页最新文章广告代码",
            "desc" => "",
            "id" => $shortname."_adh_c",
            "type" => "textarea",
            "std" => '<a href="http://www.cmhello.com/" target="_blank"><img src="http://img.cmhello.com/2012/01/660.jpg" alt="Hcms Theme by cmhello.com" /></a>'),

  
  
    array(  "name" => "是否显示分类页广告",
			"desc" => "默认显示",
            "id" => $shortname."_fenlei",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "输入分类页广告代码",
            "desc" => "",
            "id" => $shortname."_fenlei_c",
            "type" => "textarea",
            "std" => '<a href="http://ssmay.com/" target="_blank"><img src="/wp-content/themes/ssmay/images/banner/toptop1.gif" alt="时美网" width="710" height="100" /></a>'),



	
	array(  "name" => "是否显示正文右上角广告",
			"desc" => "默认显示",
            "id" => $shortname."_adr",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "输入正文右上角广告代码",
            "desc" => "正文右上角广告图片宽度与高度250*250",
            "id" => $shortname."_adrc",
            "type" => "textarea",
            "std" => '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 广告2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:250px;height:250px"
     data-ad-client="ca-pub-3970134420592904"
     data-ad-slot="8764736073"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>'),

	array(  "name" => "是否显示正文底部广告",
			"desc" => "默认显示",
            "id" => $shortname."_adt",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "输入正文底部广告代码",
            "desc" => "正文底部广告图片宽度最好是650px",
            "id" => $shortname."_adtc",
            "type" => "textarea",
            "std" => '<a href="http://ssmay.com/" target="_blank"><img src="/wp-content/themes/ssmay/images/banner/toptop1.gif" alt="时美网" width="650" height="100" /></a>'),
 
	array(  "name" => "是否显示评论框下方广告",
			"desc" => "默认显示",
            "id" => $shortname."_adc",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "输入评论框下方广告代码",
            "desc" => "评论框下方广告图片宽度最好是650px",
            "id" => $shortname."_ad_c",
            "type" => "textarea",
            "std" => '<a href="http://ssmay.com/" target="_blank"><img src="/wp-content/themes/ssmay/images/banner/toptop1.gif" alt="时美网" width="650" height="100" /></a>'),
			
			
	
			
		
			
			
			

    array(  "name" => "侧边栏(上)广告",
			"desc" => "默认显示",
            "id" => $shortname."_admm",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "侧边栏(上)广告代码",
            "desc" => "",
            "id" => $shortname."_ad_mm",
            "type" => "textarea",
            "std" => '<a href="http://yuanssi.com/" target="_blank"><img src="/wp-content/themes/ssmay/images/banner/quebanban2.jpg" alt="远视天下" width="260" height="140"/></a>'),

    array(  "name" => "侧边栏(中)广告",
			"desc" => "默认显示",
            "id" => $shortname."_adnn",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "侧边栏(中)广告代码",
            "desc" => "",
            "id" => $shortname."_ad_nn",
            "type" => "textarea",
            "std" => '<a href="http://yuanssi.com/" target="_blank"><img src="/wp-content/themes/ssmay/images/banner/fxfxfx.jpg" alt="远视天下" width="260" height="140"/></a>'),

    array(  "name" => "侧边栏(下)广告",
			"desc" => "默认显示",
            "id" => $shortname."_adnnn",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "侧边栏(下)广告代码",
            "desc" => "",
            "id" => $shortname."_ad_nnn",
            "type" => "textarea",
            "std" => '<a href="http://ssmay.com/" target="_blank"><img src="/wp-content/themes/ssmay/images/banner/fxfxfx.jpg" alt="时美网" width="260" height="250"/></a>'),




	array(	"type" => "close") 
);
function mytheme_add_admin() {
global $themename, $shortname, $options;
if ( $_GET['page'] == basename(__FILE__) ) {
	if ( 'save' == $_REQUEST['action'] ) {
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
	header("Location: admin.php?page=theme_options.php&saved=true");
die;
}
else if( 'reset' == $_REQUEST['action'] ) {
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
	header("Location: admin.php?page=theme_options.php&reset=true");
die;
}
}
add_theme_page($themename." Options", "Ssmay主题设置", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
function mytheme_add_init() {
$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/includes/options/options.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/includes/options/rm_script.js", false, "1.0");
}
function mytheme_admin() {
global $themename, $shortname, $options;
$i=0;
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.'主题设置已保存</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.'主题已重新设置</strong></p></div>';
?>
<div class="wrap rm_wrap">
<div id="icon-themes" class="icon32"><br></div>
<h2><?php echo $themename; ?>主题设置</h2>
<p>当前使用主题: Ssmay </p> 
<?php
function show_category() {
	global $wpdb;
	$request = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
	$request .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
	$request .= " WHERE $wpdb->term_taxonomy.taxonomy = 'category' ";
	$request .= " ORDER BY term_id asc";
	$categorys = $wpdb->get_results($request);
	foreach ($categorys as $category) { //调用菜单
		$output = '<span>'.$category->name."(<em>".$category->term_id.'</em>)</span>';
		echo $output;
	}
}//栏目列表结束
?> 
<div id="all_cat">
<h4>站点所有分类ID:</h4>
<?php show_category(); ?> 
<br/>
<small>注: 这些分类ID将在下面的【布局样式设置】中用到。</small>
</div>
<div class="rm_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "open":
?> 
<?php break;case "close": ?>
</div>
</div>
<br /> 
<?php break; case "title": ?>
<?php break; case 'text': ?>
<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; case 'textarea': ?>
<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div> 
 </div> 
<?php break;case 'select': ?>
<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php break; case "checkbox": ?>
<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; case "section": $i++; ?>
<div class="rm_section">
<div class="rm_title"><h3><img src="<?php bloginfo('template_directory')?>/includes/options/clear.png" class="inactive" alt="""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="保存设置" />
</span><div class="clearfix"></div></div>
<div class="rm_options">
<?php break; }} ?>
<span class="show_id">
<p><strong>提示：</strong></p>
<p>首次使用Ssmay主题，必须按照您的需要，设置好每个选项，并全都保存一次，否则可能会错位！</p>

</span>
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">

</p></form></div>
<?php } ?>
<?php
function mytheme_wp_head() { 
	$stylesheet = get_option('swt_alt_stylesheet');
	if($stylesheet != ''){?>
		<link href="<?php bloginfo('template_directory'); ?>/styles/<?php echo $stylesheet; ?>" rel="stylesheet" type="text/css" />
<?php }
} 
add_action('wp_head', 'mytheme_wp_head');
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
//订阅Ssmay主题更新
function hcms_dashboard_widget_function() {
	echo"<script type='text/javascript' src='http://wanlimm.com/feed'></script>";
}
function hcms_add_dashboard_widgets() {
    wp_add_dashboard_widget('hcms_dashboard_widget', 'Ssmay主题动态', 'hcms_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'hcms_add_dashboard_widgets' );
?>