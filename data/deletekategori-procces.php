<?php 
require_once('../class/Library.php');

$jenis = $_GET['jenis'];

$delete = $library->del_kategori($jenis);

$library->Disconnect();

if($delete){
    header('Location: ../admin/index.php#modal-kategori');
}else{
    header('Location: ../admin/index.php#modal-kategori');
}