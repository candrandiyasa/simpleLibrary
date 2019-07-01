<?php require_once('data/session-user.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Library System</title>

    <link rel="stylesheet" href="assets/css/libraryCSS.css" />
    <link rel="stylesheet" href="assets/css/modalCSS.css" />
</head>
<body>
    <div id="master-container">
        <div class="container header">
            <a href="#modal-login">Login</a> 
        </div>
        <div class="container title">
            <h3>Welcome to</h3>
            <h1>Simple Library System</h1>
        </div>
        <div class="container search">
            <form action="#modal-search" method="POST">
                <input type="search" id="search" name="search" placeholder="Enter for searching some book ...">
            </form>
        </div>
        <div class="container recomend">
            <h1>Recommended books</h1>
            <ul>
                <li>
                    <img src="assets/img/1.jpg">
                    <small>Practical Internet of Things With Javascript</small>
                    <button onclick="window.location.href='#modal-info'">More Info</button>
                </li>
                <li>
                    <img src="assets/img/2.png">
                    <small>Practical Internet of Things With Javascript</small>
                    <button onclick="window.location.href='#modal-info'">More Info</button>
                </li>
                <li>
                    <img src="assets/img/3.png">
                    <small>Practical Internet of Things With Javascript</small>
                    <button onclick="window.location.href='#modal-info'">More Info</button>
                </li>
                <li>
                    <img src="assets/img/4.png">
                    <small>Practical Internet of Things With Javascript</small>
                    <button onclick="window.location.href='#modal-info'">More Info</button>
                </li>
            </ul>
        </div>
    </div>
    <?php
        include_once('modal/modal-login.php');
        include_once('modal/modal-info.php');
        include_once('modal/modal-search.php');
    ?>
</body>
</html>