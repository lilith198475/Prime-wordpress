// JavaScript Document


	
	function init_map() {
		var var_location = new google.maps.LatLng(43.857455, -79.385605);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
            map: var_map,
			title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);

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
        
        