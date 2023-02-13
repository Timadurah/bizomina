<?php
require 'robot.php';
@import('cord_sql');


if (empty($_POST['name'])) {
    html("Name Box is empty");
}
elseif (empty($_POST['email'])) {
    html("Email Box is empty");
    }
    elseif (empty($_POST['subject'])) {
        html("Subject your content");
        }elseif (empty($_POST['message'])) {
        html("Please Tell us what you want");
        }
else{

$name =  $_POST['name'];
$email = lcfirst($_POST['email']);
$message = $_POST['message'];
$subject = $_POST['subject'];
$DB = new cord_sql;
$DB->value =  array("".$name."","".$email."","".$message."","".$subject."");
$DB->runner = "INSERT INTO `mail_us`(`name`, `email`, `message`, `subject`) VALUES (?,?,?,?)";
if ($DB->insert()) {
    echo 2;
     } 
     else{
        $DB->insert();
         }
}






?>