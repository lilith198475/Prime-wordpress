<?php 
/* 
  Template Name: news Page
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
                                         <h4>Prime 40 最新保险新闻</h4>
                                      </div>  
                                      
                                  </div>
                                  <div class="col-sm-2 hidden-xs">
                                  </div>
                                  <div class="col-sm-2 col-xs-6" >
                                      <div class="row">
                                         
                                      </div>  
                                      
                                 </div>           
                                  
                       </div>
                       <hr>
    <!-- Emergency post begin -->                    
                        
                <?php
                        $posts_per_page = 8;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array(
                            'post_type' => 'post',
                            'paged' => $paged,
                            'orderby' => 'date',
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
                                
                                  <div class="col-sm-4 col-xs-6">
                                      
                                      <?php echo "<a href='"; the_permalink(); echo "' target='_blank'>";  the_post_thumbnail('large', $thumbnail_attr); echo "</a>\n"; ?>
                                  </div>
                                  <div class="col-sm-2 hidden-xs">
                                  </div>
                                  <div class="col-sm-5 col-xs-6" >
                                      <div class="row">
                                              
                                      <h4><?php echo "<a href='"; the_permalink(); echo "' target='_blank'>"; the_title(); echo "</a>\n"; ?></h4>           
                                       
                                         
                                      </div>  
                                      <div class="row">
                                        <p><?php echo mb_substr(get_the_content(),0,120,'utf-8'); ?></p>            
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
                        
                        
                        




    <!-- Emergency post end -->
                        
                </div>        
                    <div class="col-sm-1"></div>   
                   <?php include (TEMPLATEPATH . '/side.php'); ?>   
                </div>          
            </div>   

<?php get_footer() ?>