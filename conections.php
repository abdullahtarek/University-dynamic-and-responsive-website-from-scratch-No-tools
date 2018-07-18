<?php

$xml = new DOMDocument('1.0', 'utf-8');


if(isset($_POST['login']))
{
       $username = $_POST['Id'];
       $password = $_POST['password'];
    
       $xml = simplexml_load_file('xml/students.xml');
    
        $error.="<p>";
    $e=0;
       foreach ($xml->student as $i)
        {
            if($i->id == $username)
            {
                $e=1;
                if($password == $i->password)
                {
                    $var = $i->id;
                    $_SESSION['id']= $username;
                    
                header("Location:controlpannel.php");
                }
                else
                {
                   $error.=" Password is wrong <br \>";             
                    $e=2;
                }
                break;
            }
        }
        
    if($e ==0)
    {
        $error.="this ID does not exsist"; 
        $username="";

    }
    if($e!=1)
    {
        $st = '<style type="text/css">
        .modal-overlay {
            display: block;
        }
        .modal {
            display: block;
        }
        #studentmodal {
            display:block;
        }
        </style>';   
    }
    
     $error.="</p>";
    
}



if(isset($_POST['loginstaff']))
{
       $username = $_POST['Idstaff'];
       $password = $_POST['passwordstaff'];
    
       $xml = simplexml_load_file('xml/staff.xml');
    
        $error.="<p>";
    $e=0;
       foreach ($xml->teacher as $i)
        {
            if($i->title == $username)
            {
                $e=1;
                if($password == $i->password)
                {
                    $var = $i->id;
                    $_SESSION['id']= $username;
                
                  header("Location:staff2.php");
                }
                else
                {
                   $error.=" Password is wrong <br \>";             
                    $e=2;
                }
                break;
            }
        }
        
    if($e ==0)
    {
        $error.="this ID does not exsist"; 
        $username="";

    }
    if($e!=1)
    {
        $st = '<style type="text/css">
        .modal-overlay {
            display: block;
        }
        .modal {
            display: block;
        }
        
         #staffmodal {
         
            display:block;
         
         }
        </style>';   
    }
    
     $error.="</p>";
    
}

if(isset($_POST['loginadmin']))
{
       $username = $_POST['Idadmin'];
       $password = $_POST['passwordadmin'];
    
       $xml = simplexml_load_file('xml/admin.xml');
    
        $error.="<p>";
    $e=0;
       foreach ($xml->admin as $i)
        {
            if($i->title == $username)
            {
                $e=1;
                if($password == $i->password)
                {
                    $var = $i->id;
                    $_SESSION['id']= $username;
                
                  header("Location:admin.php");
                }
                else
                {
                   $error.=" Password is wrong <br \>";             
                    $e=2;
                }
                break;
            }
        }
        
    if($e ==0)
    {
        $error.="this ID does not exsist"; 
        $username="";

    }
    if($e!=1)
    {
        $st = '<style type="text/css">
        .modal-overlay {
            display: block;
        }
        .modal {
            display: block;
        }
        
         #adminmodal {
         
            display:block;
         
         }
        </style>';   
    }
    
     $error.="</p>";
    
}














if(isset($_POST['signup_std']))
{
    
    
    $xml->load("xml/students.xml");
   
    $name = $_POST['nameup'];
    $password = "Msa1234";
    $c_password = $_POST['c_password'];
    $course1= $_POST['course1up'];
    
    $course2= $_POST['course2up'];
    $course3= $_POST['course3up'];
    $course4= $_POST['course4up'];
    $course5= $_POST['course5up'];
    $course6= $_POST['course6up'];
    
    

    
    
    
    $root = $xml->firstChild;
    
    $xml2= simplexml_load_file("xml/students.xml");
    $count=count($xml2);
    $id =  $xml2->student[$count-1]->id+1;
    
    
    

    $element= $xml->createElement('student');
    
    $sid = $xml->createElement('id' , $id);
    $sname = $xml->createElement('name' , $name);
    $spassword = $xml->createElement('password' , $password);
    $scourses=$xml->createElement('CurrentCourses');
    if($course1!=null||$course1!="")
    {
    $scourse1=$xml->createElement('CurrentCourse' , $course1);
    $scourses->appendChild($scourse1);
    }
    if($course2!=null||$course2!="")
    {
        $scourse2=$xml->createElement('CurrentCourse' , $course2);
        $scourses->appendChild($scourse2);
    }
        
    
    if($course3!=null||$course3!="")
    {
        $scourse3=$xml->createElement('CurrentCourse' , $course3);
        $scourses->appendChild($scourse3);
    }
    
    if($course4!=null||$course4!="")
    {
        $scourse4=$xml->createElement('CurrentCourse' , $course4);
        $scourses->appendChild($scourse4);
    }
    
    if($course5!=null||$course5!="")
    {
        $scourse5=$xml->createElement('CurrentCourse' , $course5);
        $scourses->appendChild($scourse5);
    }
    
    if($course6!=null||$course6!="")
    {
        $scourse6=$xml->createElement('CurrentCourse' , $course6);
        $scourses->appendChild($scourse6);
    }
    
    
    
     $element->appendChild($sid);
     $element->appendChild($sname);
     $element->appendChild($spassword);   
    
    $element->appendChild($scourses);
    
    $root->appendChild($element);
    
    $xml->save("xml/students.xml");
    
}

if(isset($_POST['signup_stf']))
{
    
    
    $xml->load("xml/staff.xml");   
    $name = $_POST['nameup'];
    $password="Msa1234";
    $detail=$_POST['desup'];
    $c_password = $_POST['c_password'];
    
    
    $root = $xml->firstChild;
    
    $xml2= simplexml_load_file("xml/staff.xml");
    $count=count($xml2);
    $id =  $xml2->teacher[$count-1]->id+1;

    
    $element= $xml->createElement('teacher');
    
    $sid = $xml->createElement('id' , $id);
    $sname = $xml->createElement('title' , $name);
    $spassword = $xml->createElement('password' , $password);
    $sdetail = $xml->createElement('detail' ,$detail);
    $element->appendChild($sid);
    $element->appendChild($sname);
    $element->appendChild($sdetail);
    $element->appendChild($spassword);
    
    $root->appendChild($element);
    
    $xml->save("xml/staff.xml");
    
}



?>
