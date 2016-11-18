<?php
$action=$_REQUEST['submit'];
if ($action=="")    /* display the contact form */
    {

    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"contact.html\">the form</a> again.";
        }
    else{       
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("obiorahm@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?>