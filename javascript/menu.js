 $(document).ready(function(){
        
       
    //javascript positioning   
    var topmen = $("#firstmen").height();
    var topmen2;
        
    $("#midmenu").css("top:"+topmen-2+"px");
    
    
    //dropdown Menu
        
    if($('#menu-bar').css('display') == 'none')
    {
           topmen2 =   $("#menu").height();
    }
    else{
         topmen2 = $("#menu-bar h3").height();
        
    }
        $("#menuheight").height(topmen2);
    $( window ).resize(function() {
        
        
         if($('#menu-bar').css('display') == 'none')
    {
           topmen2 =   $("#menu").height();
    }
    else{
         topmen2 = $("#menu-bar h3").height();
        
    }
        $("#menuheight").height(topmen2);
        
    });
        
        
        
    
        
    $(".secondmen1 ul li").hover(function(){
                    
                 $(this).find("ul").stop().slideToggle(400);     
        });
        
        var contactor =1;
        
        $("#menu-bar h3").click(function(){
            //$("#respmenu").toggle();
            
            if(contactor ==1 )
            {
                $("#respmenu").animate({
                    right:'0' 
                });
                
                $("#menu-bar h3 span .icon-menu").addClass("icon-cross");
                
                $("#menu-bar h3 span").removeClass("icon-menu");
                
                contactor=2;
                
            }
            else
            {
                $("#respmenu").animate({
                    right:'-100%' 
                });
                
                  $("#menu-bar h3 span .icon-cross").addClass("icon-menu");
                
                $("#menu-bar h3 span").removeClass("icon-cross");
                
                contactor=1;
            }
            
            
            
        });
        
        
        
        //sticky menu
        $(window).scroll(function() {
           
            if($(this).scrollTop() > 2) {
               
               
                $(".secondmen1").addClass("smallmen");   
                $("#midmenu h1").css("display", "none");
                $("#midmenu h2").css("display", "block");
                $("#midmenu").addClass("stickmen");
                
               }
               else{
                $("#midmenu h1").css("display", "block");
                $("#midmenu h2").css("display", "none");
                $("#midmenu").removeClass("stickmen"); 
                $(".secondmen1").removeClass("smallmen"); 
               }
            
        });
        
        
         var imageDivs = $("#alt-section .thumb-unit");
            //alert(imageDivs.length);
            
            $("#alt-section .thumb-unit ").hover(function () {
                
                //$(this).find(".thumb-overlay").stop().fadeToggle(400);
                $(this).find(".thumb-overlay").stop().slideToggle(300);
                
            });
        
     
        if($(window).width() <= 600 )
            
        {
            $("#firstmen ul li a").removeClass("hvr-overline-from-center");
        }
        
var heighttrigger =$( "#menuheight").height() + $( ".secondmen2").height() + $( ".cycle-slideshow").height();
            
        //$(".column1").hide();
        //$(".column2").hide();
        
        
//section2_ab ----------------------------
   
        
        
    $(window).scroll(function() {
        
if($(window).scrollTop()> $(this).height())
        {
    if( !$('#myDiv').is(':visible'))
               {
                    $("#backtotop").show();
               }
               
            
            
        }
         else
            {
                $("#backtotop").hide();

            }
                 
    });
      
    //end of section2_ab ----------------------------
       
        //back top top button
        
             $("#backtotop").click(function(){
                 
                 $('html,body').animate({
                     
                     scrollTop:0
                     
                 },500);
                 
                 
             });
        
        
        
        
        //end of button
        
        
        
        // modalll ------------------------
        
        $(".menu-stafflogin").click(function()        {
            event.preventDefault();  
            
            $(".modal-overlay").fadeIn().find('.modal').fadeIn();
            $("#staffmodal").fadeIn();
            
            
            
        });
     
     
     $(".menu-adminlogin").click(function()        {
            event.preventDefault();  
            
            $(".modal-overlay").fadeIn().find('.modal').fadeIn();
            $("#adminmodal").fadeIn();
            
            
            
        });
        
        
        $(".menu-studnetlogin").click(function()        {
            event.preventDefault();  
            
            $(".modal-overlay").fadeIn().find('.modal').fadeIn();
            $("#studentmodal").fadeIn();
            
        });
        
        $(".modal-close").click(function()        {
            event.preventDefault();
           
            $(".modal-overlay").fadeOut().find('.modal').fadeOut();
             $("#studentmodal").fadeOut();
            $("#staffmodal").fadeOut();
             $("#adminmodal").fadeOut();
            
            
        });
        
        //end of modallll
        
        
       
 });
