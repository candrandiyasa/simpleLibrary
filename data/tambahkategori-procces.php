<?php
require_once('../class/Library.php');

if(isset($_POST['tambah'])){
    $kategori     = $_POST['kategori'];
    $keterangan   = $_POST['keterangan'];

    $result = $library->add_kategori($kategori, $keterangan);
}

$library->Disconnect();

if($result){
    header('Location: ../admin/index.php#modal-kategori');
}else{
    header('Location: ../admin/index.php#modal-kategori-tambah');
}
?>