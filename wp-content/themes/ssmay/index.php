<?php include(TEMPLATEPATH . '/header.php'); ?>



	<div id="wrapper" class="clearfix">
 		<div id="art_container clearfix">
 			<div id="art_main" class="fl"> 
					

					

					<?php if (get_option('swt_styles') == 'CMS') { ?>
					   
					    <?php  include(TEMPLATEPATH . '/includes/column.php');   ?>
					
					<?php } else { include(TEMPLATEPATH . '/includes/blog.php'); } ?>

			</div><!-- art_main end-->
			
			
<?php  include(TEMPLATEPATH . '/sidebar.php'); ?>			
			
		


<?php include(TEMPLATEPATH . '/footer.php'); ?>		
