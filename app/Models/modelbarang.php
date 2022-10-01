<?php

namespace App\Models;

use CodeIgniter\Model;

class modelbarang extends Model
{
    function __construct()
        {
            $this->db = db_connect();
        }

        function tampildata() 
        {
            return $this->db->table('tbl_barang')->get();
        }

        function simpan($data)
        {
            return $this->db->table('tbl_barang')->insert($data);
        }

        function hapusdata($kode)
        {
            return $this->db->table('tbl_barang')->delete(['kd_brg'=>$kode]);
        }

        function ambildata($kode)
        {
            return $this->db->table('tbl_barang')->getWhere(['kd_brg' => $kode]);
        }

        function editdata($data, $kode)
        {
            return $this->db->table('tbl_barang')->update($data, ['kd_brg' => $kode]);
        }
}  
