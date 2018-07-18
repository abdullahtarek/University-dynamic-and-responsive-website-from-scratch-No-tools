<?php
session_start();
include "conections.php";




/*if($_GET["logout"]==1)
{
 session_destroy();   
    
}*/

?>
<!Doctype html>

<html>
    <head>
    
        <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">
        
        <link href="css/menu.css" type="text/css" rel="stylesheet" />   
        <link href="css/some.css" type="text/css" rel="stylesheet" /> 
        <link href="css/style.css" type="text/css" rel="stylesheet" />
        <link href="css/fonts.css" type="text/css" rel="stylesheet" />  
        <link href="css/footer.css" type="text/css" rel="stylesheet" /> 
        <link href="css/iconmoon.css" type="text/css" rel="stylesheet" />   
        <link href="css/Section3Style.css" type="text/css" rel="stylesheet" />
        <link href="css/Section4Style.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src="javascript/jquery.js" ></script>
        <script type="text/javascript" src="javascript/home.js" ></script>
        <script type="text/javascript" src="javascript/menu.js" ></script>
        <script type="text/javascript" src="javascript/Section4Java.js"></script>
        
        <script src="http://malsup.github.com/jquery.cycle2.js"></script>
     
    </head>
    
   
    
    
    
    <body>
        
        <?php //echo $st; ?>
        
        
        
        <!--modall begin -->
        
        <div class="modal-overlay">
            
            <div class="modal">
            <span class="modal-close"><span class="icon-cross"></span></span>
           <h2> Sign in</h2>
                
            <div id="studentmodal">    
            <div class="modal-errors"> <?php echo $error; ?></div>
                
           <form method="post" action="">
           Id:<br /> <input type="number" name="Id" value="<?php echo $username; ?>" style="padding-bottom:5px;"><br />
            password: <br /><input type="password" name="password" ><br />
               <input id="login" type="submit" value="Submit" name="login" >
                 </form>
                </div>
                
                
            <div id="staffmodal">    
            <div class="modal-errors"> <?php echo $error; ?></div>
                
           <form method="post" action="">
        Id staff:<br /> <input type="text" name="Idstaff" value="<?php echo $username; ?>" style="padding-bottom:5px;"><br />
            password: <br /><input type="password" name="passwordstaff" ><br />
               <input id="loginstaff" type="submit" value="Submit" name="loginstaff" >
                 </form>
             </div>
        
        <div id="adminmodal">    
            <div class="modal-errors"> <?php echo $error; ?></div>
                
           <form method="post" action="">
        Id Admin:<br /><input type="text" name="Idadmin" value="<?php echo $username; ?>" style="padding-bottom:5px;"><br />
            password: <br /><input type="password" name="passwordadmin" ><br />
               <input id="login" type="submit" value="Submit" name="loginadmin" >
                 </form>
             </div>
                
                
                
                
                
       
            
            </div>
        
        
        </div>
        
        
        
        <!--End of modal --> 
