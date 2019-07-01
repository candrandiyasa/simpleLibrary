<div id="modal-kategori" class="overlay">
    <a href="#" class="cancel"></a>
    <div class="modal center-content">
        <h2>Master Data Kategori</h2>
        <div class="content flex-row">
            <a href="#modal-kategori-tambah" class="btn-created" title="Tambah Data">Tambah Data</a>
            <table>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Ket</th>
                    <th width="100">Action</th>
                </tr>
                <?php 
                    $k_show = $library->all_kategori();
                    foreach($k_show as $kdata){ 
                ?>
                <tr>
                    <td><?php echo $kdata['jenis_buku_1151705001']; ?></td>
                    <td><?php echo $kdata['nama_jns_buku_1151705001']; ?></td>
                    <td><?php echo $kdata['ket_jenis_1151705001']; ?></td>
                    <td>
                        <a href="../form/edit-kategori.php?jenis=<?php echo $kdata['jenis_buku_1151705001']; ?>" class="act-ed" title="Edit Data">Ed</a> | 
                        <a href="../data/deletekategori-procces.php?jenis=<?php echo $kdata['jenis_buku_1151705001']; ?>" class="act-de"  title="Delete Data">De</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>