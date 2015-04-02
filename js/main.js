// JavaScript Document

    $(function() {
                $(".rslides").responsiveSlides();
                });
           
          
         //console.log($('.rslides .testwill').height());    
        $(window).resize(function(){
               var navbarheight;
               var rslides;
               var topmargin;
               var triangle_width;
               rslides=$('.rslides').height();
               navbarheight=$('.navbar').height();
               triangle_width=$('#triangle-content').width();
               $('#triangle-content').css("height",triangle_width*0.4);
               $('body').css('padding-top',navbarheight);
               
           });
        
        window.onload = function(){
             var navbarheight;
               var rslides;
               var topmargin;
               var triangle_width;
               rslides=$('.rslides').height();
               navbarheight=$('.navbar').height();
               triangle_width=$('#triangle-content').width();
                $('#triangle-content').css("height",triangle_width*0.4);
               $('body').css('padding-top',navbarheight);
            
        };
        
        $(window).bind('orientationchange', function(event) {
            var navbarheight;
               var rslides;
               var topmargin;
               var triangle_width;     
               rslides=$('.rslides').height();
               navbarheight=$('.navbar').height();
               triangle_width=$('#triangle-content').width();
                $('#triangle-content').css("height",triangle_width*0.4);
               $('body').css('padding-top',navbarheight);
            
            
        });
        
        if(navigator.appVersion.indexOf("MSIE 8.")!=-1){
            $('#triangle-content').css('background-color',"#652d90");
            $('#triangle-content').css('background-image',"none");
            
        }
        
        