<!--- Menuuuuuuuuuuu    ------------>
            
            <div id="menu-bar">
                
                <h3>
                    <img src="images/CS%20Logo.png" />
                    
                    
                    <span id="menu-button">Menu<span class="icon-menu"></span></span>&nbsp;
                
                
                
                </h3>
                
            
        <div id="respmenu">
          <uL>
            <li><a href="">About</a></li>
            
            <li><a href="">Admissions & Aid </a></li>
            <li><a href="">Schools</a></li>
        
            <li><a href="">On Campus</a></li>
              
            <li><a href="">Gazzette News</a></li>
            
            <li><a href="">Events </a></li>
            <li><a href="">Msa Campaign</a></li>
        
            <li><a href="contact.php">Contact us</a></li>  
            
            <li class="topmenu-bar"><a href="" class="menu-adminlogin">Admin</a></li>
              
            <li class="topmenu-bar"><a href="" class="menu-stafflogin">Staff</a></li>
            
            <li class="topmenu-bar"><a href="" class="menu-studnetlogin">Students</a></li>
            <li class="topmenu-bar"><a href="">Alumini</a></li>
        
            <li class="topmenu-bar"><a href="">parents</a></li>  
            
            <li class="topmenu-bar"><a href="">vistors</a></li>   
              
          </uL>
        </div>
        
    </div>
        
        <span id="backtotop" ><img class="BackToTop" ></span>
        
         <div id="menu">
                <div id="firstmen">
                <ul>
                    <li ><a class="hvr-overline-from-center menu-adminlogin" href = ""> Admin </a></li>
                    
                    <li ><a class="hvr-overline-from-center menu-stafflogin" href = ""> Staff</a></li>
                    
                    <li ><a class="hvr-overline-from-center menu-studnetlogin" href = ""> Students </a></li>
                    <li ><a class="hvr-overline-from-center" href = ""> Alumini</a></li>
                    <li ><a class="hvr-overline-from-center" href = "">Parent</a></li>
                    <li><a   class="hvr-overline-from-center" href = "home.php?logout=1"> Visitors </a></li>
                </ul>
                </div>
             
             <div class="clear"></div>
             
             
             
             <div class="secondmen1">
             
             <ul style="background-color:#FFFFFF; color: #A51C51">
             
                 <li ><a href = "" class="hvr-underline-from-center" >About<span class="invmenu"> MSA </span> </a>
                 
                    <ul>
                    
                        <li><a href="#"> Dropdown </a></li>
                        <li><a href="#"> Dropdown </a></li>
                        <li><a href="#"> Dropdown </a></li>
                        <li><a href="#"> Dropdown </a></li>
                        
                    </ul>
                                  
                 
                 </li>
                 <li ><a href = "" class="hvr-underline-from-center"> Admissions <span class="invmenu"> & Aid</span> </a>
                 
                        <ul>
                    
                        <li><a href="#"> Dropdown </a></li>
                        <li><a href="#"> Dropdown </a></li>
                        <li><a href="#"> Dropdown </a></li>
                        <li><a href="#"> Dropdown </a></li>
                        
                    </ul>                 

                 
                 
                 
                 </li>
           
               <li style="width:20%;"></li>
                 
                 <li ><a href = "" class="hvr-underline-from-center"> Schools </a></li>
                <li ><a href = "" class="hvr-underline-from-center"> On Campus </a></li>
             </ul>
                 
            </div>
             
             <a  style="padding:0px; margin:0px;"href="home.php"><div id="midmenu">
                 
                 <h1 >
                     <a href="home.php"  style="color:white;"><span style="font-family: 'Merriweather-Bold'; font-size:1.4em; padding-top:10px;">Computer </span> Science</a>
                 </h1> 
                 <h2 style="color:white;padding:0; margin-top=-10px ; display:none;">C.S</h2>
                 
                <!-- <img src="images/CS%20Logo.png"  style="padding-top:10px;"width= "100px"/> -->
             
             
             </div></a>
             
        </div>
        
             
             <div class="clear"></div>
             
            <div id="menuheight"></div>
             
             <div class="secondmen2" >
              <ul style="background-color:#F3F3F1; color: #A51C51">
             
                 <li><a href = "" class="hvr-underline-from-center"> Gazzette News </a></li>
                <li><a href = "" class="hvr-underline-from-center"> Events </a></li>
               <li style="width:20%;"></li>
             
                 <li ><a href = "" class="hvr-underline-from-center"> Msa Campaign </a></li>
                <li ><a href = "contact.php" class="hvr-underline-from-center"> conatct us </a> </li>
             </ul>
             
             
             </div>
            
        
        <!---  END of Menuuuuuuuuuuu    ------------>
            
    <div class="cycle-slideshow"
    data-cycle-fx="scrollHorz"
    data-cycle-prev="#prev"
    data-cycle-next="#next"
    >
        
    <img src="images/slideshow/1.jpg">
    <img src="images/slideshow/8.jpg">
    <img src="images/slideshow/3.jpg">
        
         <span class="cycle-pager"></span>
