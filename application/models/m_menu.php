<?php
class M_menu extends CI_Model{

	function get_all_menu(){
		$hsl=$this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,LEFT(menu_harga_lama,2) AS harga_lama,LEFT(menu_harga_baru,2) AS harga_baru,menu_harga_lama,menu_harga_baru,menu_likes,menu_kategori_id,menu_kategori_nama,menu_gambar, menu_status FROM tbl_menu");
		return $hsl;	
	}

	function get_all_produk(){
		$hsl=$this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,menu_harga_lama AS harga_lama, menu_harga_baru AS harga_baru,menu_likes,menu_kategori_id,menu_kategori_nama,menu_gambar, menu_status FROM tbl_menu ORDER by menu_id DESC");
		return $hsl;	
	}

	function get_kategori_name($kategori_id)
	{
		$hsl=$this->db->query("SELECT kategori_nama FROM tbl_kategori WHERE kategori_id='$kategori_id'");
		return $hsl->row();
	}

	function get_produk_kategori($kategori_id){
		$hsl=$this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,menu_harga_lama AS harga_lama, menu_harga_baru AS harga_baru,menu_likes,menu_kategori_id,menu_kategori_nama,menu_gambar, menu_status, kategori_nama FROM tbl_menu JOIN tbl_kategori ON tbl_kategori.kategori_id=tbl_menu.menu_kategori_id WHERE menu_kategori_id='$kategori_id' ORDER by menu_id DESC");
		return $hsl;	
	}

	function get_random_produk(){
		$hsl=$this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,menu_harga_lama AS harga_lama, menu_harga_baru AS harga_baru,menu_likes,menu_kategori_id,menu_kategori_nama,menu_gambar, menu_status FROM tbl_menu ORDER by RAND() LIMIT 10");
		return $hsl;	
	}

	function get_all_stand(){
		$hsl=$this->db->query("SELECT * FROM tbl_stand");
		return $hsl;	
	}

	function simpan_menu($nama,$deskripsi,$harga,$kategori,$kat_nama,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_menu (menu_nama,menu_deskripsi,menu_harga_baru,menu_kategori_id,menu_kategori_nama,menu_gambar) VALUES ('$nama','$deskripsi','$harga','$kategori','$kat_nama','$gambar')");
		return $hsl;
	}

	//UPDATE MENU DENGAN GAMBAR //
	function update_menu_tanpa_harga_baru($kode,$nama,$deskripsi,$harga_lama,$kategori,$kat_nama,$gambar){
		$hsl=$this->db->query("UPDATE tbl_menu set menu_nama='$nama',menu_deskripsi='$deskripsi',menu_harga_baru='$harga_lama',menu_kategori_id='$kategori',menu_kategori_nama='$kat_nama',menu_gambar='$gambar' where menu_id='$kode'");
		return $hsl;
	}
	function update_menu_dengan_harga_baru($kode,$nama,$deskripsi,$harga_lama,$harga_baru,$kategori,$kat_nama,$gambar){
		$hsl=$this->db->query("UPDATE tbl_menu set menu_nama='$nama',menu_deskripsi='$deskripsi',menu_harga_lama='$harga_lama',menu_harga_baru='$harga_baru',menu_kategori_id='$kategori',menu_kategori_nama='$kat_nama',menu_gambar='$gambar' where menu_id='$kode'");
		return $hsl;
	}
	//END EDIT MENU DENGAN GAMBAR//

