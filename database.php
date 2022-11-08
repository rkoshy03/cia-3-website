<?php
$conn = new mysqli("localhost", "root", "", "new_college_project");
if ($conn->connect_error) {
    die("Sorry Connection Failed");
}
