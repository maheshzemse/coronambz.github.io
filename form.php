


<?php

include('connection.php');

if(isset($_POST['submit']))
{

	  $username=$_POST['username'] ;
	  $mob=$_POST['mob'];
	  $email=$_POST['email'];
	  $textarea=$_POST['textarea'];


	 $query="INSERT INTO  corona_table(username,mob,email,textarea) values('$username','$mob','$email','$textarea')";

	 $data=mysqli_query($conn,$query);

	 if($data)
	 {
	 	echo"";
	 }
	 else
	 {
	 	echo "<script>alert('data  not inserted')</script>";
	 }














}








?>