	//UPDATE MENU TANPA GAMBAR//
	function update_menu_tanpa_harga_baru_tanpa_gambar($kode,$nama,$deskripsi,$harga_lama,$kategori,$kat_nama){
		$hsl=$this->db->query("UPDATE tbl_menu set menu_nama='$nama',menu_deskripsi='$deskripsi',menu_harga_baru='$harga_lama',menu_kategori_id='$kategori',menu_kategori_nama='$kat_nama' where menu_id='$kode'");
		return $hsl;
	}
	function update_menu_dengan_harga_baru_tanpa_gambar($kode,$nama,$deskripsi,$harga_lama,$harga_baru,$kategori,$kat_nama){
		$hsl=$this->db->query("UPDATE tbl_menu set menu_nama='$nama',menu_deskripsi='$deskripsi',menu_harga_lama='$harga_lama',menu_harga_baru='$harga_baru',menu_kategori_id='$kategori',menu_kategori_nama='$kat_nama' where menu_id='$kode'");
		return $hsl;
	}
	//END UPDATE MENU TANPA GAMBAR//

	function hapus_menu($kode){
		$hsl=$this->db->query("DELETE FROM tbl_menu where menu_id='$kode'");
		return $hsl;
	}


	//MODEL UNTUK MOBILE
	function hot_promo($limit, $offset){
		$hsl=$this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,menu_harga_lama AS harga_lama,menu_harga_baru AS harga_baru,menu_likes,menu_kategori_id,menu_kategori_nama,menu_gambar FROM tbl_menu WHERE (menu_harga_lama-menu_harga_baru)>=0 ORDER BY (menu_harga_lama-menu_harga_baru) DESC LIMIT $limit OFFSET $offset");
		return $hsl;
	}
	function makanan(){
		$hsl=$this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,LEFT(menu_harga_lama,2) AS harga_lama,LEFT(menu_harga_baru,2) AS harga_baru,menu_harga_lama,menu_harga_baru,menu_likes,menu_kategori_id,menu_kategori_nama,menu_gambar FROM tbl_menu WHERE menu_kategori_id='1' ORDER BY menu_id DESC");
		return $hsl;
	}
	function minuman(){
		$hsl=$this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,LEFT(menu_harga_lama,2) AS harga_lama,LEFT(menu_harga_baru,2) AS harga_baru,menu_harga_lama,menu_harga_baru,menu_likes,menu_kategori_id,menu_kategori_nama,menu_gambar FROM tbl_menu WHERE menu_kategori_id='2' ORDER BY menu_id DESC");
		return $hsl;
	}
	function snack(){
		$hsl=$this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,LEFT(menu_harga_lama,2) AS harga_lama,LEFT(menu_harga_baru,2) AS harga_baru,menu_harga_lama,menu_harga_baru,menu_likes,menu_kategori_id,menu_kategori_nama,menu_gambar FROM tbl_menu WHERE menu_kategori_id='3' ORDER BY menu_id DESC");
		return $hsl;
	}
	function favorite(){
		$hsl=$this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,LEFT(menu_harga_lama,2) AS harga_lama,LEFT(menu_harga_baru,2) AS harga_baru,menu_harga_lama,menu_harga_baru,menu_likes,menu_kategori_id,menu_kategori_nama,menu_gambar FROM tbl_menu WHERE menu_likes <> 0 ORDER BY menu_likes DESC");
		return $hsl;
	}

	function detail_menu($kode){
		$hsl=$this->db->query("SELECT tbl_menu.*,menu_harga_lama AS harga_lama,menu_harga_baru AS harga_baru FROM tbl_menu where menu_id='$kode'");
		return $hsl;	
	}

	function add_like($kode){
		$hsl=$this->db->query("UPDATE tbl_menu SET menu_likes=menu_likes+1 where menu_id='$kode'");
		return $hsl;	
	}

	function get_menu_stand($stand_id){
		$hsl=$this->db->query("SELECT menu_id,menu_nama,menu_deskripsi,LEFT(menu_harga_lama,2) AS harga_lama,LEFT(menu_harga_baru,2) AS harga_baru,menu_harga_lama,menu_harga_baru,menu_likes,menu_kategori_id,menu_kategori_nama,menu_gambar FROM tbl_menu WHERE menu_stand_id='$stand_id' ORDER BY menu_id DESC");
		return $hsl;
	}


	//END MODEL UNTUK MOBILE

}