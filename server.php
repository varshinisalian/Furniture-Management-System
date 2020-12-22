<?php 

	//connect the database
	$db = mysqli_connect("localhost" , "root", '', 'furniture', '3306') or die("Could not connect to database"); 


	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$pnumber = $_POST['pnumber'];
	$password = $_POST['password'];
	$usertype = $_POST['check'];



	$sql = "INSERT INTO users(fname, lname, address, pnumber, email, password, usertype) VALUES ('$fname', '$lname', '$address', '$pnumber', '$email', '$password', '$usertype')";
	mysqli_query($db, $sql);
	echo "New record created successfully";
  	header('location: login.html');



?>