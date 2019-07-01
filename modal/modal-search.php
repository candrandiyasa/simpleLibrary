<div id="modal-search" class="overlay">
    <a href="#" class="cancel"></a>
    <div class="modal center-content">
        <h2>Your Keyword</h2>
        <?php 
            if(isset($_POST['search'])){     
                require_once('data/search-procces.php');    
        ?>
            <div class="content flex-row">
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
                    </tr>
                    <?php 
                    if(!empty($result)){
                        foreach($result as $data){ 
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
                        
                    </tr>
                    <?php } 
                    }else{ ?>
                    <tr>
                        <td colspan="9">No Record with your keyword</td>
                    </tr>
                    <?php 
                    }
                    ?>
                </table>
            </div>
        <?php 
            }else{ 
        ?>
            <div class="content flex-row">
                <h1>Something Wrong with Your Keyword, Please Try Again </h1>
            </div>
        <?php
            }
        ?>
    </div>
</div>