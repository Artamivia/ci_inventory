<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\modelbarang;
use Config\View;

class Barang extends BaseController
{
    public function index()
    {
        $model = new modelbarang();
        $data = [
            'tampildata' => $model->tampildata()->getResult()
        ];  

        echo View('viewtampildata', $data);
    }
    public function tambah()
    { 
        helper('form');
        echo View('viewformtambah');
    }

    public function simpandata()
    {
        $data = [
            'kd_brg' => $this->request->getPost('kode'),
            'nm_brg' => $this->request->getPost('nama'),
            'kategori' => $this->request->getPost('kategori'),
            'satuan' => $this->request->getPost('satuan'),
            'stok' => $this->request->getPost('stok'),
            'merk' => $this->request->getPost('merk'),
            'spesifikasi' => $this->request->getPost('spesifikasi'),
        ];

        $model = new modelbarang();
        $simpan = $model->simpan($data);

        if($simpan) {
            return redirect()->to('Barang/index');
        }
    }

    public function hapus() 
    {
        $uri = service('uri');
        $kode = $uri->getSegment('3');

        $model = new modelbarang();
        $model->hapusdata($kode);

        return redirect()->to('Barang/index');
    }

    public function formedit()
    {
        helper('form');
        $uri = service('uri');
        $kode = $uri->getSegment('3');

        $model = new modelbarang();

        $ambildata = $model->ambildata($kode);
        if(count($ambildata->getResult()) > 0) 
        {
            $row = $ambildata->getRow();
            $data = [
                'kode' => $kode,
                'nama' => $row->nm_brg,
                'kategori' => $row->kategori,
                'satuan' => $row->satuan,
                'stok' => $row->stok,
                'merk' => $row->merk,
                'spesifikasi' => $row->spesifikasi,
            ];

            echo view('viewformedit', $data);
        }
    }

    public function updatedata()
    {
        $kode = $this->request->getPost('kode');
        $data = [
            'nm_brg' => $this->request->getPost('nama'),
            'kategori' => $this->request->getPost('kategori'),
            'satuan' => $this->request->getPost('satuan'),
            'stok' => $this->request->getPost('stok'),
            'merk' => $this->request->getPost('merk'),
            'spesifikasi' => $this->request->getPost('spesifikasi'),
        ];

        $model = new modelbarang();
        $simpan = $model->editdata($data, $kode);

        if($simpan) {
            return redirect()->to('Barang/index');
        }
    }
}
