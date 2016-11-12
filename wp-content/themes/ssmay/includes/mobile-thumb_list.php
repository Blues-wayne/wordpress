<!-- blog列表-->
			<div class="page_navi">
			     <?php par_pagenavi(9); ?>
		    </div>
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <div class="art_img_box clearfix">
	             <div class="fl innerimg_box">
	                   <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" target="_blank">
			               <?php if ( get_post_meta($post->ID, 'show', true) ) : ?>
				               <?php $image = get_post_meta($post->ID, 'show', true); ?>
				               <img src="<?php echo $image; ?>"width="200" height="154" alt="<?php the_title(); ?>"/>
				           <?php else: ?>
				               <?php if (has_post_thumbnail()) { the_post_thumbnail('home-thumb' ,array( 'alt' => trim(strip_tags( $post->post_title )), 'title' => trim(strip_tags( $post->post_title )),'class' => 'home-thumb')); }
				               else { ?>
					           <img src="<?php echo catch_first_image() ?>" alt="<?php the_title(); ?>" width="200" height="154" />
				               <?php } ?>
				           <?php endif; ?>
				       </a>
	             </div>
                 <div class="fr box_content">
					   <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php echo cut_str($post->post_title,48); ?></a></h2>        		
					  
					    <p class="intro">
						     <?php if(has_excerpt()) the_excerpt();  
							 else  
						     echo dm_strimwidth(strip_tags($post->post_content),0,55,"..."); 
						     ?>
					     </p>
                   </div>
          </div>
			   <?php endwhile; ?>
			   <?php else : ?>
			      <h3>什么也找不到！</h3>
			      <p>抱歉,你要找的文章不在这里.</p>
			   <?php endif; ?>
	      <div class="page_navi">
	           <?php par_pagenavi(9); ?>
	      </div>
<!--blog列表结束 -->