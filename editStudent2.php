<?php
    
    session_start();

    $cc;
    $xml = simplexml_load_file('xml/students.xml');

    if(isset($_SESSION['k']))
    {
        
        $username = $_SESSION['k'];
        $e=0;
        
        foreach ($xml->student as $i)
        {
            if($i->id == $username)
            {
               break;
            }
        
            $cc++;
        }
    }


    if(isset($_POST['ss']))
    {   
         if($_POST['stdpass']!="")
        {
            $xml->student[$cc]->password = $_POST['stdpass'];
        }
        
        if($_POST['select_catalog'] != "Choose Course")
        {   
            $co = $_POST['select_catalog'];   
            $cs =0;
            
            foreach ($xml->student[$cc]->CurrentCourses->CurrentCourse as $i)
             {
                 
                 
                 if($i == $co)
                 {
                   $xml->student[$cc]->CurrentCourses->CurrentCourse[$cs]= $_POST['replace']; 
                 }
                 
                 $cs++;
             }
            
            
            
        }
            
        
        
        
    }



    
 $xml->asXML('xml/students.xml');


?>

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
                    <p>New Password: </p>
                         <input type="text" id="StPS" name = 'stdpass'; placeholder="Please Enter The New Password"><br><br>
                         <p>Remove Course: </p>
                         <select id="StSelect" name="select_catalog">
                             <option id="none" selected>Choose Course</option>
                         </select>
                    
                        <input type="text" name="replace" placeholder="enter the course here" >

                            <input type="submit" value="Submit" name="ss" >      
                    </form>
        
        </div>
        
        <script type="text/javascript">
            
            var s;
            
            var std = <?php echo $_SESSION['k'] ?>

            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", "xml/students.xml", false);
            xhttp.send();
            
            //alert(std);
            
            var students = xhttp.responseXML.getElementsByTagName("student");
            
                if(std)
                {
                    
                    for(var i = 0 ; i< students.length ; i++)
                    {
                        if(std == students[i].getElementsByTagName("id")[0].firstChild.nodeValue)
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

