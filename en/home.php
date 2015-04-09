<?php get_header(); ?>

 <div class="container">
                <div class="row main-content-section">
                    <div class="col-sm-9 ">
                             <div class="row hidden-xs">    
                                    <div style="height:10px;">
                                    </div>
                            </div>
                        
                        <div class="row">

                                  <div class="col-sm-4 col-xs-12" style="margin-left:15px;">
                                     <div class="row pull-left">
                                         <h4>Prime 40 Insurance News</h4>
                                      </div>  
                                      
                                  </div>
                                         
                                  
                       </div>
                       <hr>
    <!-- Emergency post begin -->                    
                        
                          
                <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>                   
                <?php
                       $thumbnail_attr = array(
	                   'class' => "img-responsive",
	                   'alt'   => trim( strip_tags( get_the_title())),
                    );       
                ?>     
                        
                              <div class="row news">
                                
                                  <div class="col-sm-4">
                                      
                                      <?php echo "<a href='"; the_permalink(); echo "' target='_blank'>";  the_post_thumbnail('large', $thumbnail_attr); echo "</a>\n"; ?>
                                  </div>
                                  <div class="col-sm-2 hidden-xs">
                                  </div>
                                  <div class="col-sm-5" >
                                      <div class="row">
                                              
                                      <h4><?php echo "<a href='"; the_permalink(); echo "' target='_blank'>"; the_title(); echo "</a>\n"; ?></h4>           
                                       
                                         
                                      </div>  
                                      <div class="row">
                                        <p><?php the_excerpt(); ?></p>   
                                            <p>  <a class="btn btn-success btn-xs" href="<?php the_permalink() ?>">Read More</a></p>
                                      </div>
                                 </div>           
                                  
                             </div>     
                             <hr>
                            <div class="row">    
                                    <div style="height:20px;">
                                    </div>
                            </div>
                        
                           
                        
                        
                <?php endwhile; ?>
                
                 <div class="row">    
                 
                                   <div class="col-sm-6 pull-left"><?php previous_posts_link(); ?></div>
                                   <div class="col-sm-6 pull-right"><?php next_posts_link(); ?></div>
                                   
                  </div>     
                  
                <?php wp_reset_postdata();?>
                
                <?php else : ?>
  	
  	             <p>Content not found, please contact administrator</p>
  	
  	            <?php endif; ?>       
                
                
                      
                       
                <!-- UnderConstruction  Part -------------------------------------------->        
                        
                        
               <?php wp_reset_postdata();?> 


				<!-- UnderConstruction  Part -------------------------------------------->     

    <!-- Emergency post end -->
                        
                </div>        
                    <div class="col-sm-1"></div>   
                   <?php include (TEMPLATEPATH . '/side.php'); ?>   
                </div>          
            </div>   

<?php get_footer() ?>