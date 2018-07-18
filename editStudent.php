<?php
session_start();

$xml = new DOMDocument('1.0', 'utf-8');


if(isset($_POST['StEdit']))
{
    $xml = simplexml_load_file('xml/students.xml');
    $username = $_POST['StID'];
    
    $count =0;
    
    foreach ($xml->student as $i)
        {
            if($i->id == $username)
            {
                $_SESSION['k']= $username;
                header("Location:editStudent2.php");
            }
        
        
        }
    
    if($count == 0 )
    {
        $err = 'student does not exsist ';  
    }
    
    $xml->asXML('xml/students.xml');
}




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
            
            <div style=" width: 22%; height:100%; float: left;"><h2>Edit Students : </h2></div>
            
            <div class="student_data">
                <form method="post">
                <img src="http://176.32.230.53/webphptest.com/project/backup13/images/admin/cap.png"><h2>Students</h2>
                <p>Student ID:</p>
                <p style="color:red"><?php echo $err ?></p>
                <input type="number" id="StID" name="StID" placeholder="Please Enter the Student ID"> <p class="StNotFound" id="StNotFound" style="color:red; font-size: 13px;">Student was not found!</p><br>
                    
               
                    
                
                
                <input  id="signup" type="submit" value="Search" name="StEdit" >
                </form>
            </div>
            
             <div class="staff_data">
                <?php echo $p ?>
                 
            </div>
            
        
        </div>
        
        <script type="text/javascript">
            
           var s;
            
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", "xml/students.xml", false);
            xhttp.send();
            var lis;
            
           var students = xhttp.responseXML.getElementsByTagName("student");
            
           function findStudent()
            {
                if(document.getElementById("StID").value)
                {
                    
                    for(var i = 0 ; i< students.length ; i++)
                    {
                        if(document.getElementById("StID").value == students[i].getElementsByTagName("id")[0].firstChild.nodeValue)
                        {
                            s = i;
                        }
                    }
                    
                    if(s)
                    {
                        for(var j = 0 ; j < students[s].getElementsByTagName("CurrentCourse").length ; j++)
                        {
                            var course = students[s].getElementsByTagName("CurrentCourse")[j].firstChild.nodeValue;
                            lis = '<option id="' + course + '">' + course + '</option>';
                            document.getElementById("StSelect").innerHTML += lis;
                            
                        }
                        
                        document.getElementById("StCaption").innerHTML = students[s].getElementsByTagName("name")[0].firstChild.nodeValue + "'s Profile";
                        document.getElementById("StEditForm").className = "";
                        document.getElementById("StNotFound").className = "StNotFound";
                    }
                    else
                    {
                        document.getElementById("StNotFound").className = "";
                    }
                }
            };
            
            
            
        

           /* function editStudent()
            {
                if(document.getElementById("StPS").value)
                {
                    alert("new pass = " + document.getElementById("StPS").value);
                    alert("old pass = " + students[s].getElementsByTagName("password")[0].firstChild.nodeValue);
                    students[s].getElementsByTagName("password")[0].firstChild.nodeValue = document.getElementById("StPS").value;
                }
            };*/
         
            
        </script>
        
    </body>
    
    
</html>
