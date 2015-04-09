<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html"; charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keywords" content="Insurance, Auto Insurance, Home Insurance, Travel Insurance">
    <meta name="Description" content="">
    <link rel="SHORTCUT ICON" href="http://www2.prime40.ca/favicon.ico"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>

    <body>
    <!-- Header Part starter -->     
        <div class="navbar navbar-default navbar-fixed-top">
            <div style="width:auto; background-color:#fff;">
                <div class="container">
                   <div class="row">        
                     
                     <div class="col-xs-3  hidden-xs">  
                     <a href="http://www2.prime40.ca"><img src="<?php bloginfo('template_directory'); ?>/img/main_logo.png" class="img-responsive main-logo"></a>     
                     </div>
                       
                     <div class="middle-logo">                         
                        <img src="<?php bloginfo('template_directory'); ?>/img/middlelogo.png" >                      
                     </div>     
                    
                    <div class="col-xs-3">   
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>   
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>   
                    </div>
                    <!-- First row Part starter -->  
                  <div class="pull-right rightnav hidden-xs">
                        <div class="first-layer"><a class="quote-logo pull-left" href="https://webrater.appliedsystems.com/WR/Default.aspx?GC=BTID&LOB=AUTO&LANG=EN" target="_blank">Free quote</a>
                        <a class="quote-Number pull-right" href="tel:1-844-774-6340" >1(844)774-6340</a></div>
                        <div class="second-layer pull-right"><a class="btn btn-success btn-sm " href="https://webrater.appliedsystems.com/WR/Default.aspx?GC=BTID&LOB=AUTO&LANG=EN" target="_blank">快速询价</a></div>
                 
                        <div class="last-layer pull-right">
                         <ul class="language-nav ">
                         <li><a href="#">简体 |</a></li>   
                         <li><a href="http://www2.prime40.ca/trc/">繁体 |</a></li>
                         <li><a href="http://www2.prime40.ca/en/">English</a></li>     
                         </ul>
                        </div>
                    </div>
                        
                </div>        
                       
                 </div>       
                    <!-- First row Part end -->  
                </div>
            </div>
            
    <!-- Bottom main navigator starter -->          
        <div class="container bootom">
          <div class="collapse navbar-collapse">
           
             <?php 

     $defaults = array(
	'theme_location'  => 'primary-menu',
	'menu'            => '',
	'container'       => false,
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'nav navbar-nav navbar-middle',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);


      wp_nav_menu( $defaults );

    ?>
            
            </ul>    
         </div>         
        </div>
    <!-- Bottom main navigator end -->         
            
      </div>