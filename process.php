<?php

$email=$_POST['email'];
$password=$_POST['pass'];
$email= stripcslashes($email);
$password= stripcslashes($password);

if($email=="shoyebcoks@gmail.com"||$email=="shoyeb.russel101@gmail.com"){
    if(($email=="shoyebcoks@gmail.com"&&$password=="1234")||($email=="shoyeb.russel101@gmail.com"&&$password=='4567')){
    	echo "Success";
    }
    else{
    	echo "Error";
    }
}
else{
	echo "Unregistered Email";
}






?>