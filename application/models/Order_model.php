<?php

class Order_model extends CI_model
{
    public function getHargaMakananByJenisMakanan($jenis_makanan)
    {
        $this->db->where('jenis_makanan', $jenis_makanan);
        $this->db->select('harga_makanan');

        return $this->db->get('foods')->result_array();
    }

    public function getHargaMinumanByJenisMinuman($jenis_minuman)
    {
        $this->db->where('jenis_minuman', $jenis_minuman);
        $this->db->select('harga_minuman');

        return $this->db->get('drinks')->result_array();
    }

    public function getHargaSeatById($id)
    {
        $this->db->where('id', $id);
        $this->db->select('price');

        return $this->db->get('seats')->result_array();
    }

    public function getAllDataOrder()
    {
        return $this->db->get('order')->result_array();
    }

    public function doneOrder($id)
    {
        $data = [
            "done" => 1
        ];

        $this->db->where('id_order', $id);
        $this->db->update('order', $data);
    }

    public function cancelOrder($id)
    {
        $this->db->where('id_order', $id);
        $this->db->delete('order');
    }
}
