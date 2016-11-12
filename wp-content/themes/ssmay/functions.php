<?php
//wen-zang-fen-ye
add_filter('mce_buttons','wpdaxue_add_next_page_button');
function wpdaxue_add_next_page_button($mce_buttons) {
	$pos = array_search('wp_more',$mce_buttons,true);
	if ($pos !== false) {
		$tmp_buttons = array_slice($mce_buttons, 0, $pos+1);
		$tmp_buttons[] = 'wp_page';
		$mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons, $pos+1));
	}
	return $mce_buttons;
}
//youqin-lian-jie
add_filter('pre_option_link_manager_enabled','__return_true');
//添加小工具
register_sidebar( array(
'name' => __( 'Footer Area Two', 'bluenight' ),
'id' => 'sidebar-4',
'description' => __( 'An optional widget area for your site footer', 'bluenight' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => __( 'Gadget', 'bluenight' ),
'id' => 'feifei',
'description' => __( 'An optional widget area for your site footer', 'bluenight' ),
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => "</aside>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
//添加一个自定义背景

add_theme_support( 'custom-background');

//zhuti genxin
require 'theme-updates/theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
	'ssmay',                                            //Theme folder name, AKA "slug". 
	'http://wanlimm.com/themes/info.json' //URL of the metadata file.
);
//菜单
register_nav_menus();
//截字
function dm_strimwidth($str ,$start , $width ,$trimmarker ){$output = preg_replace('/^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$start.'}((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$width.'}).*/s','\1',$str); return $output.$trimmarker;};
//title cut
function cut_str($src_str,$cut_length){$return_str='';$i=0;$n=0;$str_length=strlen($src_str);
    while (($n<$cut_length) && ($i<=$str_length))
    {$tmp_str=substr($src_str,$i,1);$ascnum=ord($tmp_str);
		if ($ascnum>=224){$return_str=$return_str.substr($src_str,$i,3); $i=$i+3; $n=$n+2;}
        elseif ($ascnum>=192){$return_str=$return_str.substr($src_str,$i,2);$i=$i+2;$n=$n+2;}
        elseif ($ascnum>=65 && $ascnum<=90){$return_str=$return_str.substr($src_str,$i,1);$i=$i+1;$n=$n+2;}
        else {$return_str=$return_str.substr($src_str,$i,1);$i=$i+1;$n=$n+1;}
    }
    if ($i<$str_length){$return_str = $return_str . '...';}
    if (get_post_status() == 'private'){ $return_str = $return_str . '（private）';}
    return $return_str;};
// 获取当前页链接
function curPageURL() {$pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";$this_page = $_SERVER["REQUEST_URI"];
    if (strpos($this_page, "?") !== false) $this_page = reset(explode("?", $this_page));
    if ($_SERVER["SERVER_PORT"] != "80") {$pageURL .= $_SERVER["SERVER_NAME"] . ":" .$_SERVER["SERVER_PORT"] . $this_page;} 
    else {$pageURL .= $_SERVER["SERVER_NAME"] . $this_page;}
    return $pageURL;};
//支持外链缩略图
if ( function_exists('add_theme_support') )
 add_theme_support('post-thumbnails');
function catch_first_image() {global $post, $posts;$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	if(empty($first_img)){
		$random = mt_rand(1, 10);
		echo get_bloginfo ( 'stylesheet_directory' );
		echo '/images/random/'.$random.'.jpg';
		//$first_img = "/images/default.jpg";
		}
  return $first_img;};
//自定义头像
add_filter( 'avatar_defaults', 'fb_addgravatar' );
function fb_addgravatar( $avatar_defaults ) {
$myavatar = get_bloginfo('template_directory') . '/images/gravatar.png';
$avatar_defaults[$myavatar] = '自定义头像';
return $avatar_defaults;};
//评论回复/头像缓存
function weisay_comment($comment, $args, $depth) {$GLOBALS['comment'] = $comment;
	global $commentcount,$wpdb, $post;
     if(!$commentcount) { 
          $comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_post_ID = $post->ID AND comment_type = '' AND comment_approved = '1' AND !comment_parent");
          $cnt = count($comments);
          $page = get_query_var('cpage');
          $cpp=get_option('comments_per_page');
         if (ceil($cnt / $cpp) == 1 || ($page > 1 && $page  == ceil($cnt / $cpp))) {
             $commentcount = $cnt + 1;
         } else {$commentcount = $cpp * $page + 1;}
     }
?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
   <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
      <?php $add_below = 'div-comment'; ?>
		<div class="comment-author vcard"><?php if (get_option('swt_type') == 'Display') { ?>
			<?php
				$p = 'avatar/';
				$f = md5(strtolower($comment->comment_author_email));
				$a = $p . $f .'.jpg';
				$e = ABSPATH . $a;
				if (!is_file($e)){ 
				$d = get_bloginfo('wpurl'). '/avatar/default.jpg';
				$s = '40'; 
				$r = get_option('avatar_rating');
				$g = 'http://www.gravatar.com/avatar/'.$f.'.jpg?s='.$s.'&d='.$d.'&r='.$r;
                $avatarContent = file_get_contents($g);
                file_put_contents($e, $avatarContent);
				if ( filesize($e) == 0 ){ copy($d, $e); }
				};
			?>
			<img src='<?php bloginfo('wpurl'); ?>/<?php echo $a ?>' alt='' class='avatar' />
                <?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/comment_gravatar.php'); } ?>
	<div class="floor">
	<?php 
	if(!$parent_id = $comment->comment_parent){switch ($commentcount){
     case 2 :echo "沙发";--$commentcount;break;
     case 3 :echo "板凳";--$commentcount;break;
     case 4 :echo "地板";--$commentcount;break;
     default:printf('%1$s楼', --$commentcount);}}
	?>
	</div>
	<strong><?php comment_author_link() ?></strong>:<?php edit_comment_link('编辑','&nbsp;&nbsp;',''); ?></div>
	<?php if ( $comment->comment_approved == '0' ) : ?>
		<span style="color:#C00; font-style:inherit">您的评论正在等待审核中...</span>
		<br />			
		<?php endif; ?>
		<?php comment_text() ?>
		<div class="clear"></div><span class="datetime"><?php comment_date('Y-m-d') ?> <?php comment_time() ?> </span> <span class="reply"><?php comment_reply_link(array_merge( $args, array('reply_text' => '[回复]', 'add_below' =>$add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?></span>
  </div>
<?php
}
function weisay_end_comment() {echo '</li>';};
//登陆显示头像
function weisay_get_avatar($email, $size = 48){
return get_avatar($email, $size);
};
//自定义表情地址
function custom_smilies_src($src, $img){return get_bloginfo('template_directory').'/images/smilies/' . $img;}
add_filter('smilies_src', 'custom_smilies_src', 10, 2);
//pagenavi
function par_pagenavi($range = 9){
	global $paged, $wp_query;
	if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){if(!$paged){$paged = 1;}
	if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'> 返回首页 </a>";}
	previous_posts_link(' 上一页 ');
    if($max_page > $range){
		if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
    elseif($paged >= ($max_page - ceil(($range/2)))){
		for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
		for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	next_posts_link(' 下一页 ');
    if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='extend' title='跳转到最后一页'> 最后一页 </a>";}}
};
//读者排行
function hcms_readers($out,$timer,$limit){
	global $wpdb;    
	$counts = $wpdb->get_results("SELECT COUNT(comment_author) AS cnt, comment_author,comment_author_url,comment_author_email FROM {$wpdb->prefix}comments WHERE comment_date > date_sub( NOW(), INTERVAL $timer MONTH ) AND comment_approved = '1' AND comment_author_email AND comment_author_url != '".$out."' AND comment_type = ''  AND user_id = '0' GROUP BY comment_author ORDER BY cnt DESC LIMIT $limit");      
	foreach ($counts as $count) {
            $c_url = $count->comment_author_url;
			if ($c_url == '') $c_url = 'javascript:;';
            $mostactive .= '<a rel="nofollow" href="'. $c_url . '" title="' . $count->comment_author .' 留下 '. $count->cnt . ' 个脚印" target="_blank">' . get_avatar($count->comment_author_email, 48, '', $count->comment_author . ' 留下 ' . $count->cnt . ' 个脚印') . '</a>';
        }
        echo $mostactive;
    } 
//边栏评论
function r_comments($outer){
	global $wpdb;
	$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type,comment_author_url,comment_author_email, SUBSTRING(comment_content,1,16) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = '1' AND comment_type = '' AND post_password = '' AND user_id='0' AND comment_author != '".$outer."' ORDER BY comment_date_gmt DESC LIMIT 5";
	$comments = $wpdb->get_results($sql);
	$output = $pre_HTML;
	foreach ($comments as $comment) {$output .= "\n<li>".get_avatar( $comment, 32,'',$comment->comment_author)." <a href=\"" . get_permalink($comment->ID) ."#comment-" . $comment->comment_ID . "\" title=\"发表在： " .$comment->post_title . "\">" .strip_tags($comment->comment_author).":<br/>". strip_tags($comment->com_excerpt)."</a><br /></li>";}
	$output .= $post_HTML;
	echo $output;
};
//调用友情链接
function Hcms_links($link_type="txt",$get_total=0) {
	global $wpdb;
	$link_select = ($link_type == "txt") ? " = ''" : " != ''";
	$get_total = ($get_total != 0) ? "LIMIT $get_total" : "";
	$request = "SELECT link_id, link_url, link_name, link_image, link_target, link_description, link_visible, link_rating FROM $wpdb->links ";
	$request .= " WHERE $wpdb->links.link_visible = 'Y' AND $wpdb->links.link_image $link_select ";
	$request .= " ORDER BY link_rating DESC, link_id ASC $get_total";
	$links = $wpdb->get_results($request);
	foreach ($links as $link) { //调用菜单
		$output = '';
		if ($link_type == "txt") $output .= '<a target="'.$link->link_target.'" title="'.$link->link_description.'" href="'.$link->link_url.'">'.$link->link_name.'</a>';
		else $output .= '<a target="'.$link->link_target.'" title="'.$link->link_description.'" href="'.$link->link_url.'"><img src="'.$link->link_image.'" alt="'.$link->link_name.'"></a>';
		$output .= ''."\n";
		echo $output;
	}
};
//彩色标签
function colorCloud($text) {$text = preg_replace_callback('|<a (.+?)>|i','colorCloudCallback', $text);return $text;}
function colorCloudCallback($matches) {
	$text = $matches[1];
	$color = dechex(rand(0,16777215));
	$pattern = '/style=(\'|\”)(.*)(\'|\”)/i';
	$text = preg_replace($pattern, "style=\"color:#{$color};$2;\"", $text);
	return "<a $text>";}
add_filter('wp_tag_cloud', 'colorCloud', 1);
// Anti-Spam
class anti_spam {
  function anti_spam() {
    if ( !current_user_can('level_0') ) {
      add_action('template_redirect', array($this, 'w_tb'), 1);
      add_action('init', array($this, 'gate'), 1);
      add_action('preprocess_comment', array($this, 'sink'), 1);
    }
  }
  function w_tb() {
    if ( is_singular() ) {
      ob_start(create_function('$input','return preg_replace("#textarea(.*?)name=([\"\'])comment([\"\'])(.+)/textarea>#",
      "textarea$1name=$2w$3$4/textarea><textarea name=\"comment\" cols=\"100%\" rows=\"4\" style=\"display:none\"></textarea>",$input);') );
    }
  }
  function gate() {
    if ( !empty($_POST['w']) && empty($_POST['comment']) ) {
      $_POST['comment'] = $_POST['w'];
    } else {
      $request = $_SERVER['REQUEST_URI'];
      $referer = isset($_SERVER['HTTP_REFERER'])         ? $_SERVER['HTTP_REFERER']         : '隐瞒';
      $IP      = isset($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] . ' (透过代理)' : $_SERVER["REMOTE_ADDR"];
      $way     = isset($_POST['w'])                      ? '手动操作'                       : '未经评论表格';
      $spamcom = isset($_POST['comment'])                ? $_POST['comment']                : null;
      $_POST['spam_confirmed'] = "请求: ". $request. "\n来路: ". $referer. "\nIP: ". $IP. "\n方式: ". $way. "\n內容: ". $spamcom. "\n -- 记录成功 --";
    }
  }
  function sink( $comment ) {
    if ( !empty($_POST['spam_confirmed']) ) {
      if ( in_array( $comment['comment_type'], array('pingback', 'trackback') ) ) return $comment;
      //方法一: 直接挡掉, 將 die(); 前面两斜线刪除即可.
      die();
      //方法二: 标记为 spam, 留在资料库检查是否误判.
      //add_filter('pre_comment_approved', create_function('', 'return "spam";'));
      //$comment['comment_content'] = "[ 小墙判断这是 Spam! ]\n". $_POST['spam_confirmed'];
    }
    return $comment;
  }
}
$anti_spam = new anti_spam();
//评论邮件提醒
function comment_mail_notify($comment_id) {
  $comment = get_comment($comment_id);
  $parent_id = $comment->comment_parent ? $comment->comment_parent : '';
  $spam_confirmed = $comment->comment_approved;
  if (($parent_id != '') && ($spam_confirmed != 'spam')) {
    $wp_email = 'no-reply@' . preg_replace('#^www\.#', '', strtolower($_SERVER['SERVER_NAME'])); //e-mail 发出点, no-reply 可改为可用的 e-mail.
    $to = trim(get_comment($parent_id)->comment_author_email);
    $subject = '您在 [' . get_option("blogname") . '] 的留言有了回复';
    $message = '
    <div style="background-color:#eef2fa; border:1px solid #d8e3e8; color:#111; padding:0 15px; -moz-border-radius:5px; -webkit-border-radius:5px; -khtml-border-radius:5px;">
      <p>' . trim(get_comment($parent_id)->comment_author) . ', 您好!</p>
      <p>您曾在《' . get_the_title($comment->comment_post_ID) . '》的留言:<br />'
       . trim(get_comment($parent_id)->comment_content) . '</p>
      <p>' . trim($comment->comment_author) . ' 给您的回复:<br />'
       . trim($comment->comment_content) . '<br /></p>
      <p>您可以点击 <a href="' . htmlspecialchars(get_comment_link($parent_id)) . '">查看回复完整內容</a></p>
      <p>欢迎再度光临 <a href="' . get_option('home') . '">' . get_option('blogname') . '</a></p>
      <p>(由于服务器原因,我是不能收到您直接回复的邮件的,如果您还有问题,就到我的网站进行留言.)</p>
    </div>';
    $from = "From: \"" . get_option('blogname') . "\" <$wp_email>";
    $headers = "$from\nContent-Type: text/html; charset=" . get_option('blog_charset') . "\n";
    wp_mail( $to, $subject, $message, $headers );
    //echo 'mail to ', $to, '<br/> ' , $subject, $message; // for testing
  }
}
add_action('comment_post', 'comment_mail_notify');
//访问计数
function record_visitors(){
	if (is_singular()) {global $post;
	 $post_ID = $post->ID;
	  if($post_ID) 
	  {
		  $post_views = (int)get_post_meta($post_ID, 'views', true);
		  if(!update_post_meta($post_ID, 'views', ($post_views+1))) 
		  {
			add_post_meta($post_ID, 'views', 1, true);
		  }
	  }
	}
}
add_action('wp_head', 'record_visitors');  
function post_views($before = '(点击 ', $after = ' 次)', $echo = 1)
{
  global $post;
  $post_ID = $post->ID;
  $views = (int)get_post_meta($post_ID, 'views', true);
  if ($echo) echo $before, number_format($views), $after;
  else return $views;
};
// 文章末加版权Feed
function insertFootNote($content) {
	if(is_feed()) {
		$wzbt = get_the_title();
		$wzlj = get_permalink($post->ID);
		$content.= '<p>';
		$content.= '<span style="font-weight:bold;text-shadow:0 1px 0 #ddd;">声明:</span> 本文采用 <a rel="nofollow" href="http://creativecommons.org/licenses/by-nc-sa/3.0/" title="署名-非商业性使用-相同方式共享">BY-NC-SA</a> 协议进行授权 | <a href="'.home_url().'">'.get_bloginfo('name').'</a>';
		$content.= '<br />转载请注明转自《<a rel="bookmark" title="' . $wzbt . '" href="' . $wzlj . '">' . $wzbt . '</a>》';
		$content.= '</p>';
	}
	return $content;
}
add_filter ('the_content', 'insertFootNote');
//no_self_ping
function no_self_ping( &$links ) {
	$home = get_option( 'home' );
	foreach ( $links as $l => $link )
	if ( 0 === strpos( $link, $home ) )
	unset($links[$l]);
	}
add_action( 'pre_ping', 'no_self_ping' );
//no_autosave
function no_autosave() {
  wp_deregister_script('autosave');
}
add_action( 'wp_print_scripts', 'no_autosave' );
//隐藏版本更新提示
add_filter('pre_site_transient_update_core', create_function('$a', "return null;"));
//过滤代码的中文符号
remove_filter('the_content', 'wptexturize');
//移除顶部多余信息
function wpbeginner_remove_version() { 
return ; 
} add_filter('the_generator', 'wpbeginner_remove_version');//wordpress的版本号 
remove_action('wp_head', 'index_rel_link');//当前文章的索引 
remove_action('wp_head', 'feed_links_extra', 3);// 额外的feed,例如category, tag页 
remove_action('wp_head', 'start_post_rel_link', 10, 0);// 开始篇 
remove_action('wp_head', 'parent_post_rel_link', 10, 0);// 父篇 
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // 上、下篇. 
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );//rel=pre
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );//rel=shortlink 
remove_action('wp_head', 'rel_canonical' ); 
wp_deregister_script('l10n'); 
//添加编辑器快捷按钮
add_action('admin_print_scripts', 'my_quicktags');
function my_quicktags() {
    wp_enqueue_script(
        'my_quicktags',
        get_stylesheet_directory_uri().'/js/my_quicktags.js',
        array('quicktags')
    );
    }
//导入主题配置文件
include("includes/theme_options.php");
include("includes/shortcode.php");
//所有设置结束
?>
<?php
// 设置主题配色方案开始
function themeoptions_admin_menu()// 在控制面板的侧边栏添加设置选项页链接
{
add_theme_page("主题配色方案", "主题配色方案", 'edit_themes', basename(__FILE__), 'backcolor_page');
}
function backcolor_page()
{
?>

<div class="wrap">
    <div id="icon-themes" class="icon32"><br /></div>
    <h2>主题配色方案</h2>
	<?php   if ( $_REQUEST['bcn_admin_options'] ) echo '<div style="font-size:16px;margin-left:50px;margin-top:20px;color:red;" ><strong>'.$themename.'主题配色已保存</strong></div>';
   ?>
	<div >
    <form method="POST" action="" style="width:400px;height:420px; border:1px #ddd solid;margin:30px;">
        <input type="hidden" name="update_themeoptions" value="true" />
        <h4 style="font-size:18px; margin-left:20px;">选择主题配色</h4>
		<p style="width:380px;float:left;">
        <select name ="colour" style="width:200px; margin-left:20px;float:left;">
            <?php $colour = get_option('mytheme_colour'); ?>
			 <option value="style" <?php if ($colour=='style') { echo 'selected'; } ?> >默认玫红配色</option>
			  <option value="black" <?php if ($colour=='black') { echo 'selected'; } ?> >大方黑色基调</option>
            <option value="blue_dark" <?php if ($colour=='blue_dark') { echo 'selected'; } ?> >稳重深蓝基调</option>
            <option value="blue" <?php if ($colour=='blue') { echo 'selected'; } ?>>悠闲浅蓝基调</option>
            <option value="pink" <?php if ($colour=='pink') { echo 'selected'; } ?>>可爱粉红基调</option>
			<option value="green" <?php if ($colour=='green') { echo 'selected'; } ?>>清新竹绿基调</option>
			<option value="purple" <?php if ($colour=='purple') { echo 'selected'; } ?>>尊贵紫色基调</option>
        </select>
		<input style=" margin-left:20px;float:left;" type="submit" class="button-primary" name="bcn_admin_options" value="保存设置"/>
		
		</p>
		<p style=" margin-left:20px;float:left;" >		 
		 默认玫红配色：<br/> <img src="/wp-content/themes/ssmay/images/banner/red.jpg" alt="时美网" width="120" height="30"/></p><br/>
		 <p style=" margin-left:20px;float:left;" >	
		 大方黑色基调<br/> <img src="/wp-content/themes/ssmay/images/banner/black.jpg" alt="时美网" width="120" height="30"/></p><br/>
		 <p style=" margin-left:20px;float:left;" >	
		 稳重深蓝基调<br/> <img src="/wp-content/themes/ssmay/images/banner/blue0.jpg" alt="时美网" width="120" height="30"/></p><br/>
		 <p style=" margin-left:20px;float:left;" >	
		 悠闲浅蓝基调<br/> <img src="/wp-content/themes/ssmay/images/banner/blue1.jpg" alt="时美网" width="120" height="30"/></p><br/>
		 <p style=" margin-left:20px;float:left;" >	
		 可爱粉红基调<br/> <img src="/wp-content/themes/ssmay/images/banner/pink.jpg" alt="时美网" width="120" height="30"/></p><br/>
		 <p style=" margin-left:20px;float:left;" >	
		 清新竹绿基调<br/> <img src="/wp-content/themes/ssmay/images/banner/green.jpg" alt="时美网" width="120" height="30"/></p><br/>
		 <p style=" margin-left:20px;float:left;" >	
		 尊贵紫色基调<br/> <img src="/wp-content/themes/ssmay/images/banner/purple.jpg" alt="时美网" width="120" height="30"/>
		</p>  
		
    </form>
	</div>
</div>
<?php
}
add_action('admin_menu', 'themeoptions_admin_menu');
if ( $_POST['update_themeoptions'] == 'true' ) { themeoptions_update(); }
function themeoptions_update()
{   
    update_option('mytheme_colour', $_POST['colour']);    
    if ($_POST['display_search']=='on') { $display = 'checked'; } else { $display = ''; }
    update_option('mytheme_display_search', $display);
}// 设置主题配色方案结束
//所有设置结束
?>