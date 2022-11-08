<?php
// Session
session_start();
//Connection
require_once("database.php");

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);

//Values Are Come From
$email = $mydata['email'];
$password = $mydata['password'];

$sql = "SELECT email,password FROM create_account WHERE email = '" . $email . "' AND password = '" . $password . "' LIMIT 1";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Setting Session Variable
    $_SESSION['is_true'] = true;
    $_SESSION['email'] = $mydata['email'];
    $_SESSION['email'] = $mydata['email'];


    echo json_encode("yes");
} else {
    echo json_encode("no");
}
