<div id="modal-kategori-tambah" class="overlay">
    <a href="#" class="cancel"></a>
    <div class="modal">
        <h2>Create Data Kategori</h2>
        <div class="content">
            <form action="../data/tambahkategori-procces.php" method="POST">
                <label>Kategori</label>
                <input type="text" name="kategori" class="tambah" placeholder="Kategori Buku" required />
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="tambah" placeholder="Keterangan" />
                
                <input type="submit" name="tambah" value="Tambah Kategori" />
                <small>* Note here</small>
            </form>
        </div>
    </div>
</div>