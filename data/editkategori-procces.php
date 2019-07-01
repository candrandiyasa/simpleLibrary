<?php
require_once('../class/Library.php');

if(isset($_POST['edit'])){
    $jenis          = $_POST['jenis'];
    $kategori       = $_POST['kategori'];
    $keterangan     = $_POST['keterangan'];

    $result = $library->edit_kategori($jenis, $kategori, $keterangan);
}

$library->Disconnect();

if($result){
    header('Location: ../admin/index.php#modal-kategori');
}else{
    header('Location: ../admin/index.php#modal-kategori');
}
?>