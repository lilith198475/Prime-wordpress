<?php 
/* 
  Template Name: Partner Page
*/
?>

<?php get_header(); ?>



  <div class="container">
                <div class="row main-content-section">
                    
                    <div class="col-sm-9"> 
                    <?php
                        
                        $posts_per_row = 3;
                        $posts_per_page = 18;
                        $post_counter = 0;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array(
                            'post_type' => 'partner',
                            'paged' => $paged,
                            'orderby' => 'date',
                            'order' =>'ASC',
                        );
                        $query = new WP_Query( $args );
                    ?>     
                   
                     
                    
<!-- One row of partner logo -->
                        
                <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>        
                        
                        
                <?php 
                $thumbnail_attr = array(
	                   'class' => "img-responsive",
	                   'alt'   => trim( strip_tags( get_the_title())),
                    
             
              );
                     $post_counter= $post_counter + 1;
                    
                    if ($post_counter == 1){
                        
                                echo "<div class='row'>\n";
                                echo "<div style='height:60px;'></div>\n";
                                echo "</div>\n"; 
                                echo "<div class='row'>\n";     
                    }   
                    echo "<div class='col-xs-3'>\n";
                    echo "<div class='row'>\n";
                    echo "<a href='"; the_field('company_website'); echo "'>";  the_post_thumbnail('large', $thumbnail_attr); echo "</a>\n";
                   echo "</div>\n";
                   echo "</div>\n";
                   echo "<div class='col-sm-1'></div>\n";
    
    
                  if($post_counter == $posts_per_row)
                  {
                                
                      echo  "</div>\n";
                      echo  "<hr>\n";  
                                 
                                $post_counter=0;
                      
                  }
                      
                       
                   
                
?>
                        
                        
                        
                        
                <?php endwhile; endif;?> 
                <?php        
                   if($post_counter !== $posts_per_row)
                  {
                         echo  "</div>\n";   
 
                  }        
                        ?>
                        
                    </div>    
                        
    <!-- One row of partner logo -->                     
                      
                    
                    <div class="col-sm-1">
                        
                    </div>
                        
                        
                   <?php include (TEMPLATEPATH . '/side.php'); ?>
                    
                
                </div>
         
        
            </div>    
            





<?php get_footer(); ?>