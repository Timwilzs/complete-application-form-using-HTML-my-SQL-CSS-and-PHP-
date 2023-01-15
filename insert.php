<?php

if (isset($_POST['submit'])) {
	if (empty($_POST['Surname']) || empty($_POST['Firstname']) || empty($_POST['Middlename']) || empty($_POST['email']) || empty($_POST['DOB']) || empty($_POST['Placeofbirth']) || empty($_POST['gender']) || empty($_POST['Status']) || empty($_POST['country']) || empty($_POST['state']) || empty($_POST['lga']) || empty($_POST['qualification']) || empty($_POST['course']) || empty($_POST['school']) || empty($_POST['date']) || empty($_POST['grade'])) {
		header("location:index.php?Empty= Please fill in the blanks");
	} else {
	$Surname = $_POST ['Surname'];
	$Firstname = $_POST ['Firstname'];
	$Middlename = $_POST ['Middlename'];
	$email = $_POST ['email'];
	$DOB = $_POST ['DOB'];
	$Placeofbirth = $_POST ['Placeofbirth'];
	$gender = $_POST ['gender'];
	$Status = $_POST ['Status'];
	$country = $_POST ['country']; 
	$state = $_POST ['state'];
	$lga = $_POST ['lga'];
	$qualification = ['qualification'];
	$course = ['course'];
	$school = ['school'];
	$date = ['date'];
	$grade = ['grade'];

	$con = mysqli_connect('localhost','root','','form');

	$query = "INSERT INTO `tbl_form`(`Surname`, `firstname`, `middlename`, `email`, `dob`, `pob`, `gender`, `maritalstatus`, `country`, `state`, `lga`, `qualification`, `course`, `school`, `date`, `grade`) VALUES ('$Surname','$Firstname','$Middlename','$email','$DOB','$Placeofbirth','$gender','$Status','$country','$state','$lga','$qualification','$course','$school','$date','$grade')";

	$run = mysqli_query($con,$query);

	if (run == TRUE) {
	 	include 'popup.php';
	 					} 
	 }
	 }else {
	 	echo "Error";
	 }
?>