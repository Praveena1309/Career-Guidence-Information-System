<?php

$conn = mysqli_connect('localhost','root','','career');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$country = $_POST['country'];
$high = $_POST['high'];
$hsc = $_POST['hsc'];
$college = $_POST['college'];
$password = $_POST['password'];

$sql = "INSERT INTO registration(firstname, lastname, email, age, dob, gender, city, country, high, hsc, college, password ) VALUES('$firstname', '$lastname','$email',
 '$age', '$dob', '$gender', '$city', '$country', '$high', '$hsc', '$college', '$password')";

if(mysqli_query($conn,$sql))
{
	// echo "Registerd Successfully";
	echo'<script> window.location="index.html"; </script> ';
	

}
else
{
	echo mysqli_error($conn);
}

?>
