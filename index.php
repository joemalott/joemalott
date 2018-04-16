<?php get_header(); ?>

      <div class="content animated fadeIn">
        
          <?php 

            
              if (have_posts()) :
                 while (have_posts()) :
                    the_post(); ?>
                     
                     <?php the_content(); ?>
		  
		  
                       
            <?php 
               endwhile;
              endif;
           ?>

      </div>

<?php get_footer(); ?>




