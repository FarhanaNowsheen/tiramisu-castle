
<?php

$servername = "localhost";
$username = "id11000067_contact";
$password = "12345678";
$dbname = "id11000067_tiramisu";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!<br>";

$the_fname =  mysqli_real_escape_string($conn,$_POST['first_name']);
$the_lname =  mysqli_real_escape_string($conn,$_POST['last_name']);

$the_country = mysqli_real_escape_string($conn, $_POST['country']);
$the_address =  mysqli_real_escape_string($conn,$_POST['street_address']);
$the_pc =  mysqli_real_escape_string($conn,$_POST['postcode']);
$the_city =  mysqli_real_escape_string($conn,$_POST['city']);
$the_phone = mysqli_real_escape_string($conn, $_POST['phone_number']);
$the_email = mysqli_real_escape_string($conn, $_POST['email_address']);

$query = "INSERT INTO bill (`First Name`,`Last Name`, `Country`, `Address`,
`PC`, `City`, `Phone No`,`Email`)
VALUES ( '$the_fname', '$the_lname','$the_country', '$the_address', '$the_pc','$the_city', '$the_phone','$the_email'); ";

mysqli_query($conn,$query);

echo "

We'll Contact You!

";

mysqli_close($conn);


?>