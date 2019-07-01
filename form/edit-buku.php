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
    $buku_c = $library->select_jenis();
    $select_buku = $library->get_buku($_GET['kode_buku']);
?>
<div class="overlay">
    <div class="modal">
        <h2>Edit Data Buku</h2>
        <div class="content">
            <form action="../data/editbuku-procces.php" method="POST">
                <label>Kode Buku</label>
                <input type="hidden" name="kode" value="<?php echo $select_buku['kode_buku_1151705001']; ?>" />
                <input type="text" class="tambah" value="<?php echo $select_buku['kode_buku_1151705001']; ?>" disabled />
                <label>Judul</label>
                <input type="text" name="judul" class="tambah" value="<?php echo $select_buku['judul_buku_1151705001']; ?>" required />
                <label>Jenis</label>
                <select name="jenis" class="select-modal">
                    <?php foreach($buku_c as $data): ?>
                        <option value="<?php echo $data['jenis_buku_1151705001']; ?>" <?php echo ($select_buku['jenis_buku_1151705001'] == $data['jenis_buku_1151705001'])?"selected": ""; ?>><?php echo ucwords($data['nama_jns_buku_1151705001']); ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Pengarang</label>
                <input type="text" name="pengarang" class="tambah" value="<?php echo $select_buku['pengarang_buku_1151705001']; ?>" required />
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="tambah" value="<?php echo $select_buku['penerbit_buku_1151705001']; ?>" required />
                <label>Tahun Terbit</label>
                <select name="thn_terbit" class="select-modal">
                    <?php for($x = 1980; $x <= 2019; $x++){ ?>
                        <option value="<?php echo $x; ?>" <?php echo ($select_buku['thn_terbit_1151705001'] == $x)?"selected": ""; ?>><?php echo $x; ?></option>
                    <?php } ?>
                </select>
                <label>Tgl. Entry</label>
                <input type="date" name="tgl_entry" class="tambah" value="<?php echo $select_buku['tgl_entry_1151705001']; ?>" required />
                <label>Tgl. Update</label>
                <input type="date" name="tgl_update" class="tambah" value="<?php echo $select_buku['tgl_entry_1151705001']; ?>" required />
                <label>Creator</label>
                <input type="text" name="creator" class="tambah" value="<?php echo $select_buku['creator_1151705001']; ?>" required />

                <input type="submit" name="edit" value="Edit Buku" />
                <small>* Note here</small>
            </form>
        </div>
    </div>
</div>
</body>
</html>
