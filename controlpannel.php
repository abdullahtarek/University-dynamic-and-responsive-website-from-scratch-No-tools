<?php

   session_start();
    
    $kk = $_SESSION['id'];
?>


<?php 


     $r = "<script type='text/javascript'> document.write(55); </script> ";
        

?>

<html>
    
    <head>
    
        <title>cPanel</title>
        <link href="css/fonts.css" type="text/css" rel="stylesheet" /> 
        <script type="text/javascript" src="javascript/jquery.js" ></script>
        <script type="text/javascript" src="javascript/menu.js" ></script>
        <link href="css/menu.css" type="text/css" rel="stylesheet" />   
        <link href="css/footer.css" type="text/css" rel="stylesheet" /> 
        <link href="css/controlpannel.css" type="text/css" rel="stylesheet" /> 
        
        
    </head>


<body>
            <?php echo $st; ?>
        
        
        
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
        Id Admin:<br /> <input type="text" name="Idadmin" value="<?php echo $username; ?>" style="padding-bottom:5px;"><br />
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
        
            <li><a href="">Contact us</a></li>  
            
            <li class="topmenu-bar"><a href="" class="menu-adminlogin">Admin</a></li>
              
            <li class="topmenu-bar"><a href="" class="menu-stafflogin">Staff</a></li>
            
            <li class="topmenu-bar"><a href="" class="menu-studnetlogin">Students</a></li>
            <li class="topmenu-bar"><a href="">Alumini</a></li>
        
            <li class="topmenu-bar"><a href="">parents</a></li>  
            
            <li class="topmenu-bar"><a href="">vistors</a></li>   
              
          </uL>
        </div>
        
    </div>
        
        <span id="backtotop" ><h1><span class="icon-circle-up"></span></h1></span>
         <div id="menu">
                <div id="firstmen">
                <ul>
                    <li ><a class="hvr-overline-from-center menu-adminlogin" href = ""> Admin </a></li>
                    
                    <li ><a class="hvr-overline-from-center menu-stafflogin" href = ""> Staff</a></li>
                    
                    <li ><a class="hvr-overline-from-center menu-studnetlogin" href = ""> Students </a></li>
                    <li ><a class="hvr-overline-from-center" href = ""> Alumini</a></li>
                    <li ><a class="hvr-overline-from-center" href = "">Parent</a></li>
                    <li><a   class="hvr-overline-from-center" href = "home.php?logout=1"> Log out </a></li>
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
                 <li ><a href = "" class="hvr-underline-from-center"> My Courses </a>
                 
                        <ul id="CoursesDropdown">
                    
                        
                    </ul>                 

                 
                 
                 
                 </li>
           
               <li style="width:20%;"></li>
                 
                 <li ><a href = "" class="hvr-underline-from-center"> Schools </a></li>
                <li ><a href = "" class="hvr-underline-from-center"> On Campus </a></li>
             </ul>
                 
            </div>
             
             <div id="midmenu">
                <h1 >
                     <a href="home.php"  style="color:white;"><span style="font-family: 'Merriweather-Bold'; font-size:1.4em; padding-top:10px;">Computer </span> Science</a>
                 </h1> 
                 <h2 style="color:white;padding:0; margin-top=-10px ; display:none;">C.S</h2>
                 
                <!-- <img src="images/CS%20Logo.png"  style="padding-top:10px;"width= "100px"/> -->
              
             </div>
             
        </div>
        
             
             <div class="clear"></div>
             
            <div id="menuheight"></div>
             
             <div class="secondmen2" >
              <ul style="background-color:#F3F3F1; color: #A51C51">
             
                 <li><a href = "" class="hvr-underline-from-center"> Gazzette News </a></li>
                <li><a href = "" class="hvr-underline-from-center"> Events </a></li>
               <li style="width:20%;"></li>
             
                 <li ><a href = "" class="hvr-underline-from-center"> Msa Campaign </a></li>
                <li ><a href = "" class="hvr-underline-from-center"> conatct us </a> </li>
             </ul>
             
             
             </div>
            
        
        <!---  END of Menuuuuuuuuuuu    ------------>
    
    <!--- hading picture -->
        <div class="firstpic"><!--<img class="imgMSA" src="images/msa-campus.jpg" />--></div>
    <!--- end -->
    
    
    
 
    <div class="Courses-Container">
        
        
        <h2 id="nom" style="font-family:'Montserrat Light';">Welcome </h2>
    
        <div  id="CoursesSelectionId" class= "CoursesSelection"> 
        
            
            <form action="Course.php" method="post">
                <div class="IntensivePorpuses"><input type="text" name="textc" id="textc"/></div>
                <div class="Course1"> <input type="submit" onclick="MyZeft(this);" /> </div>
                <div class="Course2"> <input type="submit" onclick="MyZeft(this);" /> </div>
                <div class="Course1"> <input type="submit" onclick="MyZeft(this);" /> </div>
                <div id="NewLine" class="clear"> </div>
                <div class="Course2"> <input type="submit" onclick="MyZeft(this);" /> </div>
                <div class="Course1"> <input type="submit" onclick="MyZeft(this);" /> </div>
                <div class="Course2"> <input type="submit" onclick="MyZeft(this);" /> </div>
            </form>
            
        </div>
        
