<?php
$servername = "sql309.epizy.com";
$username = "epiz_28640922";
$password = "FT1DWMujDYC6K";
$dbname = "epiz_28640922_mydb";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];

echo $fname;
echo $lname;
echo $phone;
echo $email;

$sql = "INSERT INTO contact(fname, lname, phone, email)
VALUES ('$fname', '$lname','$phone','$email')";

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
	echo "<script>alert('Your Response Saved');</script>";
	header('Location:index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>