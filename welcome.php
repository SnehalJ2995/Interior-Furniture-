<?php
$host="localhost";
$user="root";
$password="";
$db="abc";

mysqli_connect($host,$user,$password,$db);


if(isset($_POST['uname'])){
    
    $uname=$_POST['uname'];
    $password=$_POST['psw'];
    
    $sql="select * from user where username='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>