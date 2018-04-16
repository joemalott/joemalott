

<?php get_header(); ?>



      <div class="content animated fadeIn">
         <?php
       

          $i = 1;
          //added before to ensure it gets opened
          echo '<div class="row">';
          if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
               ?>

               <div class="col">
           <!--  <a class="image-link" href="<?php the_permalink(); ?>" style="background-image:none;"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></a> -->
                 <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <p><?php the_excerpt(55); ?></p>
                 <p class="date"><?php the_date('M Y'); ?> - <?php the_category( ', ' ); ?></p>
               </div>


              <?php

               // if multiple of 1 close div and open a new div
               if($i % 2 == 0) {echo '</div><div class="row">';}

          $i++; endwhile; endif;
          //make sure open div is closed
          echo '</div>';

          ?>
      </div>




<?php get_footer(); ?>
