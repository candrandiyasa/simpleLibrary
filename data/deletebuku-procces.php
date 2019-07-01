<?php 
require_once('../class/Library.php');

$kode_buku = $_GET['kode_buku'];

$delete = $library->del_buku($kode_buku);

$library->Disconnect();

if($delete){
    header('Location: ../admin/index.php#modal-buku');
}else{
    header('Location: ../admin/index.php#modal-buku');
}