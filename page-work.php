<?php get_header(); ?>

      <div class="content animated fadeIn">
				
				<h2>Web</h2>
				
         <?php
				
          // WP_Query arguments
          $args = array(
            'post_type'              => array( 'work' ),
						'category_name' => 'Web',
          );

          // The Query
          $wp_query = new WP_Query( $args );
         

          $i = 1;
          //added before to ensure it gets opened
          // echo '<div class="row">';
          if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
               ?>

				<!--  <div class="col"> -->
         <!--   <a class="image-link" href="<?php the_permalink(); ?>" style="background-image:none;"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></a> -->
                 <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> -  <?php echo get_the_excerpt(); ?> </p>
        				<?php 
								 
								 /* 
								 
								    <p class="date"><?php the_date('M Y'); ?> - <?php
					$key_1_value = get_post_meta( get_the_ID(), 'medium', true );
					// Check if the custom field has a value.
					if ( ! empty( $key_1_value ) ) {
  						  echo $key_1_value;
					}
					 ?>
				   </p>
					 					 
								 <p><?php the_excerpt(55); ?></p>
					  </div>
					 */
								 ?>
              


              <?php

             /*  // if multiple of 2 close div and open a new div
               if($i % 2 == 0) {echo '</div><div class="row">';}

          $i++;
					*/
							endwhile; endif;
          
				/*
					//make sure open div is closed
          echo '</div>';
					*/

          wp_reset_postdata();     

          ?>
				
				<h2>Code</h2>
				
				 <?php
				
          // WP_Query arguments
          $args = array(
            'post_type'              => array( 'work' ),
						'category_name' => 'Code',
          );

          // The Query
          $wp_query = new WP_Query( $args );
         

          $i = 1;
          //added before to ensure it gets opened
          echo '<div class="row">';
          if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
               ?>

               <div class="col">
         <!--   <a class="image-link" href="<?php the_permalink(); ?>" style="background-image:none;"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></a> -->
                 <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> -  <?php echo get_the_excerpt(); ?> </p>

				 
               </div>


              <?php

               // if multiple of 2 close div and open a new div
               if($i % 2 == 0) {echo '</div><div class="row">';}

          $i++; endwhile; endif;
          //make sure open div is closed
          echo '</div>';

          wp_reset_postdata();

          

          ?>
				
      </div>




<?php get_footer(); ?>
