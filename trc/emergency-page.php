<?php 
/* 
  Template Name: emergency Page
*/
?>

<?php get_header(); ?>

 <div class="container">
                <div class="row main-content-section">
                    <div class="col-sm-9 ">
                             <div class="row hidden-xs">    
                                    <div style="height:10px;">
                                    </div>
                            </div>
                        
                        <div class="row">
                                <div class="col-sm-1 hidden-xs">
                                  </div>
                                  <div class="col-sm-4 col-xs-6">
                                     <div class="row">
                                         <h4>保險公司</h4>
                                      </div>  
                                      
                                  </div>
                                  <div class="col-sm-2 hidden-xs">
                                  </div>
                                  <div class="col-sm-5 col-xs-6" >
                                      <div class="row">
                                         <h4>緊急聯系電話</h4>
                                      </div>  
                                      
                                 </div>           
                                  
                       </div>
                       <hr>
    <!-- Emergency post begin -->                    
                        
                <?php
                        $posts_per_page = 12;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array(
                            'post_type' => 'emergency',
                            'paged' => $paged,
                            'orderby' => 'date',
                            'posts_per_page'=> $posts_per_page,
                            'order' =>'ASC',
                        );
                        $query = new WP_Query( $args );
                    ?>    
                <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>                  
                <?php
                       $thumbnail_attr = array(
	                   'class' => "img-responsive",
	                   'alt'   => trim( strip_tags( get_the_title())),
                    );       
                ?>     
                        
                          <div class="row news">
                                <div class="col-sm-1 hidden-xs">
                                  </div>
                                  <div class="col-sm-4 col-xs-6">
                                      
                                      <?php echo "<a href='"; the_field('weblink'); echo "' target='_blank'>";  the_post_thumbnail('large', $thumbnail_attr); echo "</a>\n"; ?>
                                  </div>
                                  <div class="col-sm-2 hidden-xs">
                                  </div>
                                  <div class="col-sm-5 col-xs-6" >
                                      <div class="row">
                                              
                                        <?php echo "<a href='"; the_field('weblink'); echo "' target='_blank'>"; the_field('website'); echo "</a>\n"; ?>            
                                       
                                         
                                      </div>  
                                      <div class="row">
                                        <?php the_field('phonenumber') ?>            
                                      </div>
                                 </div>           
                                  
                             </div>     
                             <hr>
                            <div class="row">    
                                    <div style="height:30px;">
                                    </div>
                            </div>
                        
                        
                        
                        
                <?php endwhile; else : ?>
  	
  	             <p>Content not found, please contact administrator</p>
  	
  	            <?php endif; ?>            
                        
                  <?php wp_reset_postdata();?>       
                        




    <!-- Emergency post end -->
                        
                </div>        
                    <div class="col-sm-1"></div>   
                   <?php include (TEMPLATEPATH . '/side.php'); ?>   
                </div>          
            </div>   

<?php get_footer() ?>