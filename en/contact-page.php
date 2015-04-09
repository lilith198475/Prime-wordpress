<?php 
/* 
  Template Name: contact page
*/
?>

<?php get_header(); ?>


<div class="container">
                <div class="row main-content-section"> 
                   <!-- Contact form -->     
                    <div class="col-sm-9">
                 		<div class="row">
                        	<div class="col-md-12" style="display:none;">
									<div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Message Sent !</strong></div>	  
    								<div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error！ Please check all input item</strong></div>
  							</div>
  						<form role="form" method="post" action="http://www2.prime40.ca/email-send.php" >
    					  	<div class="col-lg-6">
      						<div class="form-group">
        						<label for="InputName">Your Name</label>
        						<div class="input-group">
          							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
        				   			<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                           		</div>
      					   </div>
      					   <div class="form-group">
        						<label for="InputEmail">Your Email</label>
        						<div class="input-group">
         					    	<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                                </div>
      						</div>
     					 	<div class="form-group">
       						    <label for="InputMessage">Please leave the message, we will contact you.</label>
        						<div class="input-group">
          							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
          							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                                </div>
      					 	</div>
      						<div class="form-group">
        						<label for="InputReal">What is 4+3? (Please fill the answer)</label>
        						<div class="input-group">
          							<input type="text" class="form-control" name="InputReal" id="InputReal" required>
          							<span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      							</div>
      							<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success pull-right">
    						</div>
 					  </form>
  						<hr class="featurette-divider hidden-lg">
                            
                            	<div class="col-lg-5 col-md-push-1">
                            
                           
    							<address>
    							<h3>Office Address</h3>
    							 	
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>        
                                        
                                      <p class="lead"><?php the_content(); ?></p> 
                                	<?php endwhile; else : ?>
  	
                                    <p class="lead"><?echo "Information not found, please conatct Administrator"?></p>
  	
  	                             <?php endif; ?>    
     <?php wp_reset_postdata();?>
    </address>
  </div>
 	
                        </div>
                        
                        <br>
                        
                         <div class="row">
      <div id="map-container" class="col-md-8"></div>
      </div>
                    </div> 
                    <!-- Contact form -->   
                    <div class="col-sm-1"></div>    
                      <?php include (TEMPLATEPATH . '/side.php'); ?> 

</div>
    </div>


<?php get_footer(); ?>