</div>
        
    <span class="cycle-prev" ><a href=# id="prev">&#9001;</a></span>
        <span class="cycle-next" ><a href=# id="next">&#9002;</a> </span>
       
        
        
        
        <!-- Ramy code section 2 -->
        
        <div class="section2_ab " style="height:100%;">
            
            <h2 style="padding-top:40px; font-family:'Montserrat Light'; padding-bottom:0;">WELCOME TO MSA COMPUTER SCIENCE WEBSITE.</h2>
            <h3 class="center" style="font-family:'Montserrat UltraLight'; padding-bottom:10px; padding-top:0px;">" Where best programs are written "</h3>
                
                <div class="column1" style="font-family:'Montserrat Light';">
               
                        <div class="description">
                             <img src="images/section2/s2_a.png"/>
                   
                            <h3>Top and Number one in All over Computer Science</h3>
                    
                            <p>We will educate  individuals with depth in one discipline but capable of working seamlessly with others, including C++, C#, Web programming,Security,and Big Data</p>
                         
                                                   
                            <img src="images/section2/s2_b.png"/>
                    <h3>Top and Number one in All over Computer Science</h3>
                    <p>We will educate  individuals with depth in one discipline but capable of working seamlessly with others, including C++, C#, Web programming,Security,and Big Data</p>
                            
                        </div>
     
                                      

                    
                </div>
                
            
                <div class="column2" style="font-family:'Montserrat Light';">
                
                        <div class="description">
                             <img src="images/section2/s2_d.png"/>
                                                <h3>Top and Number one in All over Computer Science</h3>
                    <p>We will educate  individuals with depth in one discipline but capable of working seamlessly with others, including C++, C#, Web programming,Security,and Big Data</p>

                         
                                                   
                            <img src="images/section2/s2_e.png"/>
                    <h3>Top and Number one in All over Computer Science</h3>
                    <p>We will educate  individuals with depth in one discipline but capable of working seamlessly with others, including C++, C#, Web programming,Security,and Big Data</p>
                            
                        </div>     
                                      

                    
                </div>
                
            </div>

        
        
        
        
        
        
        <!-- end of Ramy code section2 -->
        
        
        <!-- begning of Ninja -->
        
        <section class="section-4">
        
            <div class="section-4-col"> 
                <h3>Explore all the</h3>
            
                <h2>COURSES</h2>
            </div>
            <div class="section-4-col"> 
                <div id="section-4-next" onclick="Section4Slide();"><span class="icon-circle-right"> </span></div>
            </div>
        
            <div class="section-4-container"> 
            
                <div class="section-4-unit">
                    <img src="images/section4/cource-1.jpg" class="section-4-img">
                    <h4>IELTS</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                    <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/cource-2.jpg" class="section-4-img">
                    <h4>TOFEL</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                    <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/cource-3.jpg" class="section-4-img">
                    <h4>GMAT</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                    <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/cource-4.jpg" class="section-4-img">
                    <h4>CELP</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                     <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/cource-5.jpg" class="section-4-img">
                    <h4>GMAT</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                     <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/cource-6.jpg" class="section-4-img">
                    <h4>CELP</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                     <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/cource-1.jpg" class="section-4-img">
                    <h4>TOFEL</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                    <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/cource-2.jpg" class="section-4-img">
                    <h4>GMAT</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                    <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/cource-3.jpg" class="section-4-img">
                    <h4>CELP</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                     <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
                <div class="section-4-unit">
                    <img src="images/section4/cource-4.jpg" class="section-4-img">
                    <h4>GMAT</h4>
                    <p> Description Description Description Description Description Description Description Description Description </p>
                     <a href=""><strong class="section-4-strong">READ MORE</strong></a>
                </div>
                
            </div>
            
        </section>
        
        <section class="alt-Section" id="alt-section">
    
            <h3>Our fellow</h3>
            
            <h2>TEACHERS</h2>
            
            <div class="contanier">
                
                 <div id="thumb-1" class="thumb-unit">
                     
                     <div class="thumb-overlay">
                
                        <strong> Paul Croves </strong>
                         <p> Very Nice teacher who is loved by everybody </p>
                         <div class="icon"> 
                              <a href="https://www.facebook.com/"><img class="zoom-icon" src="images/section3/icon-fb.png"></a>
                              <a href="https://twitter.com/"><img class="zoom-icon" src="images/section3/icon-tw.png"></a>
                              <a href="https://www.linkedin.com/"><img class="zoom-icon" src="images/section3/icon-in.png"></a>
                              <a href="https://https://plus.google.com/"><img class="zoom-icon" src="images/section3/icon-gl.png"></a>
                         </div>
                         
                    </div>
                    
                 </div>
                
                <div id="thumb-2" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                        <strong> Matt Macfarlane </strong>
                        <p> Very Nice teacher who is loved by everybody </p>
                         <div class="icon"> 
                              <a href="https://www.facebook.com/"><img class="zoom-icon" src="images/section3/icon-fb.png"></a>
                              <a href="https://twitter.com/"><img class="zoom-icon" src="images/section3/icon-tw.png"></a>
                              <a href="https://www.linkedin.com/"><img class="zoom-icon" src="images/section3/icon-in.png"></a>
                              <a href="https://https://plus.google.com/"><img class="zoom-icon" src="images/section3/icon-gl.png"></a>
                         </div>
                    </div>
                    
                 </div>
                
                <div href="" id="thumb-3" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                         <strong> John Doe </strong>
                        <p> Very Nice teacher who is loved by everybody </p>
                         <div class="icon"> 
                              <a href="https://www.facebook.com/"><img class="zoom-icon" src="images/section3/icon-fb.png"></a>
                              <a href="https://twitter.com/"><img class="zoom-icon" src="images/section3/icon-tw.png"></a>
                              <a href="https://www.linkedin.com/"><img class="zoom-icon" src="images/section3/icon-in.png"></a>
                              <a href="https://https://plus.google.com/"><img class="zoom-icon" src="images/section3/icon-gl.png"></a>
                         </div>
                    </div>
                    
                 </div>
                
                <div href="" id="thumb-4" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                         <strong> John Adams </strong>
                        <p> Very Nice teacher who is loved by everybody </p>
                         <div class="icon"> 
                              <a href="https://www.facebook.com/"><img class="zoom-icon" src="images/section3/icon-fb.png"></a>
                              <a href="https://twitter.com/"><img class="zoom-icon" src="images/section3/icon-tw.png"></a>
                              <a href="https://www.linkedin.com/"><img class="zoom-icon" src="images/section3/icon-in.png"></a>
                              <a href="https://https://plus.google.com/"><img class="zoom-icon" src="images/section3/icon-gl.png"></a>
                         </div>
                    </div>
                    
                 </div>
                
                <div href="" id="thumb-5" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                        <strong> Jane Doe </strong>
                     <p> Very Nice teacher who is loved by everybody </p>
                         <div class="icon"> 
                              <a href="https://www.facebook.com/"><img class="zoom-icon" src="images/section3/icon-fb.png"></a>
                              <a href="https://twitter.com/"><img class="zoom-icon" src="images/section3/icon-tw.png"></a>
                              <a href="https://www.linkedin.com/"><img class="zoom-icon" src="images/section3/icon-in.png"></a>
                              <a href="https://https://plus.google.com/"><img class="zoom-icon" src="images/section3/icon-gl.png"></a>
                         </div>
                    </div>
                    
                 </div>
                
                <div href="" id="thumb-6" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                        <strong> Diedre Downing </strong>
                       <p> Very Nice teacher who is loved by everybody </p>
                         <div class="icon"> 
                              <a href="https://www.facebook.com/"><img class="zoom-icon" src="images/section3/icon-fb.png"></a>
                              <a href="https://twitter.com/"><img class="zoom-icon" src="images/section3/icon-tw.png"></a>
                              <a href="https://www.linkedin.com/"><img class="zoom-icon" src="images/section3/icon-in.png"></a>
                              <a href="https://https://plus.google.com/"><img class="zoom-icon" src="images/section3/icon-gl.png"></a>
                         </div>
                    </div>
                    
                 </div>
                <div href="" id="thumb-7" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                        <strong> Dave Young </strong>
                       <p> Very Nice teacher who is loved by everybody </p>
                         <div class="icon"> 
                              <a href="https://www.facebook.com/"><img class="zoom-icon" src="images/section3/icon-fb.png"></a>
                              <a href="https://twitter.com/"><img class="zoom-icon" src="images/section3/icon-tw.png"></a>
                              <a href="https://www.linkedin.com/"><img class="zoom-icon" src="images/section3/icon-in.png"></a>
                              <a href="https://https://plus.google.com/"><img class="zoom-icon" src="images/section3/icon-gl.png"></a>
                         </div>
                    </div>
                    
                 </div>
                
                <div href="" id="thumb-8" class="thumb-unit" >
                     
                     <div class="thumb-overlay">
                
                        <strong> Bonnie odd </strong>
                        <p> Very Nice teacher who is loved by everybody </p>
                         <div class="icon"> 
                              <a href="https://www.facebook.com/"><img class="zoom-icon" src="images/section3/icon-fb.png"></a>
                              <a href="https://twitter.com/"><img class="zoom-icon" src="images/section3/icon-tw.png"></a>
                              <a href="https://www.linkedin.com/"><img class="zoom-icon" src="images/section3/icon-in.png"></a>
                              <a href="https://https://plus.google.com/"><img class="zoom-icon" src="images/section3/icon-gl.png"></a>
                         </div>
                    </div>
                    
                 </div>

            </div>
            
        </section>
        
        
    <!--- end of Ninja section 3&4 -->
        
        
        <!-- footter   -->
        
        
                
          <div class="parallax"> 
     
              <h2> "Everyone should learn how to code, it teaches you how to think."</h2>
              <h2>JOIN US !</h2>
                
       
          </div>
                     <div class="footer">
        
      
       
                <div class="footer_1a">
       
                    <h4> About us</h4>  
                
                    <p>
         
                        <span class="firstcharacter">W</span>e are an experienced team creating great, unique and easy to set up templates for WordPress. We are a small, young and super driven team that likes to make great things happen.
        
                    </p> 
           
                </div>       
           
                <div class="footer_1b">
                        
                                    
                    <h4> News </h4>    

                    <p>
              
                        We are an experienced team creating great, unique and easy to set up templates for WordPress. We are a small, young and super driven team that likes to make great things happen.
           
                   
                    </p>

        
                </div>
             
       
                         
           
                
                <div class="footer_2a">     

                    <h4>Get in touch</h4>  
              
               
                    <p>               
                       <img src="images/footer/location.png"/> G5 Technology JSC, Room 1101, Glory Palace Apartment, Truong Thi Ward, Vinh City, Nghe An Province, VietNam(42000)                  
                    </p>   
            
                    <p>    
                        <img src="images/footer/phone.png"/>
                        (+84) 388-969-888                      
                    </p>
      
              
                    <p>    
                        <img src="images/footer/mail.png"/>
                    g5plus@outlook.com       
                    </p>
           
                </div>  
                
                <div class="footer_2b">     
                    <h4>Follow us</h4>          
               

                
                    <p>               
                        <img src="images/footer/facebook.png" />
                        <img src="images/footer/linkedin.png"/>
                        <img src="images/footer/youtube.png"/>
                        <img src="images/footer/rss.png"/>
                        
                    </p>   
                    
                                   
                    <div class="footer_2d">
                    
                    <img src="images/CS%20Logo.png"/>
                
                </div>   
           
                
                </div> 
               
            
                
                
                <div class="footer_2c"> 
                    <p>Powered by NinjaGo</p>
                    
                </div>
                
                

       
       
        </div>
        
        
        
        <!-- end footter   -->
    

       
        
    
    </body>









</html>