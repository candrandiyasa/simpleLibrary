<?php 
    $buku = $library->select_jenis();
?>
<div id="modal-buku-tambah" class="overlay">
    <a href="#" class="cancel"></a>
    <div class="modal">
        <h2>Create Data Buku</h2>
        <div class="content">
            <form action="../data/tambahbuku-procces.php" method="POST">
                <label>Kode Buku</label>
                <input type="text" name="kode" class="tambah" placeholder="Kode / Barcode" required />
                <label>Judul</label>
                <input type="text" name="judul" class="tambah" placeholder="Judul Buku" required />
                <label>Jenis</label>
                <select name="jenis" class="select-modal">
                    <?php foreach($buku as $data): ?>
                        <option value="<?php echo $data['jenis_buku_1151705001']; ?>"><?php echo ucwords($data['nama_jns_buku_1151705001']); ?></option>
                    <?php endforeach; ?>
                </select>
                <label>Pengarang</label>
                <input type="text" name="pengarang" class="tambah" placeholder="Pengarang Buku" required />
                <label>Penerbit</label>
                <input type="text" name="penerbit" class="tambah" placeholder="Penerbit Buku" required />
                <label>Tahun Terbit</label>
                <select name="thn_terbit" class="select-modal">
                    <?php for($x = 1980; $x <= 2019; $x++){ ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                    <?php } ?>
                </select>
                <label>Tgl. Entry</label>
                <input type="date" name="tgl_entry" class="tambah" placeholder="Tanggal Entry" required />
                <label>Tgl. Update</label>
                <input type="date" name="tgl_update" class="tambah" placeholder="Tanggal Update" required />
                <label>Creator</label>
                <input type="text" name="creator" class="tambah" placeholder="Creator" required />

                <input type="submit" name="tambah" value="Tambah Buku" />
                <small>* Note here</small>
            </form>
        </div>
    </div>
</div>