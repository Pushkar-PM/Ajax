<?php 
    require_once('db.php');

    $usernam=$_POST['username'];
    $name=$_POST['name'];
    $password=$_POST['password1'];
    $password1=$_POST['password2'];
    $college=$_POST['college'];
    foreach ($username as $name){
        if(strcasecmp($name,$usernam)==0){
            echo "same username";
            return true;
        }
    }
    if($username==""||$name==""||$password==""||$password1==""||$college==""){
        echo "Please fill all the fields properly";
        return true;
    }
    else if(strcmp($password,$password1)!=0){
        echo "Password dont match";
        return true;
    }
    else{
        echo "Successfully submitted";
    }

 ?>