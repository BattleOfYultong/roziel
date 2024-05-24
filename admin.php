<?php
session_start();

include 'connections.php';

 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ADMIN DASHBAOARD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <form action="login.php">
    <div class="sidebar">
        <div class="logo">

        </div>
        <ul class="menu">
            <li class="active">
                <a href="#">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-chart-bar"></i>
                    <span>Statistics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-users"></i>
                    <span>Applicants</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-question-circle"></i>
                    <span>Help</span>
                </a>
            </li>
            <li class="logout">
                <a href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header-wrapper">
            <div class="header-title">
                <div class="logo-title">
                    <img src="logo.png" alt="">
                </div>
                <div class="dashboard-title">
                    <h2>DASHBOARD</h2>
                </div>
                
                <div class="search-box">
                    <i class="fa-solid fa-search"></i>
                    <input type="title" placeholder="Search">
                </div>
            </div>
        </div>



        <div class="main-body">
            <table>
                <thead>awafawf</thead>
            </table>
        </div>
    </div>
</form>
</body>
</html>