<div id="modal-buku" class="overlay">
    <a href="#" class="cancel"></a>
    <div class="modal center-content">
        <h2>Master Data Buku</h2>
        <div class="content flex-row">
            <a href="#modal-buku-tambah" class="btn-created" title="Tambah Data">Tambah Data</a>
            <table>
                <tr>
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Jenis</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Thn. Terbit</th>
                    <th>Tgl. Entry</th>
                    <th>Tgl. Update</th>
                    <th>Creator</th>
                    <th width="100">Action</th>
                </tr>
                <?php 
                    $buku = $library->all_buku();
                    foreach($buku as $data){ 
                ?>
                <tr>
                    <td><?php echo $data['kode_buku_1151705001']; ?></td>
                    <td><?php echo $data['judul_buku_1151705001']; ?></td>
                    <td><?php echo $data['nama_jns_buku_1151705001']; ?></td>
                    <td><?php echo $data['pengarang_buku_1151705001']; ?></td>
                    <td><?php echo $data['penerbit_buku_1151705001']; ?></td>
                    <td><?php echo $data['thn_terbit_1151705001']; ?></td>
                    <td><?php echo $data['tgl_entry_1151705001']; ?></td>
                    <td><?php echo $data['tgl_update_1151705001']; ?></td>
                    <td><?php echo $data['creator_1151705001']; ?></td>
                    <td>
                        <a href="../form/edit-buku.php?kode_buku=<?php echo $data['kode_buku_1151705001']; ?>" class="act-ed" title="Edit Data">Ed</a> | 
                        <a href="../data/deletebuku-procces.php?kode_buku=<?php echo $data['kode_buku_1151705001']; ?>" class="act-de"  title="Delete Data">De</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>