<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_menu');
		$this->load->model('m_kategori');
		$this->load->library('upload');
		$this->load->model('m_gallery');
	}


	function index(){
		$x['get_all_produk1']=$this->m_menu->get_all_produk(2,0);
		$x['get_all_produk2']=$this->m_menu->get_all_produk(2,2);
		$x['get_all_produk3']=$this->m_menu->get_all_produk(2,4);
		$x['hot_promo1']=$this->m_menu->hot_promo(2,0);
		$x['hot_promo2']=$this->m_menu->hot_promo(2,2);
		$x['hot_promo3']=$this->m_menu->hot_promo(2,4);
		$x['get_all_kategori']=$this->m_kategori->get_all_kategori();
		$this->load->view('kiosbintuni/home',$x);
	}

}