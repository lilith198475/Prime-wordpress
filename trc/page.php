<?php get_header() ?>
        
    <!--Body begin -->  
            
        
      <div class="container">
        
          <!-- Slider Begin -->
       <div id="slider">      
        <div class="container">
            
          <ul class="rslides">
                <li><img  src="<?php bloginfo('template_directory'); ?>/img/temp/homeslider1.jpg" width="1000" height="493" alt=""></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/temp/homeslider2.jpg" width="1000" height="493" alt=""></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/temp/homeslider3.jpg" width="1000" height="494" alt=""></li>
              <li><img src="<?php bloginfo('template_directory'); ?>/img/temp/homeslider4.jpg" width="1000" height="493" alt=""></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/temp/homeslider5.jpg" width="1000" height="494" alt=""></li>
          </ul>

       </div>
      
            
        </div> 
          <!-- Slider End -->
       </div>      
    
        <!-- Page content ---------------------------------------------------------->
            <div class="container">
                <div class="row main-content-section">
                    
                        
                    <div class="col-sm-9">
                        <div class="row side-page-text">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
                            <p><?php the_content(); ?></p>        
	                       <?php endwhile; else : ?>
  	
  	  <p><?php _e( 'Sorry, page found.', 'treehouse-portfolio' ); ?></p>
  	
  	<?php endif; ?>
                        
                            
                        </div>
                        
                          
                     <!--   <div class="row side-page-text2">
                              <h4>为什么选择Prime40 保险</h4>
                              <ul>
                                <li>绑定就节省10%的房屋保险</li>
                                <li>因为我们的汽车保险包含更多的范围</li>
                                <li>我们的服务人员精通国粤英</li>
                                <li>我们有着更专业的服务精神</li>
                              </ul>
                            
                        </div> -->
                        <div class="row">
                            <div class="col-xs-12 our-feature">
                                <div class="row"> <h4>為什麽選擇Prime40 保險</h4></div>
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p><img src="<?php bloginfo('template_directory'); ?>/img/sign1.png">專業團隊，親切服務</p>
                                        <p><img src="<?php bloginfo('template_directory'); ?>/img/sign1.png">點擊報價，直接簡單</p>
                                        <p><img src="<?php bloginfo('template_directory'); ?>/img/sign1.png">多語服務，方便溝通</p>
                                    </div>     
                                     <div class="col-sm-6">
                                         <p><img src="<?php bloginfo('template_directory'); ?>/img/sign1.png">投保項目，選擇更多</p>
                                        <p><img src="<?php bloginfo('template_directory'); ?>/img/sign1.png">合作夥伴，實力雄厚</p>
                                        
                                    </div> 
                                </div>
                            </div>    
                            
                        </div>

                     </div>  
                    
                    
                    
                    
                    
                    
                    <div class="col-sm-1">
                        
                    </div>    
                    
                 <?php include (TEMPLATEPATH . '/side.php'); ?>
                    
                
                </div>
         
        
            </div>    
            
   
        <!-- Page content End ------------------------------------------------------>         
<?php get_footer()?>
  