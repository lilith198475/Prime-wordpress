<?php get_header(); ?>

 <div class="container">
                <div class="row main-content-section">
                    
                        
                    <div class="col-sm-9">
                        <div class="row side-page-text">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h4><?php the_title(); ?></h4>
                        <?php the_content() ?>
                        <?php endwhile; else : ?>
			
			         <p><?echo  'Sorry, no posts found. Please contact Administrator' ?></p>
			
			     <?php endif; ?>
                        
                        
                        </div>
                        
     
                                <div class="row">
                                    <div class="col-xs-3 col-sm-2">   
                                        <a href="http://www2.prime40.ca/?p=86"><img  src="<?php bloginfo('template_directory'); ?>/img/news-lgo.png" class="img-responsive"></a>
                                    </div>   
                                    <div class="col-xs-9">
                                    
                                    	<div class="row"><div style="height:10px"></div></div>
                                    	<div class="row">
                                   			<a href="http://www2.prime40.ca/?p=86"><h4>查阅更多新闻</h4></a>
                                    	</div>
                                    </div>
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
                                <div class="row"> <h4>为什么选择Prime40 保险</h4></div>
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p><img src="<?php bloginfo('template_directory'); ?>/img/sign1.png">专业团队，亲切服务</p>
                                        <p><img src="<?php bloginfo('template_directory'); ?>/img/sign1.png">点击报价，直接简单</p>
                                        <p><img src="<?php bloginfo('template_directory'); ?>/img/sign1.png">多语服务，方便沟通</p>
                                    </div>     
                                     <div class="col-sm-6">
                                         <p><img src="<?php bloginfo('template_directory'); ?>/img/sign1.png">投保项目，选择更多</p>
                                        <p><img src="<?php bloginfo('template_directory'); ?>/img/sign1.png">合作伙伴，实力雄厚</p>
                                        
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
                    










<?php get_footer(); ?>