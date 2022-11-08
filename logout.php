<?php
session_start();
//   Session unset
session_unset();
// Session Destroy
session_destroy();
// Redirect to Main Page
header("location: ../index.php");
