<?php
session_start();

if(isset($_SESSION['logged_id'])){
    //echo '<pre>'.var_dump($_SESSION).'</pre>';
    header('Location: admin/index.php');
}else{
    //echo "tidak masuk";
    session_destroy();
}
?>