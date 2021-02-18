<?php
$host="localhost";
$user="root";
$password="";
$db="abc";

$link = mysqli_connect($host,$user,$password,$db);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST['username'])){
    
    $id= $_POST['id'];
    print($id);
    $uname=$_POST['username'];
    $password=$_POST['psw'];
    $rpassword=$_POST['psw1'];
    echo $uname . " " . $password;
    print($rpassword);
    $sql="select * from signup where username='".$uname."'AND password='".$password."' limit 1";
    $sql1= "select * from users";
    $sql2="INSERT INTO signup (id, username, password) VALUES ('$id', '$uname', '$password')";
  
       if (mysqli_query($link, $sql2)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . mysqli_error($link);
        
    }
    exit();
  }
?>
 