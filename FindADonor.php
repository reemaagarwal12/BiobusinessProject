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

/*.active {
  background-color: #4CAF50;
}*/

.form1
{
  padding-left: 20px;
  width: 50%;
  float: left;
  padding-right: 10px;
}

.matchTable
{
  float: right;
  width: 40%;
  padding-right:30px;
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

<div >
  <h2 style="padding: 20px"><center>Find A Donor</center></h2>
</div>
<div class="form1">
  <form action="" method="post">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select your Blood Group</label>
    <select class="form-control" id="exampleFormControlSelect1" name="bg">
      <option>Blood group</option>
      <option>A+</option>
      <option>B+</option>
      <option>AB+</option>
      <option>O+</option>
      <option>O-</option>
      <option>A-</option>
      <option>B-</option>
      <option>AB-</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" name="Lcity">Select City</label>
    <input class="form-control" id="exampleInputCity" name="city" placeholder="City">
  </div>
  <div class="form-group">
    <label for="exampleInputquantity">Quantity</label>
    <input class="form-control" name="qty" id="exampleInputquantity" placeholder="..units">
  </div>
  <!---<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>-->
  <button type="submit" class="btn btn-primary" style="background-color: #e02f09">Submit</button>
  <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    $bg = mysqli_real_escape_string($db,$_POST['bg']);
    $qty= mysqli_real_escape_string($db,$_POST['qty']);
		$cty= mysqli_real_escape_string($db,$_POST['city']);

    $sql = "SELECT cost, quantity, City, Hospital FROM blood WHERE Blood_group= '$bg' and Quantity>='$qty' and City='$cty'";
    $res = mysqli_query($db,$sql);
    $count=0;
    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
    {
      $count++;
      $cost=$row['cost'];
      $quantity=$row['quantity'];
			$city=$row['City'];
			$hospital=$row['Hospital'];
      echo "<div style='font-size:15px; color:#e02f09; padding:20px;'><br>$cost/per 500ml <br>Available No.of units are $quantity<br>
			City: $city<br>Hospital: $hospital<br></div>";
    }
    if($count==0)
    {
      echo "<div>Sorry! We cannot grant your request.<br><a href='https://bloodbankonline.org'>Please Try Here</a></div>";
    }
  }
    ?>
</form>
</div>
<div class="matchTable">
  <p style="font-size: 1.5vw">Please make sure that you match correctly</p>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Recipient Blood Type</th>
      <th scope="col">Matching Donor Blood Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>A+ </td>
      <td>A+, A-, O+, O-</td>
    </tr>
    <tr>
      <td>A-</td>
      <td> A-, O-</td>
    </tr>
    <tr>
      <td>B+</td>
      <td>B+, B-, O+, O-</td>
    </tr>
    <tr>
      <td>B-</td>
      <td>B-, O-</td>
    </tr>
    <tr>
      <td>AB+</td>
      <td>Compatible with all blood types</td>
    </tr>
    <tr>
      <td>AB-</td>
      <td>AB-, A-, B-, O-</td>
    </tr>
    <tr>
      <td>O+</td>
      <td>O+, O-</td>
    </tr>
    <tr>
      <td>O-</td>
      <td>O-</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
