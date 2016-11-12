<div id="search">
	<form method="get" id="searchform" action="<?php bloginfo('home'); ?>" >
	<input id="s"  type="text" name="s" onfocus="if(this.value=='搜索文章...'){this.value=''};" onblur="if(this.value==''){this.value='搜索...'};" value="<?php echo wp_specialchars($s, 1); ?>" />
	<input id="s2" type="submit" name="Submit" value="搜索">	
	</form>
</div>
<div class='clear'></div>	
