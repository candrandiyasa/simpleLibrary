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
    <title>Edit Buku - Simple Library System</title>

    <link rel="stylesheet" href="../assets/css/actionCSS.css" />
</head>
<body>
<?php 
    $select_kategori = $library->get_kategori($_GET['jenis']);
?>
<div class="overlay">
    <div class="modal">
        <h2>Edit Data Buku</h2>
        <div class="content">
            <form action="../data/editkategori-procces.php" method="POST">
                <input type="hidden" name="jenis" value="<?php echo $select_kategori['jenis_buku_1151705001']; ?>" />
                <label>Kategori</label>
                <input type="text" name="kategori" class="tambah" value="<?php echo $select_kategori['nama_jns_buku_1151705001']; ?>" required />
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="tambah" value="<?php echo $select_kategori['ket_jenis_1151705001']; ?>" required />
                
                <input type="submit" name="edit" value="Edit Kategori" />
                <small>* Note here</small>
            </form>
        </div>
    </div>
</div>
</body>
</html>
