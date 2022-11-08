<?php

$data = file_get_contents("php://input");
$mydata = json_decode($data, true);

//Connection
require_once("database.php");

$sql = "INSERT INTO contact_us(name,email,p_number,country) VALUES(?,?,?,?)";

$result = $conn->prepare($sql);
if ($result) {
    $result->bind_param("ssis", $name, $email, $p_number, $country);
    //Values Are Come From
    $name = $mydata['name'];
    $email = $mydata['email'];
    $p_number = $mydata['p_number'];
    $country = $mydata['country'];

    $result->execute();
    echo json_encode("yes");
} else {
    echo json_encode("no");
}
