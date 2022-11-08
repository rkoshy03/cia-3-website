<?php
//  Session Start
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Link AOS -->
    <link rel="stylesheet" href="css/aos.css">
    <!-- Link Custom Css -->
    <link rel="stylesheet" href="css/style.css">
    <title> <?php echo TITLE; ?> | Easy Coding</title>
</head>

<body>


    <nav class="navbar navbar-expand-sm fixed-top">
        <a href="index.php" class="navbar-brand"><span>E</span>asy <span>.</span></a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link <?php if (PAGE == 'index') {
                                                                                echo 'active';
                                                                            } ?>">Home</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link <?php if (PAGE == 'about') {
                                                                                echo 'active';
                                                                            }  ?>">About</a></li>
                <li class="nav-item"><a href="infrastructure.php" class="nav-link <?php if (PAGE == 'infra') {
                                                                                        echo 'active';
                                                                                    } ?> ">Infrastructure</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link <?php if (PAGE == 'contact') {
                                                                                echo 'active';
                                                                            } ?> ">Contact</a></li>
                <li class="nav-item"><a href="faculty.php" class="nav-link <?php if (PAGE == 'faculty') {
                                                                                echo 'active';
                                                                            } ?> ">Faculty</a></li>

                <?php
                if (isset($_SESSION['is_true'])) {
                    echo '
                        <li class="nav-item"><a href="./database/logout.php" class="nav-link">Logout</a></li>
                        ';
                } else {
                    echo '
                    <li class="nav-item"><a href="" data-toggle="modal" data-target="#popupforlogin" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="create_account.php" class="nav-link">Create Account</a></li>
                      
                    ';
                }
                ?>
            </ul>
        </div>
    </nav>