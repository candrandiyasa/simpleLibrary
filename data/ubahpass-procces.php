<?php
require_once('../class/Library.php');

$show_user = $library->user_name($_POST['username']);

$user = $_POST['username'];
$pass = $_POST['pass'];

if($show_user['password_1151705001'] == $pass){
    $result = $library->edit_pass($user, $pass);
}else{
    $pass = md5($pass);
    $result = $library->edit_pass($user, $pass);
}

$library->Disconnect();

if($result){
    header('Location: ../admin/index.php');
}else{
    header('Location: ../admin/index.php#modal-user');
}

?>