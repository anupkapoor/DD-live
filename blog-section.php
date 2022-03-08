<section class="blog">
            <div class="container-block">
                <h2>Latest Blog</h2>
                <h3 class="align-center bottom-margin">Well-researched select topics offering great insight of industry and technology!</h3>
			</div>
			<div class="container-block">
			<!-- repeatable div start -->
			<div class="bxslider">
			
			
			<?php
define('WP_USE_THEMES', false);
require('blog/wp-load.php');
$catslug=$pagecat;
//query_posts(array('showposts'=>6,'order'=>'asc','category_name' => 'online-training,iphone-development'));
query_posts( "category_name=$catslug&order=DESC&showposts=6" );
?>

<?php 
          /*
            Start with variables to help with row creation;
          */
            $startRow = true;
            $postCounter = 0;
          ?>
          <?php
          /*
            Start the loop
          */
            if (have_posts()) : while (have_posts()) : the_post();  
          ?>

            <?php
            /*
              Check whether we need to add the start of a new row.
              If true, echo a div with the "row" class and set the startRow variable to false 
              If false, do nothing. 
            */
            if ($startRow) {
              echo '<!-- START OF INTERNAL ROW --><div class="slide-content">';
              $startRow = false;
            }  
            ?>
            <?php
            /* Add one to the counter because a new post is being added to your page.  */ 
              $postCounter += 1; 
            ?>
            <!-- This div serves as the template for each post returned within the loop -->
            
			

		   <div class="blog-common">
					<div class="blog-common-inner">
						<div class="heart-shape"><div class="heart-show">&nbsp;</div>						 						</div>
						
						<div class="blog-inner-set">
							<div class="author-date-display">
								<span class="author">Posted by Vishal Bhatia</span> on <?php the_date(); ?>  
							</div>
							<div class="blog-feature-img ddd">
								<?php $thumbnail_id = get_post_thumbnail_id();
								$thumbnail_url= wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true);
								$thumbnail_meta = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
								?>
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo the_post_thumbnail_url('thumbnail'); ?>" class="responsive-img2" alt="<?php echo the_title(2); ?>" width="423" height="auto" />
								</a>
							</div>
							
							<div class="blog-title">
							
							<?php $title = get_the_title(); 
							$short_title = wp_trim_words( $title, 10, '...' );
							//echo '<h3>'.$short_title.'</h3>';
							?>
							
								<h3><a href="<?php the_permalink(); ?>" target="_blank" ><?php echo $short_title; ?></a></h3>
							</div>
							<div class="blog-description">
								<?php the_excerpt(50); ?>
							</div>
							<div class="readmore-btn">
								<a href="<?php the_permalink(); ?>" target="_blank" >Read More</a>
							</div>
						</div>
					</div>
				</div>
		   
		   
		   
		   
		   
		   
		   
		   
		   
            <?php 
            /*
            Check whether the counter has hit 3 posts.  
            If true, close the "row" div.  Also reset the $startRow variable so that before the next post, a new "row" div is being created. Finally, reset the counter to track the next set of three posts.
            If false, do nothing. 
            */
            if ( 2 === $postCounter ) {
                echo '</div><!-- END OF INTERNAL ROW -->';
                $startRow = true;
                $postCounter = 0;
            }
            ?>
            <?php 
            /* END THE WHILE LOOP*/
            endwhile;
            ?>
            <?php 
            /* If you are returning an odd number of posts (i.e., anything other than a multiple of 3), we will need to close the row div.*/
            if ($postCounter !== 0 ) {
              echo '</div><!-- END OF INTERNAL ROW -->';
            }
            ?>
            <?php else:  ?>
              <div class="page-header"><h1>Uh Oh!</h1></div>
              <p>Sorry, for some reason the contents of this page isn't displaying.</p>
            <?php endif; ?>
			
			
			</div>
			</div> 
        </section>