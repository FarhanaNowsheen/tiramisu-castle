
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


$the_email =  mysqli_real_escape_string($conn,$_POST['emailid']);

$query = "INSERT INTO newsletter (
`Email`)
VALUES ('$the_email'); ";

mysqli_query($conn,$query);

echo "
We'll Let You Know The Latest Updates! Always!

";

mysqli_close($conn);


?>