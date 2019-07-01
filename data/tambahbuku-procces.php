<?php
require_once('../class/Library.php');

if(isset($_POST['tambah'])){
    $kode       = $_POST['kode'];
    $judul      = $_POST['judul'];
    $jenis      = $_POST['jenis'];
    $pengarang  = $_POST['pengarang'];
    $penerbit   = $_POST['penerbit'];
    $thn_terbit = $_POST['thn_terbit'];
    $tgl_entry  = $_POST['tgl_entry'];
    $tgl_update = $_POST['tgl_update'];
    $creator    = $_POST['creator'];

    $result = $library->add_buku($kode, $judul, $jenis, $pengarang, $penerbit, $thn_terbit, $tgl_entry, $tgl_update, $creator);
}

$library->Disconnect();

if($result){
    header('Location: ../admin/index.php#modal-buku');
}else{
    header('Location: ../admin/index.php#modal-buku-tambah');
}
?>