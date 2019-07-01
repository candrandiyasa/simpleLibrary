<?php 
    require_once('../data/session-admin.php');
    require_once('../class/Library.php');
    //echo '<pre>'.var_dump($_SESSION).'</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Simple Library System</title>

    <link rel="stylesheet" href="../assets/css/adminLibraryCSS.css" />
    <link rel="stylesheet" href="../assets/css/modalCSS.css" />
</head>
<body>
    <div id="master-container">
        <div class="container">
            <a href="#modal-buku">Data Buku</a>
            <a href="#modal-kategori">Kategori</a>
            <a href="#modal-user">Account</a>
            <a href="../data/logout.php" class="button-log">Logout</a>
        </div>
        <div class="container center">
            <div class="content-admin">
                <h3>Hei, Welcome to</h3>
                <h1>Simple Library System</h1>
            </div>
            <div class="content-admin">
                <form action="#modal-search-admin" method="POST">
                    <input type="search" id="search" name="search" placeholder="Enter for searching some book ...">
                </form>
            </div>
        </div>
        <div class="container right">
            <small>by candrandiyasa</small>
        </div>
    </div>
    <?php
        include_once('../modal/admin/modal-buku.php');
        include_once('../modal/admin/modal-kategori.php');
        include_once('../modal/admin/modal-user.php');
        include_once('../modal/action/modal-buku-tambah.php');
        include_once('../modal/action/modal-kategori-tambah.php');
        include_once('../modal/modal-search-admin.php');
    ?>
</body>
</html>