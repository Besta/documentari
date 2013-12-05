var BrowserDetect = 
{
    init: function () 
    {
        this.browser = this.searchString(this.dataBrowser) || "Other";
        this.version = this.searchVersion(navigator.userAgent) ||       this.searchVersion(navigator.appVersion) || "Unknown";
    },

    searchString: function (data) 
    {
        for (var i=0 ; i < data.length ; i++)   
        {
            var dataString = data[i].string;
            this.versionSearchString = data[i].subString;

            if (dataString.indexOf(data[i].subString) != -1)
            {
                return data[i].identity;
            }
        }
    },

    searchVersion: function (dataString) 
    {
        var index = dataString.indexOf(this.versionSearchString);
        if (index == -1) return;
        return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
    },

    dataBrowser: 
    [
        { string: navigator.userAgent, subString: "Chrome",  identity: "Chrome" },
        { string: navigator.userAgent, subString: "MSIE",    identity: "Explorer" },
        { string: navigator.userAgent, subString: "Firefox", identity: "Firefox" },
        { string: navigator.userAgent, subString: "Safari",  identity: "Safari" },
        { string: navigator.userAgent, subString: "Opera",   identity: "Opera" }
    ]

};
BrowserDetect.init();

function setAutoHeight(){
	 var w=jQuery('#videos').width();
	 var w2=jQuery('#videos .video_container').width();
	 var mar=(w*0.4)/100;
	 jQuery('.video_container').height((w2-mar-1)*9/16);
	 var ht=jQuery('.video_container').find('.video_title').height()-3;
	 var hf=jQuery('.video_container').find('.video_title').height()-3;
	 jQuery('.video_container').find('.video_title').css('font-size',ht+'px');
	 jQuery('.video_container').find('.video_description').css('font-size',ht+'px');
}
jQuery(window).resize(function() {
	setAutoHeight();
});

jQuery(document).ready(function() {
	setAutoHeight();
});


jQuery(document).ready(function() {

	 jQuery(this).find(".play_link").hide();
	 
   	  jQuery(".flip_n").click(function() {
   		
   		  if(BrowserDetect.browser=='Explorer')
   		  {
   			
   			 if(!jQuery(this).nextAll(".video").find(".back").hasClass('flipped_ie'))
   				 { 
   				
		   			 jQuery(this).nextAll(".video").find(".back").addClass('flipped_ie');
		   			 jQuery(this).nextAll(".video").find(".back").css('transform','rotateY(0deg)');
		   			 jQuery(this).nextAll(".video").find(".front").fadeOut(500);
		   			 jQuery(this).nextAll(".video").find(".back").fadeIn(500);
   				 }
   			 else
   				 {
	   			 jQuery(this).nextAll(".video").find(".back").css('transform','rotateY(180deg)');
	   			 jQuery(this).nextAll(".video").find(".back").removeClass('flipped_ie');
	   			 jQuery(this).nextAll(".video").find(".back").fadeOut(500); 
	   			 jQuery(this).nextAll(".video").find(".front").fadeIn(500);
   				 }
   		  
   		  }
   		  else
   		  	{	
   			  
   			  jQuery(this).nextAll(".video").toggleClass('flipped');
   			  
//   			  if(jQuery(this).next(".video").hasClass('flipped'))
//				   jQuery( this ).find(".play_link").show();   
   		  	}
   		      jQuery(this).nextAll(".play").toggle();
   		      jQuery(this).nextAll(".play_link").toggle();
   		      jQuery(this).nextAll(".cate_link").toggle();
   		  	});
   	      
	});

jQuery(document).ready(function() {
	
	jQuery( this ).find(".info").hide();
    
	
	 jQuery('.video_container').hover(
			  function() {
				     // jQuery( this ).find(".play").hide();
 
				      jQuery( this ).find(".flip_n").stop().animate({width: '15%'},function(){
					  
					  jQuery( this ).find(".info").show(); 
				  });
				  }, function() {

					  if(!jQuery( this ).find(".video").hasClass('flipped') && !jQuery( this ).find(".video").find(".back").hasClass('flipped_ie'))
						  {
						  //jQuery( this ).find(".play").fadeIn(500);
						  }
						  jQuery( this ).find(".info").stop().hide();
					  	  jQuery( this ).find(".flip_n").stop().animate({width: '4%'});
				  }
				);
	 
	});





jQuery(document).ready(function() {
	
	jQuery(window).scroll(function() {
		 
		var scroll=jQuery(document).scrollTop();
		console.log(scroll);
			if(scroll>0)
			{
			jQuery('header').css('box-shadow','0px 0px '+10+'px 0px');
			}
			else
			{
			jQuery('header').css('box-shadow','0px 0px 0px 0px');
			}
		});
	 
	});

jQuery(document).ready(function() {
	

 	  jQuery( ".tutto" ).click(function() {
 		
 		 jQuery( ".flip_n" ).trigger( "click" );
 		  	
 				
 	  
 	  });
	 
	});




