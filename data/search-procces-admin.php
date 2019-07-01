<?php
require_once('../database/Database.php');
$db = new Database();   

$key = $_POST['search'];

$sql = "SELECT *
        FROM tb_buku_1151705001
        INNER JOIN jenis_buku_1151705001
        ON tb_buku_1151705001.jenis_buku_1151705001 = jenis_buku_1151705001.jenis_buku_1151705001 
        WHERE judul_buku_1151705001 LIKE '%$key%' 
        OR pengarang_buku_1151705001 LIKE '%$key%'
        OR penerbit_buku_1151705001 LIKE '%$key%'
";

$result = $db->getRows($sql); 
?>