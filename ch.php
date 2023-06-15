<?php 
$conn = mysqli_connect('localhost','root','','career');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}


if(isset($_POST['sub']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$res = mysqli_query($conn,"select * from registration where email='$email'and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{
//echo "You are login Successfully ";
echo'<script> window.location="front.html"; </script> ';

}
else
{
	echo "something went wrong ";
}
}
?>