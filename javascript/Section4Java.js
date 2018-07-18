var Setion4Counter=0;
var End=7;

$(document).ready(

function(){
    
        
    }    
  
);

function Section4Slide(){

    $Slider = $(".section-4-unit");
    
    Setion4Counter++;
    
    if (Setion4Counter == End){
       
        Setion4Counter = 0;
        
        if(End == 7)
        {
            End--;
        }
    
        $(".section-4-unit").css('left', '0px') 
       
    }
    
    $Slider.stop().animate({'left':'-=291px'}, 400);

    
    
};