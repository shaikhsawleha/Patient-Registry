<?php
include "config/dbconnect.php";
$firstname=$_POST['FIRSTNAME'];
$lastname=$_POST['LASTNAME'];
$age=$_POST['AGE'];
$dob=$_POST['DOB'];
$gender=$_POST['GENDER'];
$phoneNumber=$_POST['PHONENUMBER'];
$description=$_POST['DESCRIPTION'];

$sql = "INSERT INTO patient_data (firstname, lastname,age,dob,gender,phoneNumber,description)
VALUES ('$firstname', '$lastname','$age','$dob','$gender','$phoneNumber','$description')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
 ?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="style/css" >
</head>
<body>
<button onclick="window.location.href='display.php'">Display record</button>
</body>
</html>
