<?php
require_once('../class/Library.php');

if(isset($_POST['log'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = md5($password);
    $result = $library->user_login($username, $password);

    if($result > 0){
        $return['logged'] = TRUE;

        //$return['user_type'] = $result['status_1151705001'];
        $_SESSION['logged_id'] = $result['username_1151705001'];
        $_SESSION['logged_type'] = $result['status_1151705001'];
        $_SESSION['uniqid'] = uniqid();
    }else{
        $return['logged'] = FALSE;
        //$return['msg'] = "Invalid Username or Password";
    }
    // echo json_encode($return);
}

$library->Disconnect();

if($return['logged'] == TRUE){
    header('Location: ../admin/index.php');
}else{
    header('Location: ../index.php#modal-login');
}
?>