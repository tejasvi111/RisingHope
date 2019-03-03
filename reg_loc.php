<?php
session_start();
$con=mysqli_connect('localhost','root','','hope') or die(mysqli_error());
$name=$_POST['name'];
$mob_no=$_POST['mob_no'];
$email_id=$_POST['email_id'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$psw=($_POST['psw']);

if(isset($name))
{
	$db="INSERT INTO user1(name,mob_no,email_id,gender,address,psw)	
values('".$name."','".$mob_no."','".$email_id."','".$gender."','".$address."','".$psw."')";
	$query=mysqli_query($con,$db);
	header('Location: http://localhost/risinghope/login.php ');
}	
else
	echo "Failed";

?>