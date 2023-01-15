<!DOCTYPE html>
<html>
<head>
	<title>Application form</title>
</head>
<link rel="stylesheet" type="text/css" href="Styles.css">
<body>
<h1>KUSTIN MULLER NIGERIAN Ltd</h1>
<h6>Iddu Karimu, indutrial village. Nigeria</h6>

	<?php if ($_GET['Empty']==true) { ?>
			<div id="alert" class="alert-light-danger">
	<?php echo $_GET['Empty']; ?></div>
	<?php } ?>

<form id="fom" action="insert.php" method="POST">
<h3>Personal Details</h3>
<p>
	Surname:<input id="sn" type="text" name="Surname"><br>
	First Name:<input id="fn" type="text" name="Firstname"><br>
	Middle Name:<input id="mn" type="nvarcha" name="Middlename"> <br>
	Email:<br><input id="eml" type="email" name="email"><br>
	Date Of Birth:<br><input id="dob" type="Date" name="DOB"><br>
	Place Of Birth:<br><input id="pob" type="text" name="Placeofbirth"><br>
	Gender:<br><select id="gend" type="dropdown" name="gender">
		<option value="Male"selected>Male</option>
		<option value="Female"selected>Female</option>
	</select> <br>
	Marital Status:<br><select id="ms" type="dropdown" name="Status">
		<option value="Single">Single</option>
		<option value="Married">Married</option>
		<option value="Divorsed">Divorsed</option>
	</select><br>
	Country:<input id="ctry" type="text" name="country"><br>
	State:<br><input id="sta" type="text" name="state"><br>
	LGA:<br><input id="lg" type="text" name="lga"><br>
<h3>Qualifications Obtained with dates</h3>
	Qualification:<input id="qlf" type="nvarcha" name="qualification"><br>
	Course:<input id="crs" type="text" name="course"><br>
	School:<input id="sch" type="text" name="school"><br>
	Date:<br><input id="dte" type="date" name="date"><br>
	Grade:<br><input id="gdr" type="nvarcha" name="grade"><br>
</p>	<input id="clr" type="reset" name="clear" value="Clear">
	<input id="snd" type="submit" name="submit" value="Submit">

</form>
</html>