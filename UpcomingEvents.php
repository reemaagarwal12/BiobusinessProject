<!DOCTYPE html>
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'dbms');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #e02f09;
  text-decoration: none;
  color: #ffffff;
}

.row {
  display: flex;
  flex-wrap: wrap;
  padding: 10px;
  background-color: #2c2a2a;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 25%;
  padding: 10px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

.EveLinks
{
  text-decoration: none;
  color: #fff;
}

a:hover{
  background-color: #e02f09;
  text-decoration: none;
  color: #ffffff;
}
</style>
</head>
<body>
	<ul>
		<li><a href="homePage.php">Home</a></li>
    <li><a href="FindADonor.php">Find A Donor</a></li>
    <li><a href="Donate.php">Donate</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="UpcomingEvents.php">Upcoming Events</a></li>
		<li style="float: right;"><a href="index.php">Logout</a></li>
	</ul>

  <div style="padding: 20px">
    <h2><center> Events</center></h2>
  </div>

  <div class="row">
    <div class="column">
      <figure class="figure">
        <img src="eve1.jpg"  style="border-radius: 50%; padding: 10px;">
        <figcaption class="figure-caption"><a href="#link" class="EveLinks">Blood Donation camp at <br>Rajghat Hospital, Banaras<br>
          Contact: 8493442929</a>
        </figcaption>
      </figure>
      <figure class="figure">
        <img src="eve2.jpg" style="border-radius: 50%; padding: 10px;">
        <figcaption class="figure-caption"><a href="#link" class="EveLinks">Blood Donation Camp at <br>Ropar Health centre, MP<br>
          Contact: 347328022</a>
        </figcaption>
      </figure>
      <figure class="figure">
        <img src="eve3.jpg" style="border-radius: 50%; padding: 10px;">
        <figcaption class="figure-caption"><a href="#link" class="EveLinks">Blood Donation Camp at Nildih, Orissa<br>
          Organised By Life NGO<br>
          Contact: 9800277686</a>
        </figcaption>
      </figure>
      <figure class="figure">
        <img src="eve4.jpg" style="border-radius: 50%; padding: 10px;">
        <figcaption class="figure-caption"><a href="#link" class="EveLinks">Blood Donation Camp at <br>Thissur, Andhra Pradesh
        <br>Contact: 3409090034</a>
        </figcaption>
      </figure>
      <figure class="figure">
        <img src="eve5.jpg" style="border-radius: 50%; padding: 10px;">
        <figcaption class="figure-caption"><a href="#link" class="EveLinks">Blood Donation Camp at <br> Belvue Hospital, Chennai
          <br>Contact: 8432020113</a>
        </figcaption>
      </figure>
      <figure class="figure">
        <img src="eve6.jpg" style="border-radius: 50%; padding: 10px;">
        <figcaption class="figure-caption"><a href="#link" class="EveLinks">Health Awareness and Checkup<br>Organised By Apollo Group<br>
          At Yelagiri<br>Contact:7802374437</a></figcaption>
      </figure>
      <figure class="figure">
        <img src="eve7.jpg" style="border-radius: 50%; padding: 10px;">
        <figcaption class="figure-caption"><a href="#link" class="EveLinks">Blood Donation Camp at<br>VIT Vellore, Organised By YRC<br>
        Contact: 9892486745</a></figcaption>
      </figure>
      <figure class="figure">
        <img src="eve8.jpg" style="border-radius: 50%; padding: 10px;">
        <figcaption class="figure-caption"><a href="#link" class="EveLinks">Blood Donation Camp at<br>DPS Delhi<br>Contact:70872826764</a></figcaption>
      </figure>
    </div>
</div>

</body>
</html>
