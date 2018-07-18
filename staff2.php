<?php

$xml = new DOMDocument('1.0', 'utf-8');
if(isset($_POST['signup_std']))
{ 
    $xml->load("xml/notifications.xml");
   
    $alert=$_POST['alert'];;
    $notify=$_POST['notify'];
    
    $root = $xml->firstChild;
    
       
    if($alert!=null||$alert!="")
    {
    $salert=$xml->createElement('alert' , $alert);
    $root->appendChild($salert);

    }
    
    if($notify!=null||$notify!="")
    {
    $snotify=$xml->createElement('notify' , $notify);
    $root->appendChild($snotify);
    }
    
    $xml->save("xml/notifications.xml");
    
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
        <h1> Welcome.... READY to notify students?</h1>
    </div>
</head>

    <body> 
    
        <div class="data_entry">
     
            
            <div style=" width: 22%; height:100%;
    float: left;"><h2>Add Notification or alert  </h2></div>

            
            <div class="staff_data">
                <form method="post" action="">
                <img src="http://176.32.230.53/webphptest.com/project/backup13/images/admin/Employericon.png"><h2>Staff</h2>
                <p>Notification:</p>
                <input type="text" name="notify" placeholder="Please Add Notification"><br>
                <p>Alert:</p>
                <input type="text" name="alert" placeholder="Please Add Alert"><br>

                
                <input id="signup" type="submit" value="Post" name="signup_std" >
                </form>
            
            </div>
            
            <!--<div class="staff_data">
                <form method="post" action="">
                <img src="http://176.32.230.53/webphptest.com/project/backup13/images/admin/Employericon.png"><h2>Staff</h2>
                <p>Notification:</p>
                <input type="text" name="notifyName" placeholder="Please Add Notification"><br>
                <p>Alert:</p>
                <input type="text" name="alert" placeholder="Please Add Alert"><br>

                
                <input id="signup" type="submit" value="Post" name="signup_std" >
                </form>
            
            </div>-->
        
        
        </div>
        

    </body>
</html>