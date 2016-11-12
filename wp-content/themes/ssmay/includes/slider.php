<div id="slideshow">
<div class="slideshow">
	<div id="featured_tag"></div>
	<div id="tag_c"></div>
	<div id="slider_nav"></div>
	<div id="slider" class="clearfix">
		<?php if (get_option('swt_sliders') == '特定分类的文章') { ?>
		<?php include(TEMPLATEPATH . '/includes/cat_slider.php'); ?>
		<?php } else { include(TEMPLATEPATH . '/includes/sti_slider.php'); } ?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
		<div class="featured_post" >
			<div class="slider_image">			
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank" >
			<?php if ( get_post_meta($post->ID, 'show', true) ) : ?>
				<?php $image = get_post_meta($post->ID, 'show', true); ?>
				<img src="<?php echo $image; ?>"width="350" height="248" alt="<?php the_title(); ?>"/>
				<?php else: ?>
				<?php if (has_post_thumbnail()) { the_post_thumbnail('home-thumb' ,array( 'alt' => trim(strip_tags( $post->post_title )), 'title' => trim(strip_tags( $post->post_title )),'class' => 'home-thumb')); }
				else { ?>
					 <img src="<?php echo catch_first_image() ?>" alt="<?php the_title(); ?>" width="350" height="248" />
				<?php } ?>
				<?php endif; ?>
				</a>		
				<h3></h3>
				        <h4><a target="_blank" href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php echo cut_str($post->post_title,40); ?></a></h4> 
		    	
				
		    </div>
			
			
		
		
			
		</div>
<?php endwhile; ?>
<?php endif; ?>	
	</div>
 </div>
 
                <div class="huanden2"> <!--热门文章数量-->
				             <ul id="mq1">WHAT'S HOT</ul>
				             
							 <div id="mq2"> 							    
					           <?php get_most_viewed_category(3, 'both', 1); ?>
						     </div>
							 <div id="mq3">
					           <?php get_most_viewed_category(2, 'both', 6); ?>
					         </div>
							 
							 <div id="mq2">
					           <?php get_most_viewed_category(4, 'both', 1); ?>
					         </div>
							 <div id="mq3"> 							    
					           <?php get_most_viewed_category(22, 'both', 6); ?>
						     </div>
							 
							 <div id="mq2">
					           <?php get_most_viewed_category(5, 'both', 1); ?>
					         </div>
							 <div id="mq3"> 							    
					           <?php get_most_viewed_category(25, 'both', 6); ?>
						     </div>
							 
							 
							
				</div>　
				
 
 
 </div>
 
 
                