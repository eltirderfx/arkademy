<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Produk extends CI_Model {

	public function getAllProduk()
	{
		return $this->db->order_by('nama_produk', 'ASC')->get('produk')->result();
	}

    public function addProduk()
    {
        return $this->db->insert('produk', [
            'nama_produk' => htmlspecialchars($this->input->post('name')),
            'keterangan' => htmlspecialchars($this->input->post('ket')),
            'harga' => htmlspecialchars($this->input->post('harga')),
            'jumlah' => htmlspecialchars($this->input->post('jumlah')),
        ]);
	}
	
	public function getProdukById($id)
	{
		return $this->db->get_where('produk', ['id' => $id])->row();
	}

	public function updateProduk($id)
	{
		return $this->db->where('id', $id)->update('produk', [
			'nama_produk' => htmlspecialchars($this->input->post('name')),
            'keterangan' => htmlspecialchars($this->input->post('ket')),
            'harga' => htmlspecialchars($this->input->post('harga')),
            'jumlah' => htmlspecialchars($this->input->post('jumlah')),
		]);
	}

	public function hapusProduk($id)
	{
		return $this->db->delete('produk', ['id' => $id]);
	}

}

/* End of file M_SubKat_Barang.php */
