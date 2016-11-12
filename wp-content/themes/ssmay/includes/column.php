       <!-- 幻灯片开始 -->
			    
			    <?php if (get_option('swt_slidershow') == 'Display') { ?>
					<?php include(TEMPLATEPATH . '/includes/slider.php'); ?>
					<?php } else {echo ''; } ?>
			
		<!-- 幻灯片结束 -->
		
		
			
		             <!-- 最新文章 -->
					<?php if (get_option('swt_new_p') == 'Display') { ?>
					<?php include(TEMPLATEPATH . '/includes/new_post.php'); ?>
					<?php } else { echo ''; } ?>




<!--分类ID上-->
<?php $display_categories = explode(',', get_option('swt_cat') ); $i = 1; foreach ($display_categories as $category) { ?>   
           <div class="con_box fl resouse_artile qd_aritle" id="cat-<?php echo $i; ?>"  >
		        <?php query_posts("cat=$category")?>
			   <h2><?php single_cat_title(); ?></h2>
			   <span><a class="more fr" href="<?php echo get_category_link($category);?>" target="_blank">更多 <?php single_cat_title(); ?> 文章</a></span>
	         <div>	
	
		       <ul class="column list clearfix"> 
		              <?php query_posts( array('showposts' => 1,'cat' => $category,'post__not_in' => $do_not_duplicate));?>
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
			         <em><a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" ><?php echo cut_str($post->post_title,24); ?></a></em>
			         <br/>
			         <em class="excerpt"> <?php echo dm_strimwidth(strip_tags($post->post_content),0,60,"..."); ?></em>
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
	
	<!--图片秀-->
<div class="slideshow-2">
<?php if(function_exists('wp_thumbnails_for_random_posts')) { wp_thumbnails_for_random_posts(); } ?> 

</div>
	
	
	
<!--分类ID中-->	
	<?php $display_categories = explode(',', get_option('swt_cat1') ); $i = 1; foreach ($display_categories as $category) { ?>   
           <div class="con_box fl resouse_artile qd_aritle" id="cat-<?php echo $i; ?>"  >
		        <?php query_posts("cat=$category")?>
			 <h2><?php single_cat_title(); ?></h2>
			   <span><a class="more fr" href="<?php echo get_category_link($category);?>" target="_blank">更多 <?php single_cat_title(); ?> 文章</a></span>
	         <div>	
	
		       <ul class="column list clearfix"> 
		              <?php query_posts( array('showposts' => 1,'cat' => $category,'post__not_in' => $do_not_duplicate));?>
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
			         <em><a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" ><?php echo cut_str($post->post_title,24); ?></a></em>
			         <br/>
			         <em class="excerpt"> <?php echo dm_strimwidth(strip_tags($post->post_content),0,60,"..."); ?></em>
			      </li>
		                  <?php endwhile; ?>
		       </ul>
		
		       <ul class="index_resourse_list qd_list clearfix"> 
		                  <?php query_posts( array('showposts' => get_option('swt_column_post'),'cat' => $category,'offset' => 1,'post__not_in' => $do_not_duplicate));?>
		                  <?php while (have_posts()) : the_post(); ?>
			       <li> <span class="fr"><?php post_views(' ', '  ℃'); ?> </span>		
			              <a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,30); ?></a>
			       </li>
		                  <?php endwhile; ?>
		       </ul>
	  </div> 
</div>
	<?php $i++; ?>
	<?php } ?>
	
	
	<!--中间图片广告-->	
<div class="toupian1">
                   <?php if (get_option('swt_center') == 'Hide') { ?>
				   <?php { echo ''; } ?>
				   <?php } else { include(TEMPLATEPATH . '/includes/ad_c2.php'); } ?>
</div>
	
	<!--分类ID下-->	
	<?php $display_categories = explode(',', get_option('swt_cat2') ); $i = 1; foreach ($display_categories as $category) { ?>   
           <div class="con_box fl resouse_artile qd_aritle" id="cat-<?php echo $i; ?>"  >
		        <?php query_posts("cat=$category")?>
			 <h2><?php single_cat_title(); ?></h2>
			   <span><a class="more fr" href="<?php echo get_category_link($category);?>" target="_blank">更多 <?php single_cat_title(); ?> 文章</a></span>
	        <div>	
	
		       <ul class="column list clearfix"> 
		              <?php query_posts( array('showposts' => 1,'cat' => $category,'post__not_in' => $do_not_duplicate));?>
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
			         <em><a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" ><?php echo cut_str($post->post_title,24); ?></a></em>
			         <br/>
			         <em class="excerpt"> <?php echo dm_strimwidth(strip_tags($post->post_content),0,60,"..."); ?></em>
			      </li>
		                  <?php endwhile; ?>
		       </ul>
		
		       <ul class="index_resourse_list qd_list clearfix"> 
		                  <?php query_posts( array('showposts' => get_option('swt_column_post'),'cat' => $category,'offset' => 1,'post__not_in' => $do_not_duplicate));?>
		                  <?php while (have_posts()) : the_post(); ?>
			       <li> <span class="fr"><?php post_views(' ', '  ℃'); ?> </span>			
			              <a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,30); ?></a>
			       </li>
		                  <?php endwhile; ?>
		       </ul>
	  </div> 
</div>
	<?php $i++; ?>
	<?php } ?>
	
	
	<!--首页(下)图片广告-->	
<div class="toupian1">
                   <?php if (get_option('swt_centerc') == 'Hide') { ?>
				   <?php { echo ''; } ?>
				   <?php } else { include(TEMPLATEPATH . '/includes/ad_c22.php'); } ?>
</div>
	
	<!--分类ID下-->	
	<?php $display_categories = explode(',', get_option('swt_cat3') ); $i = 1; foreach ($display_categories as $category) { ?>   
           <div class="con_box fl resouse_artile qd_aritle" id="cat-<?php echo $i; ?>"  >
		        <?php query_posts("cat=$category")?>
			 <h2><?php single_cat_title(); ?></h2>
			   <span><a class="more fr"  href="<?php echo get_category_link($category);?>" target="_blank">更多 <?php single_cat_title(); ?> 文章</a></span>
	        <div>	
	
		       <ul class="column list clearfix"> 
		              <?php query_posts( array('showposts' => 1,'cat' => $category,'post__not_in' => $do_not_duplicate));?>
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
			         <em><a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" ><?php echo cut_str($post->post_title,24); ?></a></em>
			         <br/>
			         <em class="excerpt"> <?php echo dm_strimwidth(strip_tags($post->post_content),0,60,"..."); ?></em>
			      </li>
		                  <?php endwhile; ?>
		       </ul>
		
		       <ul class="index_resourse_list qd_list clearfix"> 
		                  <?php query_posts( array('showposts' => get_option('swt_column_post'),'cat' => $category,'offset' => 1,'post__not_in' => $do_not_duplicate));?>
		                  <?php while (have_posts()) : the_post(); ?>
			       <li> <span class="fr"><?php post_views(' ', '  ℃'); ?> </span>			
			              <a target="_blank" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo cut_str($post->post_title,34); ?></a>
			       </li>
		                  <?php endwhile; ?>
		       </ul>
	  </div> 
</div>
	<?php $i++; ?>
	<?php } ?>