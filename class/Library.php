<?php
require_once('../database/Database.php');

class Library extends Database{
    public function user_login($username, $password)
    {
        $sql = " SELECT * 
                 FROM login_access_1151705001
                 WHERE username_1151705001 = ?
                 AND password_1151705001 = ?
        ";
        return $this->getRow($sql, [$username, $password]);
    }

    public function user_name($username)
    {
        $sql = " SELECT * 
                 FROM login_access_1151705001
                 WHERE username_1151705001 = ?
        ";
        return $this->getRow($sql, [$username]);
    }

    public function all_buku()
    {
        $sql = "SELECT *
                FROM tb_buku_1151705001
                INNER JOIN jenis_buku_1151705001
                ON tb_buku_1151705001.jenis_buku_1151705001 = jenis_buku_1151705001.jenis_buku_1151705001 
        ";
        return $this->getRows($sql);
    }

    public function all_kategori()
    {
        $sql = "SELECT *
                FROM jenis_buku_1151705001
                ORDER BY jenis_buku_1151705001 ASC 
        ";
        return $this->getRows($sql);
    }

    public function select_jenis()
    {
        $sql = "SELECT *
                FROM jenis_buku_1151705001 
                ORDER BY nama_jns_buku_1151705001 ASC
        ";
        return $this->getRows($sql);
    }

    public function add_buku($kode, $judul, $jenis, $pengarang, $penerbit, $thn_terbit, $tgl_entry, $tgl_update, $creator)
    {
        $sql = "INSERT INTO tb_buku_1151705001 (kode_buku_1151705001, judul_buku_1151705001, jenis_buku_1151705001, pengarang_buku_1151705001, penerbit_buku_1151705001, thn_terbit_1151705001, tgl_entry_1151705001, tgl_update_1151705001, creator_1151705001, stock_buku_1151705001)
                VALUES(?,?,?,?,?,?,?,?,?,?)
        ";
		return $this->insertRow($sql, [$kode, $judul, $jenis, $pengarang, $penerbit, $thn_terbit, $tgl_entry, $tgl_update, $creator, 0]);
    }

    public function add_kategori($kategori, $keterangan)
    {
        $sql = "INSERT INTO jenis_buku_1151705001 (nama_jns_buku_1151705001, ket_jenis_1151705001)
                VALUES(?,?)
        ";
		return $this->insertRow($sql, [$kategori, $keterangan]);
    }

    public function get_buku($kode_buku)
	{
		$sql = "SELECT *
                FROM tb_buku_1151705001 
                WHERE kode_buku_1151705001 = $kode_buku
        ";
		return $this->getRow($sql, [$kode_buku]);
    }

    public function get_kategori($jenis)
	{
		$sql = "SELECT *
                FROM jenis_buku_1151705001 
                WHERE jenis_buku_1151705001 = $jenis
        ";
		return $this->getRow($sql, [$jenis]);
    }

    public function get_user($user)
	{
		$sql = "SELECT *
                FROM login_access_1151705001 
                WHERE username_1151705001 = '".$user."'
        ";
		return $this->getRow($sql, [$user]);
    }

    public function edit_buku($kode, $judul, $jenis, $pengarang, $penerbit, $thn_terbit, $tgl_entry, $tgl_update, $creator)
	{
		$sql = "UPDATE tb_buku_1151705001 
				SET judul_buku_1151705001 = ?, jenis_buku_1151705001 = ?, pengarang_buku_1151705001 = ?, penerbit_buku_1151705001 = ?, thn_terbit_1151705001 = ?, tgl_entry_1151705001 = ?, tgl_update_1151705001 = ?, creator_1151705001 = ?, stock_buku_1151705001 = ?
                WHERE kode_buku_1151705001 = ?
        ";
		return $this->updateRow($sql, [$judul, $jenis, $pengarang, $penerbit, $thn_terbit, $tgl_entry, $tgl_update, $creator, 0, $kode]);
    }

    public function edit_kategori($jenis, $kategori, $keterangan)
	{
		$sql = "UPDATE jenis_buku_1151705001 
				SET nama_jns_buku_1151705001 = ?, ket_jenis_1151705001 = ?
                WHERE jenis_buku_1151705001 = ?
        ";
		return $this->updateRow($sql, [$kategori, $keterangan, $jenis]);
    }

    public function edit_pass($user, $pass)
	{
		$sql = "UPDATE login_access_1151705001 
				SET password_1151705001 = ?
                WHERE username_1151705001 = ?
        ";
		return $this->updateRow($sql, [$pass, $user]);
    }

    public function del_buku($kode_buku)
	{
		$sql = "DELETE FROM tb_buku_1151705001
                WHERE kode_buku_1151705001 = ?
        ";
		return $this->deleteRow($sql, [$kode_buku]);
    }
    
    public function del_kategori($jenis)
	{
		$sql = "DELETE FROM jenis_buku_1151705001
                WHERE jenis_buku_1151705001 = ?
        ";
		return $this->deleteRow($sql, [$jenis]);
	}
}

$library = new Library();

?>