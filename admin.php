<?php

session_start();

if(isset($_SESSION['id']))
{
    $xml = simplexml_load_file('xml/admin.xml');
     $username = $_SESSION['id'];
    $e=0;
        foreach ($xml->admin as $i)
        {
            if($i->title == $username)
            {
                $e=1;
            }
            
        }
    
    if($e==0)
       {
           
    header('location:home.php');   
       }
    
}
else
{
     header('location:home.php');   
}

include "conections.php";


?>
<!Doctype html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="http://176.32.230.53/webphptest.com/project/backup13/css/admin.css"> 
        <link href="css/fonts.css" type="text/css" rel="stylesheet" />  
        <script type="text/javascript" src="javascript/jquery.js" ></script>
  

<title> DashBoard </title>
    
    <div class="dshb-header">
        <h1> Welcome Adminstrator.... READY to enter data</h1>
    </div>
</head>

    <body> 
    
        <div class="data_entry">
     
            
            <div style=" width: 22%; height:100%;
    float: left;"><h2>Add Members : </h2></div>
            <div class="student_data">
                <form method="post" id="data1" action="">
                <img src="http://176.32.230.53/webphptest.com/project/backup13/images/admin/cap.png"><h2>Students</h2>
                <p>Name:</p>
                <input type="text" name="nameup" placeholder="Please Enter Student Name"><br>
                <p>Course:</p>
                    
                      <select class="target" name="course1up">
                             <option id="none" selected>Choose Course</option>
                        </select> 
                    
                    <select class="target" name="course2up">
                             <option id="none" selected>Choose Course</option>
                        </select> 
                    <select class="target" name="course3up">
                             <option id="none" selected>Choose Course</option>
                        </select> 
                    <select class="target" name="course4up">
                             <option id="none" selected>Choose Course</option>
                        </select> 
                    <select class="target" name="course5up">
                             <option id="none" selected>Choose Course</option>
                        </select> 
                    <select class="target" name="course6up">
                             <option id="none" selected>Choose Course</option>
                        </select> 
                    
                    
                    
               <!-- <input type="text" name="course1up" placeholder="Please Enter Course 1"><br><br> 
                   
                    <span class="up1"></span> -->
                
                <input  id="signup" type="submit" value="Create" name="signup_std" >
                </form>
            
             <!--<button id="addc" onclick="return false"> + </button> -->
            </div>
            
            <div class="staff_data">
                <form method="post" action="">
                <img src="http://176.32.230.53/webphptest.com/project/backup13/images/admin/Employericon.png"><h2>Staffs</h2>
                <p>Name:</p>
                <input type="text" name="nameup" placeholder="Please Enter Staff Name"><br>
                <p>Description:</p>
                <input type="text" name="desup" placeholder="Please Enter Staff Desc."><br>
                <!--<p>Image</p>
                <input type="text" name="nameup" placeholder="Please Enter Staff Name"><br>-->
                <!--<p>ID:</p>
                <input type="number" name="Idup" placeholder="Please Enter Staff ID" <br><br>
                <p>Password</p>
                <input type="password" name="passwordup" placeholder="Please Enter Staff Password"><br><br>-->
                
                <input id="signup" type="submit" value="Create" name="signup_stf" >
                </form>
            
            </div>
        
        
        </div>
        
    <script type="text/javascript">
        
         var xhttp = new XMLHttpRequest();
         xhttp.open("GET", "xml/Courses.xml", false);
         xhttp.send();
         var lis;

            //alert(std);
            
        var students = xhttp.responseXML.getElementsByTagName("Course");
        
         for(var j = 0 ; j < students.length ; j++)
        {
            var course = students[j].getElementsByTagName("CourseCode")[0].firstChild.nodeValue;
            lis = '<option id="' + course + '">' + course + '</option>';
            
            document.getElementsByClassName("target")[0].innerHTML += lis
            document.getElementsByClassName("target")[1].innerHTML += lis;
            document.getElementsByClassName("target")[2].innerHTML += lis;
            document.getElementsByClassName("target")[3].innerHTML += lis;
            document.getElementsByClassName("target")[4].innerHTML += lis;
            document.getElementsByClassName("target")[5].innerHTML += lis;

        }
   
   $(document).ready(function() {
       
       var l=2;
   
$("#addc").click(function() {
    
    if(l<7)
    {
    
   // var per = "#course"+l-1+"up";
    
    //$(per).append(
    
    $('<input>', {
    type: 'text',
    name: "course"+l+"up",
    placeholder: "Please Enter Course " + l,
}).appendTo($('.up1'));
    
    
    
    l++;
        
    }
});


   

});

    </script>
    </body>
</html>