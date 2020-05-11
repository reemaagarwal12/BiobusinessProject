<!DOCTYPE html>
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'dbms');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
session_start();

$user=$_SESSION['id'];
//echo"<p> $user </p>";*/
?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.b {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li.f{
  float: left;
  display: block;
  color: white;
  text-decoration: none;
}
li.g{
  float:right;
  color:white;
  font-size:30px;
  display: block;
  text-decoration: none;
  /*padding-top:20px*/;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: red;
  text-decoration: none;
  color: #ffffff;
}
.top-left {
  position: absolute;
  top: 75px;
  left: 250px;
  color: white;
  font-size: 60px;
  text-shadow: 8px 8px 8px black;

}
.container1{
  position: relative;
  text-align: center;
  color: black;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size:60px;
  font-style: bold;
}
.t{
  background-color: lightgrey;
  width: 500px;
  border: 10px solid black;
  padding: 50px;
  margin: 20px;
}


</style>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */

</style>

</head>
<body>

<ul class="b">
  <li class="f"> <a href=homePage.php>Home</a></li>
  <li class="f"><a href="FindADonor.php">Find A Donor</a></li>
  <li class="f"><a href="Donate.php">Donate</a></li>
  <li class="f"><a href="contact.php">Contact Us</a></li>
  <li class="f"><a href="UpcomingEvents.php">Upcoming Events</a></li>
  <li class="f"><a href="index.php">Logout</a></li>
  <li class="g"> BLOOD BUDDIES </li>
</ul>
<div class="container1">
<img src=3.jpeg width=auto height=800>
<div class="centered"> DONATE BLOOD AND INSPIRE OTHERS </div>
</div>
<h1> Who We Are? </h1>
<!--<h1 style="padding: 20px;"> Who We Are? </h1>-->
<div class="t" style="float: left;">Blood Buddies is for public donation center with blood donation members in the changing health care center.
<ul>
<li> Provide the searching facilities on blood donors, different blood group details </li>
<li> Detailed information regarding donors </li>
<li> Information regarding upcoming events and camps </li>
</ul>
</div>
<img src="6.jpeg" width:300 height:300 style="float:right">

</body>
</html>
