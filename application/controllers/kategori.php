<?php
class Kategori extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_menu');
		$this->load->model('m_order');
		$this->load->model('m_kategori');
        $this->load->library('upload');
        $this->load->helper('text');
	}

    function all()
    {
        $x['kategori_name']='SEMUA';
		$x['get_all_kategori']=$this->m_kategori->get_all_kategori();
		$x['get_produk_kategori']=$this->m_menu->get_all_produk();
		$this->load->view('kiosbintuni/kategori',$x);        
    }
	function id($kategori_id)
	{
        $x['kategori_name']=$this->m_menu->get_kategori_name($kategori_id)->kategori_nama;
		$x['get_all_kategori']=$this->m_kategori->get_all_kategori();
		$x['get_produk_kategori']=$this->m_menu->get_produk_kategori($kategori_id);
		$this->load->view('kiosbintuni/kategori',$x);

    }
}