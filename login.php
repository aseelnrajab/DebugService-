<?php

$email = $_POST['email'];
$pass = $_POST['pass'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "debug_service";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO account values ('$email','$pass')";
if ($conn->query($sql) === TRUE) {
    echo "<br>New record created successfully";
    header("Location: ds.html");
    // هون بنحط رابط الصفحه الرئيسه 

    exit();
} else {
    echo "<br>Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
// $email = filter_input(INPUT_POST, 'email');
// $pass = filter_input(INPUT_POST, 'pass');

// $email = $_POST['email'];
// $pass = $_POST['pass'];

// if (!empty($username)) {
//     if (!empty($password)) {
//         $host = "localhost";
//         $dbusername = "root";
//         $dbpassword = "";
//         $dbname = "debug_service";
//         // Create connection
//         $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
//         if (mysqli_connect_error()) {
//             die('Connect Error (' . mysqli_connect_errno() . ') '
//                 . mysqli_connect_error());
//         } else {
//             $sql = "INSERT INTO account values ('$email','$pass')";
//             if ($conn->query($sql)) {
//                 echo "New record is inserted sucessfully";
//             } else {
//                 echo "Error: " . $sql . "
// " . $conn->error;
//             }
//             $conn->close();
//         }
//     } else {
//         echo "Password should not be empty";
//         die();
//     }
// } else {
//     echo "Username should not be empty";
//     die();
// }
