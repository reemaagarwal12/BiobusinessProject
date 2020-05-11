<!DOCTYPE html>
<?php
{
  /*define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'dbms');
  $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);*/
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dbms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  session_start();
}
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

	<div>
		<h2 style="padding: 10px;"><center>Donate</center></h2>
	</div>
	<div class="form1">
		<form action="" method="post">
			<div class="form-group">
				<label for="exampleFormControlSelect1">Select your Blood Group</label>
				<select class="form-control" name="bg" id="exampleFormControlSelect1">
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
            	<label for="Name">Enter Name</label>
            	<input class="form-control" name="Name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="DOB">Enter Date of Birth</label>
                <input class="form-control" name="DOB" placeholder="DOB">
            </div>
            <div class="form-group">
                <label for="city">Select City</label>
                <input class="form-control" name="city" placeholder="City">
            </div>
            <div class="form-group">
                <label for="contact">Enter Contact No</label>
                <input class="form-control" name="contact" placeholder="Mobile No">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input class="form-control" name="qty" placeholder="Enter amount willing to donate">
            </div>
            <div class="form-group">
                 <label for="health">Any health Issues</label>
                 <input class="form-control" name="health" placeholder="Issues if Any">
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #e02f09">Submit</button>

           <?php
           if($_SERVER["REQUEST_METHOD"] == "POST") {

   		      $name = mysqli_real_escape_string($conn,$_POST['Name']);
   		      $dob= mysqli_real_escape_string($conn,$_POST['DOB']);
            $city=mysqli_real_escape_string($conn,$_POST['city']);
            $contact=mysqli_real_escape_string($conn,$_POST['contact']);
            $health=mysqli_real_escape_string($conn,$_POST['health']);
            $bg=mysqli_real_escape_string($conn,$_POST['bg']);
            $qty=mysqli_real_escape_string($conn,$_POST['qty']);

            $user=$_SESSION['id'];

            function codeData($value) {
              $ch=substr($GLOBALS['user'],0,1);
              $num=ord($ch)-96;
              $l=strlen($value);
              $rev="";
              for($i=0;$i<$l;$i++)
              {
               $a1=chr(ord(substr($value,$i,1))+$num);
               $a1=mysqli_real_escape_string($GLOBALS['conn'],$a1);
               $rev=$a1.$rev;
             }

             return $rev;
            }

            function codeBg($value)
            {
              $l=strlen($value);
              $ch="";
              for($i=0;$i<$l;$i++)
              {
                $a1=ord(substr($value,$i,1));
                $ch=$ch."$a1";
              }
              return $ch;
            }

            $name=codeData($name);
            $city=codeData($city);
            $contact=codeData($contact);
            $health=codeData($health);
            $bg=codeBg($bg);


           $sql = "INSERT INTO Donor(Blood_group, Name, DOB, City, Contact_No, Health_Issues, Quantity)
           VALUES ('$bg','$name','$dob', '$city', '$contact', '$health','$qty')";

           if ($conn->query($sql) === TRUE) {
             echo "<div><br>You have registered successfully.<br> Thank You!<br></div>";
           }
           else {
             echo "Error: " . $sql . "<br>" . $conn->error;
           }
           $conn->close();

           /*if (mysqli_query($conn, $sql)) {
             echo "New record created successfully !";
           }
           else
           {
             echo "Error: " . $sql . " " . mysqli_error($conn);
           }


           if (mysqli_query($sql,$db)) {
             echo "<p>You have been registered successfully</p>";
           }
           else {
             echo "<p>Error !!</p>";
             echo mysql_error();
           }*/
         }

      ?>
        </form>
    </div>
    <div style="padding: 40px; float: right;">
    	<img src="BloodDonateQuote.png" class="img-fluid" alt="Responsive image">
    		<div><br>
    		<br>
    		<br></div>
    	<img src="Blood-drop-with-text-thanks.jpg" class="img-fluid" alt="Responsive image">
    </div>
</body>
</html>
