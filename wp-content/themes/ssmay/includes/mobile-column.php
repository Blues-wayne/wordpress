	<!--首页(下)图片广告-->	
<div class="toupian1">
                   <?php if (get_option('swt_centerc') == 'Hide') { ?>
				   <?php { echo ''; } ?>
				   <?php } else { include(TEMPLATEPATH . '/includes/ad_h.php'); } ?>
</div>





       <!-- 幻灯片开始 -->
	<div id="slideshow">
 
      <div class="huanden2"> <!--热门文章数量-->
				             <ul id="mq1">WHAT'S HOT</ul>
				             
							 <div id="mq2"> 							    
					           <?php get_most_viewed_category(4, 'both', 1); ?>
						     </div>
							 <div id="mq3">
					           <?php get_most_viewed_category(5, 'both', 2); ?>
							   <?php get_most_viewed_category(6, 'both', 2); ?>
					         </div>
							 
							 <div id="mq3"> 							    
					           <?php get_most_viewed_category(7, 'both', 2); ?>
							   <?php get_most_viewed_category(6, 'both', 2); ?>
						     </div>
							
		</div>　
 
</div>
		<!-- 幻灯片结束 -->
		





<!--分类ID上-->
<?php $display_categories = explode(',', get_option('swt_cat') ); $i = 1; foreach ($display_categories as $category) { ?>   
           <div class="con_box fl resouse_artile qd_aritle" id="cat-<?php echo $i; ?>"  >
		        <?php query_posts("cat=$category")?>
			   <h2><?php single_cat_title(); ?></h2>
			   <span><a class="more fr" href="<?php echo get_category_link($category);?>" target="_blank">更多 <?php single_cat_title(); ?> 文章</a></span>
	         <div>	
	
		       <ul class="column list clearfix"> 
		              <?php query_posts( array('showposts' => 3,'cat' => $category,'post__not_in' => $do_not_duplicate));?>
		              <?php while (have_posts()) : the_post(); ?>
			      <li class="post-1"> 	
			         <cite>
	                 <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">
			              <?php if ( get_post_meta($post->ID, 'show', true) ) : ?>
				          <?php $image = get_post_meta($post->ID, 'show', true); ?>
				          <img src="<?php echo $image; ?>"width="150" height="150" alt="<?php the_title(); ?>"/>
				          <?php else: ?>
				          <?php if (has_post_thumbnail()) { the_post_thumbnail('home-thumb' ,array( 'alt' => trim(strip_tags( $post->post_title )), 'title' => trim(strip_tags( $post->post_title )),'class' => 'home-thumb')); }
				                else { ?>
					      <img src="<?php echo catch_first_image() ?>" alt="<?php the_title(); ?>" width="150" height="150" />
				          <?php } ?>
				          <?php endif; ?>
				     </a>
			         </cite>				 		        
			      </li>
		                  <?php endwhile; ?>
		       </ul>
		
		       <ul class="index_resourse_list qd_list clearfix"> 
		                  <?php query_posts( array( 'orderby' => 'rand','showposts' => get_option('swt_column_post'),'cat' => $category,'offset' => 1,'post__not_in' => $do_not_duplicate));?>
		                  <?php while (have_posts()) : the_post(); ?>
			       <li>		<span class="fr"><?php post_views(' ', '  ℃'); ?> </span>	
			              <a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,30); ?></a>
			       </li>
		                  <?php endwhile; ?>
		       </ul>
	  </div> 
