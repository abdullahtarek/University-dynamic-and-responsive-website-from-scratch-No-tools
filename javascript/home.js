    $(document).ready(function(){
      
                var flagsec2scroll =0;
   

        
        $(window).scroll(function() {
               
            if($(window).scrollTop()> $(".section2_ab").offset().top-100 && flagsec2scroll ==0)
        {
            $(".column1").animate({
                    left:'0' 
                });
            
              $(".column2").animate({
                    right:'0' 
                });
            
            flagsec2scroll =1;
            
            //alert("hamada");
        }
        
        
        });
        
        
        
        
        
        
        
        
        
    });
