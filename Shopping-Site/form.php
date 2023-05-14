<?php
$connect=mysqli_connect('localhost','root','','harshit');
// create a variable
$first_Name=$_POST['name'];
$first_Email=$_POST['email'];
$first_Product=$_POST['product'];
$first_Address=$_POST['address'];
// $email=$_POST['email'];

//Execute the query


mysqli_query($connect,"INSERT INTO contact form (first_Name,first_Email,first_Product,first_Address)
		        VALUES ('$first_Name','$first_Email','$first_Product','$first_Adddress')");
				
	if(mysqli_affected_rows($connect) > 0){
		echo"<h1> Thank You!!!</h1>";
		echo "$first_name";
	echo "<p>Your room is booked</p>";
        echo"<br><br>";
	echo '<a href="index.html">Click here to return to Homepage</a>';
} else {
	echo " Sorry!! <br/>";
	echo mysqli_error ($connect);
}