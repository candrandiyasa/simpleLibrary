<div id="modal-user" class="overlay">
    <a href="#" class="cancel"></a>
    <div class="modal center-content">
        <h2>Your Account</h2>
        <div class="content">
            <?php 
                $get_pass = $library->get_user($_SESSION['logged_id']);
            ?>
            <form action="../data/ubahpass-procces.php" method="POST">
                <input type="hidden" value="<?php echo $get_pass['username_1151705001'] ?>" name="username"/>
                <label>Ubah Password</label>
                <input type="password" value="<?php echo $get_pass['password_1151705001'] ?>" name="pass" class="tambah"/>
                <br>
                <input type="submit" name="tambah" value="Ubah Password" style="margin: 0 auto;"/>
                <small>* Note here</small>
            </form>
        </div>
    </div>
</div>