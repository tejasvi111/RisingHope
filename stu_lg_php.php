<?php

 session_start();
{
$email_id=$_POST['email_id'];
$psw=$_POST['psw']; 
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'hope');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
 
 $res="select* from user";
 $query=mysqli_query($con,$res);

 if(!$query)
 {
	 echo "<script> alert('DATA BASE NOT FOUND') </script>";
 }
   $num=mysqli_num_rows($query);
   $temp=0;
 for($i=0;$i<$num;$i++)
 {
	 $val=mysqli_fetch_array($query);
	 {
		 if($val['email_id']==$email_id && base64_decode($val['psw'])==$psw)
		 {
			 header('Location: http://localhost/IETALKERS/stu_profile.html');
			 $temp=1;
		 }
		 else
			 echo "invalid username or password";
	 } 
 }
 if($temp==0)
 {
	 header('Location: http://localhost/IETALKERS/stu_lg_php.php');
 }
}
 
 

?> 