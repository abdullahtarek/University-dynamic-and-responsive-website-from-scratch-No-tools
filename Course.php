<?php

    session_start();

    $kk = $_SESSION['id'];

    $coursename = $_SESSION['course'];

    $text = $_POST['textc'];

    if(isset($_GET['downcourse']))
    {
        $coursename = $_GET['downcourse'];
    }
    else
    {
        $coursename = "k";
    }


?>

<html>
    
    <head>
    
        <link href="css/fonts.css" type="text/css" rel="stylesheet" /> 
        <script type="text/javascript" src="javascript/jquery.js" ></script>
        <script type="text/javascript" src="javascript/menu.js" ></script>
        <link href="css/menu.css" type="text/css" rel="stylesheet" />   
        <link href="css/footer.css" type="text/css" rel="stylesheet" /> 
        <link href="css/Course.css" type="text/css" rel="stylesheet" /> 
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
           Id:<br />  <input type="number" name="Id" value="<?php echo $username; ?>" style="padding-bottom:5px;"><br />
            password: <br /><input type="password" name="password" ><br />
               <input id="login" type="submit" value="Submit" name="login" >
                 </form>
                </div>
                
                
            <div id="staffmodal">    
            <div class="modal-errors"> <?php echo $error; ?></div>
                
           <form method="post" action="">
        Id staff:<br />  <input type="text" name="Idstaff" value="<?php echo $username; ?>" style="padding-bottom:5px;"><br />
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
            
            <li><a href="controlpannel.php">control pannel </a></li>
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
                    <li><a   class="hvr-overline-from-center" href = ""> Visitors </a></li>
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
                 
               <!--  <img src="images/CS%20Logo.png"  style="padding-top:10px;"width= "100px"/> -->
            
             </div>
             
        </div>
        
             
             <div class="clear"></div>
             
            <div id="menuheight"></div>
             
             <div class="secondmen2" >
              <ul style="background-color:#F3F3F1; color: #A51C51">
             
                 <li><a href = "" class="hvr-underline-from-center"> Gazzette News </a></li>
                <li><a href = "controlpannel.php" class="hvr-underline-from-center"> control pannel  </a></li>
               <li style="width:20%;"></li>
             
                 <li ><a href = "" class="hvr-underline-from-center"> Msa Campaign </a></li>
                <li ><a href = "" class="hvr-underline-from-center"> conatct us </a> </li>
             </ul>
             
             
             </div>
            
        
        <!---  END of Menuuuuuuuuuuu    ------------>
    
     <!--- hading picture -->
        <div class="firstpic"></div>
    <!--- end -->
    
    
    <div class= "ContentContainer"> 
    
        <div id="Title"> <strong id="TitleAndCode"></strong></div>
        
        <div id="CourseDisciption">
            
            <p id="CourseDisciptionPara"></p>
            
            <div id="TeacherDisciption">
            
                <img id="TeacherImg" src="">
            
                <div class="clear"></div>
           
                <strong id="TeacherName"></strong>
            
                <div class="clear"></div>
            </div>

            <div class="clear"></div>
            
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
        
       
        var ay7ag =  CC = <?php echo json_encode($coursename); ?>;
        
        var lis = "";
        
        var CC;
        
        if(ay7ag[0] != "k")
        {
               CC = <?php echo json_encode($coursename); ?>;
        }
        else
        {
           
                CC = <?php echo json_encode($text); ?>;   
        }
        var id = <?php echo $kk; ?>;
        
        
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "xml/students.xml", false);
        xhttp.send();
        
        var xmlc = new XMLHttpRequest();
        xmlc.open("GET", "xml/Courses.xml", false);
        xmlc.send();
        
       
        var student = xhttp.responseXML.getElementsByTagName("student");
        
        for(var i = 0 ; i< student.length ; i++)
        {
            if(id == student[i].getElementsByTagName("id")[0].firstChild.nodeValue)
            {
                var s = i;
            }
        }
        
        for(var j = 0 ; j < student[s].getElementsByTagName("CurrentCourse").length ; j++)
        {
            var course = student[s].getElementsByTagName("CurrentCourse")[j].firstChild.nodeValue;
                lis += '<li><a href="Course.php?downcourse=' + course + '">' + course + '</a></li>';
            
        }
        
        document.getElementById("CoursesDropdown").innerHTML = lis;
        
        var Courses = xmlc.responseXML.getElementsByTagName("Course");
    
        for(var k = 0 ; k < Courses.length ; k++)
        {
            if(Courses[k].getElementsByTagName("CourseCode")[0].firstChild.nodeValue == CC)  
            {
                var RequiredCourse = k;    
            }
        }
        
        //alert(RequiredCourse);
        document.getElementById("CourseDisciptionPara").innerHTML = Courses[RequiredCourse].getElementsByTagName("CourseDescription")[0].firstChild.nodeValue;
        
        document.getElementById("TitleAndCode").innerHTML += Courses[RequiredCourse].getElementsByTagName("CourseTitle")[0].firstChild.nodeValue + " - " + Courses[RequiredCourse].getElementsByTagName("CourseCode")[0].firstChild.nodeValue;
        
        document.getElementById("TeacherImg").src = Courses[RequiredCourse].getElementsByTagName("image")[0].firstChild.nodeValue;
        
        document.getElementById("TeacherName").innerHTML = Courses[RequiredCourse].getElementsByTagName("Name")[0].firstChild.nodeValue;
        
        
    </script>
    
    
    
</body>
    
</html>