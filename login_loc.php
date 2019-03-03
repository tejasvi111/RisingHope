<?php

 session_start();
{
$email_id=$_POST['email_id'];
$psw=$_POST['psw']; 
 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
 mysqli_select_db($con,'hope');
  if(!$con)
  echo "<script> alert('Connection Failed') </script>";
 
 $res="select * from user1";
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
		 if($val['email_id']==$email_id && ($val['psw'])==$psw)
		 {
			 header('Location: http://localhost/risinghope/user.php');
			 $temp=1;
		 }
		 
	 } 
 }
 if($temp==0)
 {
	 
	
	 echo "<script> alert('Invalid email id or password') </script>";
 }

}
 

?> 