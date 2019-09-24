<?php

  
defined('BASEPATH') OR exit('No direct script access allowed');


include APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Rest extends REST_Controller {



    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('Stok_bahan_makanan_model');
    }


    //Menampilkan data
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $stok = $this->db->get('stok_bahan_makanan')->result();
        } else {
            $this->db->where('id', $id);
            $stok = $this->db->get('stok_bahan_makanan')->result();
        }
        $this->response($stok, 200);
    }

   //menambah data baru
    function index_post() {
        $data = array(
                    'id'           => $this->post('id'),
                    'nama_bahan'          => $this->post('nama_bahan'),
                    'kelompok_bahan'    => $this->post('kelompok_bahan'),
                    'jumlah_bahan'    => $this->post('jumlah_bahan'));
        $insert = $this->db->insert('stok_bahan_makanan', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Memperbarui data yang telah ada
    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'           => $this->put('id'),
                    'nama_bahan'          => $this->put('nama_bahan'),
                    'kelompok_bahan'    => $this->put('kelompok_bahan'),
                    'jumlah_bahan'    => $this->put('jumlah_bahan'));
        $update = $this->Stok_bahan_makanan_model->update_stok_bahan_makanan($id,$data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
     //Menghapus salah satu data 
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('stok_bahan_makanan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}

?>