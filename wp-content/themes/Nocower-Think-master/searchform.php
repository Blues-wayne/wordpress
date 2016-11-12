<form method="get" class="searchbox" action="/search" >
<input class="search-input" name="q" type="text" placeholder="搜搜也精彩..."  onblur="if (this.value == '') {this.value = '';}" value="<?php echo $_GET['q']?$_GET['q']:''?>"><input type="submit" value="搜索" class="search-btn">
</form>