<div style="overflow-x:auto;">

    
  <table id="tables">
    <tr>
      <th>Time</th>
      <th>Saturday</th>
      <th>Sunday</th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>wedesday</th>
      <th>Thusrday</th>
    </tr>
    <tr>
      <td>08:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    <td></td>
    </tr>
    <tr>
      <td>09:30</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
        <td></td>

    </tr>
    <tr>
      <td>11:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
        <td></td>
    </tr>
      
      <tr>
      <td>12:30</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    <td></td>
    </tr>
    <tr>
      <td>02:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>  
  </table>
</div>
    <div id="hmm">
        
        <h3>News</h3>
        <div id="news">
            
            
            
        </div>
    </div>
        
        
        <div class="hrr">

                <h3>Notifications</h3>
                `    
                    <hr/>

                <div id="notify">
                </div>

             </div>
        </div>
        
    
    
    
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
      
        <!-- footter   -->
        
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
    
    
    
    
    
    
    <script type="text/javascript">
        
        
        
        
        function MyZeft(button){
            
            var val = button.getAttribute("value");
            //alert(val);
            document.getElementById("textc").setAttribute("value",val);
        };
        
        
        //notifyyyyyyyyyyyyyyyyyyyyyyy
        
        var xnot= new XMLHttpRequest();
        xnot.open("GET", "xml/notifications.xml", false);
        xnot.send();
        
        
        var notify = xnot.responseXML.firstChild.childNodes;
        var para;
        for(var i = notify.length-1 ; i>-1 ; i--)
        {
               para = "<p ";
            
                if(notify[i].nodeName == "alert")
                {
                    
                    para += "class='rr' >";
                    
                }
                else
                {
                    para += "class='gg' >";
                }
            
               para += notify[i].firstChild.nodeValue;
            para += "</p>";
               
               document.getElementById("notify").innerHTML+=para;
            
            
        }
        
        
     
        
        
        //end notifyyyyyyyyyyyyyyyyyyyyyy
        
        
        
        
        
        // Newssssssssssssssssssssssssssssss
        
        
            var xnot= new XMLHttpRequest();
        xnot.open("GET", "xml/news.xml", false);
        xnot.send();
        
        
        var notify = xnot.responseXML.firstChild.childNodes;
        var para;
        for(var i = notify.length-1 ; i>-1 ; i--)
        {
               para = "<p> ";
            
               para += notify[i].firstChild.nodeValue;
            para += "</p>";
               
               document.getElementById("news").innerHTML+=para;
            
        }
        
        
        
        
        
        
        
        
        
        
        //END of newssssssssssss

        
    
        var id =<?php echo $kk; ?>;
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "xml/students.xml", false);
        xhttp.send();
        
        var xmlc = new XMLHttpRequest();
        xmlc.open("GET", "xml/Courses.xml", false);
        xmlc.send();
        
        
        var lis = "";
       
        //alert(lis);
        
        var student = xhttp.responseXML.getElementsByTagName("student");
        var ccourses = xmlc.responseXML.getElementsByTagName("Course");
        var CoursesSelection = document.getElementById("CoursesSelectionId");
        var CoursesSelectionDivs = CoursesSelection.getElementsByTagName("input");
       
    
        for(var i = 0 ; i< student.length ; i++)
        {
            if(id == student[i].getElementsByTagName("id")[0].firstChild.nodeValue)
            {
               document.getElementById("nom").innerHTML += student[i].getElementsByTagName("name")[0].firstChild.nodeValue;
                var s = i;
            }
        }

        
        for(var j = 0 ; j < student[s].getElementsByTagName("CurrentCourse").length ; j++)
        {
             //alert(lis);
            var course = student[s].getElementsByTagName("CurrentCourse")[j].firstChild.nodeValue;
            lis += '<li><a href="Course.php?downcourse=' + course + '">' + course + '</a></li>';
                
             CoursesSelectionDivs[j+1].setAttribute("value",course);

            for(var z = 0 ; z < ccourses.length ;z++)
            {
                
                if(course == ccourses[z].getElementsByTagName("CourseCode")[0].firstChild.nodeValue)
                {
                    var date1Day = ccourses[z].getElementsByTagName("Day")[0].firstChild.nodeValue;
                    var date2Day = ccourses[z].getElementsByTagName("Day")[1].firstChild.nodeValue;
                    
                    var date1Time = ccourses[z].getElementsByTagName("Time")[0].firstChild.nodeValue;
                    var date2Time = ccourses[z].getElementsByTagName("Time")[1].firstChild.nodeValue;
                    
                    var table = document.getElementById("tables");
                    var rows= table.getElementsByTagName("tr");
                    
                    var r =((date1Time-8)/1.5)+1;
                    var r2 =((date2Time-8)/1.5)+1;
                   
                    var col =rows[r].getElementsByTagName("td");
                    var col2 =rows[r2].getElementsByTagName("td");
                    
                    col[date1Day].innerHTML = course;
                    col2[date2Day].innerHTML = course;
                    
                }
            }   
        }
        
        document.getElementById("CoursesDropdown").innerHTML += lis;
        

        
     /*$('.Course1').click(function() {
         
         var hhh = $(this).find("h3").html();
         
         
         alert(hhh);
        
         window.location.href = 'Course.php';
         return false;
        
     }); */
        
        /////////////////////
        
       /* var x =9;
        $('.Course1').click(function() {
        
            x = $(this).html();
            window.location.href = 'Course.php';
          
            
        });*/
        
        
        /////////////////
    /* $('.Course2').click(function() {
         window.location.href = 'Course.php';
         return false;
     });*/
        
        
    </script>

        
       
        
        
    
</body>



</html>