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

if(isset($_POST['uname'])){
    
    $uname=$_POST['uname'];
    $password=$_POST['psw'];
    
    $sql="select * from signup where username='".$uname."'AND password='".$password."' limit 1";
    $sql1= "select * from users";
    $result=mysqli_query($link, $sql);
  
       if(mysqli_num_rows($result)){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<style>
    a{
        color: black;
    }
</style>
<script type="text/javascript" src="abc.js"></script>
<link rel="stylesheet" type="text/css" href="abc.css"></head>
<body>
<div class="dv2"><div class="dv1"><pre><div class="b1"><b2>V I C T O R I A    H A G A N </b2> | <b style="color:darksilver"> I N T E R I O R S</b></div></pre>
    <ul class="ul1" style="list-style-type: none;"><li id="id1"><div id="d1">Filter</div></li><li id="id1"><a href="About_us.html"><div id="d1">About US</div></a></li>
    <li id="id1"><a href="gallery_final.html"><div id="d1">Gallery</div></a></li><li id="id1"><a href="About_us.html"><div id="d1">Guide</div></a></li><li id="id1"><a href="abc.html"><div id="d1">Home</div></a></li></ul></div>
<div id="d2"><b style="font-size:200%">Welcome to</b> <hr> Creative Interior Designs<br><button id="bt1" onclick="document.getElementById('id01').style.display='block'">Log IN</button></div></div>
    <div id="d3"><a href=living_room.html><div id="l1"><center><img src="icons8-Sofa-50.png"><br>Living-room</center></div></a><a href="bathroom_final.html"><div id="l2"><center><img src="icons8-Bathtub-50.png"><br>Bathroom</center></div></a><a href="bedroom_final.html"><div id="l3"><center><img src="icons8-Bed-50.png"><br>Bedroom</center></div></a><a href="stairs.html"><div id="l4"><center><img src="icons8-Office Chair-50.png"><br>Office</center></div></a><a href="kitchen_final.html"><div id="l5"><center><img src="icons8-Restaurant Table-50.png"><br>Kitchen</center></div></a><a href="stairs.html"><div id="l6"><center><img src="icons8-Fence-50.png"><br>Exterior</center></div></a></div><hr>
        
        <div class="dv3"><div id="d4"><img class="i2" src="im.jpg"></div><b class="b">WHY CHOOSE US?</b><p><div class="p">"In a way, great furnishing ideas are all around us, so keep an eye out for colours, textures, materials and arrangements as you visit other homes or flick through interior design magazines. With Victoria Hagans Interiors, it is possible to imitate and improve upon the sets that you see on television or in the movies as well. For some people, it might also be a good idea to consult design experts who can provide invaluable input regarding the colour scheme to use, the right blend of materials and how to make the most of large or confined spaces. But the major way to collect design ideas is by using your boundless imagination to dream up interior spaces that excite your senses and make you inspired to carry out a project."</div></p><div class="dv4"><img CLASS="i1" ><br><br><br><u>HIGH</u> SKILLED INTERIOR DESIGN</div><div class="dv4"><img CLASS="i1" ><br><br><br><u>100%</u> CLIENT SATISFACTION</div><br><br><br><br><br><div class="dv4"><img CLASS="i1" ><br><br><br><u>FULL</u> PRO SERVICE</div><div class="dv4"><img CLASS="i1" src="clk.png"><br><br><br><u>SUPP</u>ORT 24/7</div><br></div><br>

    <div id="d5"><b class="b"><center>FEATURED <font color="black">WORKS</font></center></b><center><ul style="list-style-type: none;">
        <li id="id2"><div class="dv7" onclick="fn(1)">LIVINGROOM</div></li>
        <li id="id2"><div class="dv7" onclick="fn(2)">BATHROOM</div></li>
        <li id="id2"><div class="dv7" onclick="fn(3)">BEDROOM</div></li>
        <li id="id2"><div class="dv7" onclick="fn(4)">OFFICE</div></li>
        <li id="id2"><div class="dv7" onclick="fn(5)">DININGROOM</div></li>
        <li id="id2"><div class="dv7" onclick="fn(6)">KITCHENS</div></li></ul></center><br><div class="dv6"></div><div class="d0"><div id="d6"><img id="im1" src=""></div><div id="d6"><img id="im1" src=""></div><div id="d6"><img id="im1" src=""></div><div id="d6"><img id="im1" src=""></div></div></div><br><br>
    
<div id="id01" class="modal">
<span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>
<form class="modal-content animate" action="#" method="post">
    <div class="imgcontainer">
      <img src="signin.png" alt="Avatar" class="avatar" width=10px>
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit" onclick="myFunction()">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>   <button type="button" class="signup" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content animate" action="signup.php" method="post">
    <div class="container">

      <label><b>id</b></label>
      <input type="integer" placeholder="Enter no" name="id" required>

      <label><b>Name</b></label>
      <input type="text" placeholder="Enter name" name="username" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw1" required>
      <input type="checkbox" checked="checked"> Remember me
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" >Sign Up</button>
      </div>
    </div>
  </form>
</div>


    
    <div class="dv8"><div id="d8"><b class="b"><center>CONTACT <font color="black">US</font></center></b></div><div id="d9"><b id="b">Address:</b>No. 36,<br>Victoria Hagan Interiors,<br>Rahate Colony
      ,<br>
        Nagpur, Maharashtra.<br><br><b id="b">Email-id:</b>VH.interiors@gmail.com<br><b id="b">Phone:</b>+91-9876543210</div><img src=bg1.jpg width="100%" ><div id="d7"><ul style="list-style-type: none"><li class="it"><div class="dv9"><center><img class="i" src="email.png"><br>VH.interiors@gmail.com</center></div></li>
        <li class="it"><div class="dv9"><center><img class="i" ><br><pre>+91-9876543210</pre></center></div></li>
        <li class="it"><div class="dv9"><center><img class="i" src="loc.png"><br>Rahate Colony, Nagpur</center></div></li></ul></div></div><br>
    <div class="ft1">&copy; Full Stack Project 2020.<div class="ic"> <img id="ic" src=fb.png width="40px" onmouseover="change(this.id,0)" onmouseout="back(this.id,0)" > <img id="ic1" src=gog.png width="40px" onmouseover="change(this.id,1)" onmouseout="back(this.id,1)"> <img id="ic2" src=inst.png width="40px" onmouseover="change(this.id,2)" onmouseout="back(this.id,2)"> <img id="ic3" src=twt.png width="40px" onmouseover="change(this.id,3)" onmouseout="back(this.id,3)"> <img id="ic4" src=ml.png width="40px" onmouseover="change(this.id,4)" onmouseout="back(this.id,4)"> <img id="ic5" src=yt.png width="40px" onmouseover="change(this.id,5)" onmouseout="back(this.id,5)"></div></div>
<script>
if(document.cookie){
    var a =document.getElementById("lg");
    a.style.display="inline-block";
    var x=document.cookie;
    x=x.split(";")
    console.log(x)
    for(var i=0;i<x.length;i++){
     var a1=x[i];
     a1=a1.split("=");
     if(a1[0]=="uname"){
         console.log(a1[1]);
         var b=document.getElementById("lg1");
         b.innerHTML=a1[1];
     }
    }
}  
</script>
</html>