</div>
	<?php $i++; ?>
	<?php } ?>
	


	<!-- 侧边栏(中)广告开始-->  
	<?php wp_reset_query();  ?>
		<?php if (get_option('swt_adnn') == 'Hide') { ?>
		<?php { echo ''; } ?>
		<?php } else { include(TEMPLATEPATH . '/includes/ad_s.php'); } ?>
		<div class="clear"></div>

	


	<div class="con_box htabs_art clearfix"> <!-- 热门信 -->
		<ul class="cooltab_nav sj_nav clearfix">	
		    <li><a href="#" class="active" title="new_art">热门信息</a></li>			
			<li><a href="#" title="hot_art">最新信息</a></li>					
		</ul>   
		<div id="new_art" class="com_cont">   
			<ul>
			    <?php query_posts('posts_per_page=8&caller_get_posts=1&orderby=comment_count'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li>  <span class="fr"> 0  ℃ </span>	
				<a target="_blank" href="<?php the_permalink(); ?>" class="title" title="<?php the_title(); 

?>"><?php echo cut_str($post->post_title,32); ?></a>
				</li>
				<?php endwhile; ?>
				
			</ul>                    
		</div>
        <div id="hot_art" class="com_cont">  
            <ul>
				<?php query_posts('posts_per_page=8&caller_get_posts=1'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li> <span class="fr"> 0  ℃ </span>	
				<a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" 

class="title"><?php echo cut_str($post->post_title,34); ?></a>
				</li>
				<?php endwhile; ?>
			</ul>      
		</div>		
	</div>





	
	
	
<!--分类ID中-->	
<?php $display_categories = explode(',', get_option('swt_cat1') ); $i = 1; foreach ($display_categories as $category) { ?>   
           <div class="con_box fl resouse_artile qd_aritle" id="cat-<?php echo $i; ?>"  >
		        <?php query_posts("cat=$category")?>
			   <h2><?php single_cat_title(); ?></h2>
			   <span><a class="more fr" href="<?php echo get_category_link($category);?>" target="_blank">更多 <?php single_cat_title(); ?> 文章</a></span>
	         <div>	
	
		       <ul class="column list clearfix"> 
		              <?php query_posts( array('showposts' => 3,'cat' => $category,'post__not_in' => $do_not_duplicate));?>
		              <?php while (have_posts()) : the_post(); ?>
			      <li class="post-1"> 	
			         <cite>
	                 <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">
			              <?php if ( get_post_meta($post->ID, 'show', true) ) : ?>
				          <?php $image = get_post_meta($post->ID, 'show', true); ?>
				          <img src="<?php echo $image; ?>"width="150" height="150" alt="<?php the_title(); ?>"/>
				          <?php else: ?>
				          <?php if (has_post_thumbnail()) { the_post_thumbnail('home-thumb' ,array( 'alt' => trim(strip_tags( $post->post_title )), 'title' => trim(strip_tags( $post->post_title )),'class' => 'home-thumb')); }
				                else { ?>
					      <img src="<?php echo catch_first_image() ?>" alt="<?php the_title(); ?>" width="150" height="150" />
				          <?php } ?>
				          <?php endif; ?>
				     </a>
			         </cite>				 		        
			      </li>
		                  <?php endwhile; ?>
		       </ul>
		
		       <ul class="index_resourse_list qd_list clearfix"> 
		                  <?php query_posts( array( 'orderby' => 'rand','showposts' => get_option('swt_column_post'),'cat' => $category,'offset' => 1,'post__not_in' => $do_not_duplicate));?>
		                  <?php while (have_posts()) : the_post(); ?>
			       <li>		<span class="fr"><?php post_views(' ', '  ℃'); ?> </span>	
			              <a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,30); ?></a>
			       </li>
		                  <?php endwhile; ?>
		       </ul>
	  </div> 
</div>
	<?php $i++; ?>
	<?php } ?>
	
	
	<!--图片广告-->	
<div class="toupian1">
                   <?php if (get_option('swt_centerc') == 'Hide') { ?>
				   <?php { echo ''; } ?>
				   <?php } else { include(TEMPLATEPATH . '/includes/ad_ss.php'); } ?>
</div>
	
	<!--分类ID下-->	
<?php $display_categories = explode(',', get_option('swt_cat2') ); $i = 1; foreach ($display_categories as $category) { ?>   
           <div class="con_box fl resouse_artile qd_aritle" id="cat-<?php echo $i; ?>"  >
		        <?php query_posts("cat=$category")?>
			   <h2><?php single_cat_title(); ?></h2>
			   <span><a class="more fr" href="<?php echo get_category_link($category);?>" target="_blank">更多 <?php single_cat_title(); ?> 文章</a></span>
	         <div>	
	
		       <ul class="column list clearfix"> 
		              <?php query_posts( array('showposts' => 3,'cat' => $category,'post__not_in' => $do_not_duplicate));?>
		              <?php while (have_posts()) : the_post(); ?>
			      <li class="post-1"> 	
			         <cite>
	                 <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">
			              <?php if ( get_post_meta($post->ID, 'show', true) ) : ?>
				          <?php $image = get_post_meta($post->ID, 'show', true); ?>
				          <img src="<?php echo $image; ?>"width="150" height="150" alt="<?php the_title(); ?>"/>
				          <?php else: ?>
				          <?php if (has_post_thumbnail()) { the_post_thumbnail('home-thumb' ,array( 'alt' => trim(strip_tags( $post->post_title )), 'title' => trim(strip_tags( $post->post_title )),'class' => 'home-thumb')); }
				                else { ?>
					      <img src="<?php echo catch_first_image() ?>" alt="<?php the_title(); ?>" width="150" height="150" />
				          <?php } ?>
				          <?php endif; ?>
				     </a>
			         </cite>				 		        
			      </li>
		                  <?php endwhile; ?>
		       </ul>
		
		       <ul class="index_resourse_list qd_list clearfix"> 
		                  <?php query_posts( array( 'orderby' => 'rand','showposts' => get_option('swt_column_post'),'cat' => $category,'offset' => 1,'post__not_in' => $do_not_duplicate));?>
		                  <?php while (have_posts()) : the_post(); ?>
			       <li>		<span class="fr"><?php post_views(' ', '  ℃'); ?> </span>	
			              <a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,30); ?></a>
			       </li>
		                  <?php endwhile; ?>
		       </ul>
	  </div> 
</div>
	<?php $i++; ?>
	<?php } ?>
	
