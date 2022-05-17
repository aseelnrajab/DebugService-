<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "debug_service";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = (int)$_POST['phone'];
$problem = $_POST['problem'];
$ID = (int)$_POST['ID'];
$city = $_POST['city'];


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact values('$firstName','$lastName','$email',$phone,$problem',$ID','$city')";
if ($conn->query($sql) === TRUE) {
    echo "<br>successful: ";

    // echo '<script type="text/javascript">    </script>';
} else {
    // echo '<script type="text2/javascript">    </script>';

    echo "<br>Error: " . $sql . "<br>" . $conn->error;
    // session_start();
    // header('location:SignUp.PHP');
}
