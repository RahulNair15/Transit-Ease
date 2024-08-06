<! Script to add newly registered people in to the Database -->

<style >  .table{  font-family: Montserrat, sans-serif;
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="index.css">


<?php
include 'connect.php';
include 'register.php';

$name = $_POST['name'];
$email = $_POST['email'];
$dob  = $_POST['dob'];
$password = $_POST['password'];
$Gender = $_POST['Gender'];
$Phone = $_POST['phone'];

$parts = explode('-', $_POST['dob']);

$date1=date_create("$parts[0]-$parts[1]-$parts[2]");
$date2=date_create(date("d-m-Y"));
$diff=date_diff($date1,$date2);


if (preg_match("/^[a-zA-Z-' ]*$/",$name)) {
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 if($diff->format("%a")>0){
		$sql_userdatabase="Insert into userdatabase(Name ,Email , Gender, password , dob , Phone) values ('$name' , '$email' , '$Gender', '$password', '$dob', '$Phone')";
		if(mysqli_query($connect, $sql_userdatabase) == true)
		{
			echo "<center><h1><b>You have been sucessfully registered<b> </h1></center><br><br>";
			echo '<center><table><tr><td><A href="sindex.php"><button style="background-color:black; border-color:black"><span style="color:white">Sign in ! </span></button></a></td></tr></table></center>';
			
		}
		else
		{
			echo "<center><h1><b>Registration Unsucessful , try again with different credentials<b> </h1></center><br><br>";
			echo '<center><table><tr><td><A href="register.php"><button style="background-color:black; border-color:black"><span style="color:white">Register&nbsp&nbspAgain</span></button></a></td></tr></table></center>';
		}
	 }
	 else
		{
			echo "<center><h1><b>Registration Unsucessful , try again with different credentials<b> </h1></center><br><br>";
			echo '<center><table><tr><td><A href="register.php"><button style="background-color:black; border-color:black"><span style="color:white">Register&nbsp&nbspAgain</span></button></a></td></tr></table></center>';
		}
	}
	else
		{
			echo "<center><h1><b>Registration Unsucessful , try again with different credentials<b> </h1></center><br><br>";
			echo '<center><table><tr><td><A href="register.php"><button style="background-color:black; border-color:black"><span style="color:white">Register&nbsp&nbspAgain</span></button></a></td></tr></table></center>';
		}
   }
   else
		{
			echo "<center><h1><b>Registration Unsucessful , try again with different credentials<b> </h1></center><br><br>";
			echo '<center><table><tr><td><A href="register.php"><button style="background-color:black; border-color:black"><span style="color:white">Register&nbsp&nbspAgain</span></button></a></td></tr></table></center>';
		}

?>
