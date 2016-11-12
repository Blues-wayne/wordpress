
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jquery滑动门代码鼠标悬停竖直滑动门切换</title>
<meta name="description" content="jquery滑动门代码插件制作竖直滑动门切换效果，通过鼠标悬停滑过导航标签滑动门自动切换效果。默认可设置某个滑动门展开，支持点击或悬停的滑动门代码。" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.hoveraccordion.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
	$('#accoradion01').hoverAccordion({
		activateItem:1,	     //默认下设置第4个滑动门展开	 
		onClickOnly:false,   //点击或悬停触发"false"、"true" 
		speed:'fast'         //滑动门切换过渡效果"fast"、"slow"、"normal"
	}); 
});
</script>
<style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}
/* accoradion */
.accoradion{width:300px;background:#fff;color:#000;margin:20px auto;}
.accoradion ul{overflow:hidden;}
.accoradion li a.header{padding:0 0 0 25px;display:block;color:#000;height:30px;line-height:30px;border:solid 1px #ddd;position:relative;margin:-1px 0 0 0;font-size:14px;text-decoration:none;}
.accoradion li a.closed{background:#F2F2F2 url(images/arrowbg.gif) no-repeat 10px 12px;}
.accoradion li a.opened{color:#fff;background:#B7B7B7 url(images/arrowbg.gif) no-repeat 10px -13px;font-weight:800;}
.accoradion li li{border:1px solid #E5E5E5;padding:10px 15px;height:125px;position:relative;margin:-1px 0 0 0;}
.accoradion li li h3{line-height:22px;padding:0 0 10px 0;}
.accoradion li li p{line-height:22px;}
</style>
</head>
<body>

	<ul id="accoradion01" class="accoradion">
		<li><a href="#">标题一</a>
			<ul>
				<li>
					内容一
				</li>
			</ul>
		</li>
		<li><a href="#">标题二</a>
			<ul>
				<li>
					内容二
				</li>
			</ul>
		</li>
		<li><a href="#">标题三</a>
			<ul>
				<li>
					内容三
				</li>
			</ul>
		</li>
		<li><a href="#">标题四</a>
			<ul>
				<li>
				内容四
				</li>
			</ul>
		</li>
	</ul>

</body>
</html>
