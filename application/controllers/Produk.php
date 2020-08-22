<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('M_Produk', 'MPro');
		$this->load->library('form_validation');
		
		$this->form_validation->set_error_delimiters('<small style="color: red;">', '</small>');

		$this->form_validation->set_rules('name', 'Nama Produk', 'trim|required');
		$this->form_validation->set_rules('ket', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|integer');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required|integer');
	}

	public function index()
	{
		$allProduk = $this->MPro->getAllProduk();
		$this->load->view('produk/index', [
			'allProduk' => $allProduk
		]);
	}
	
	public function tambah_produk()
	{
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('produk/tambah_produk');
		}
		else
		{
			$this->MPro->addProduk();
			redirect(base_url());
		}
	}

	public function edit_produk($id)
	{
		$produk = $this->MPro->getProdukById($id);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('produk/edit_produk', [
				'produk' => $produk
			]);
		}
		else
		{
			$this->MPro->updateProduk($id);
			redirect(base_url());
		}
	}

	public function hapus_produk($id)
	{
		$this->MPro->hapusProduk($id);
		redirect(base_url());
	}
}
