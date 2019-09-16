<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Restapi extends CI_Controller {

    use REST_Controller {
        REST_Controller::__construct as private __resTraitConstruct;
    }

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->__resTraitConstruct();
        $this->load->database();
        $this->load->model('Pasien_model');
    }

    //Menampilkan data pasien
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $coba_simrs = $this->db->get('pasien')->result();
        } else {
            $this->db->where('id', $id);
            $coba_simrs = $this->db->get('pasien')->result();
        }
        $this->response($coba_simrs, 200);
    }

    //Menambahkan data pasien
    function index_post() {
        $data = array(
            'jns_kelamin' => $this->input->post('jns_kelamin'),
            'jns_kamar' => $this->input->post('jns_kamar'),
            'jns_penyakit' => $this->input->post('jns_penyakit'),
            'nama_pasien' => $this->input->post('nama_pasien'),
            'tgl_masuk' => $this->input->post('tgl_masuk'),
            'tgl_keluar' => $this->input->post('tgl_keluar'),
            'alamat' => $this->input->post('alamat'),
            'no_tlp' => $this->input->post('no_tlp'));
        $insert = $this->db->insert('pasien', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data pasien yang telah ada
    function index_put() {
        $id = $this->put('id');
        $data = array(
            'jns_kelamin' => $this->put('jns_kelamin'),
            'jns_kamar' => $this->put('jns_kamar'),
            'jns_penyakit' => $this->put('jns_penyakit'),
            'nama_pasien' => $this->put('nama_pasien'),
            'tgl_masuk' => $this->put('tgl_masuk'),
            'tgl_keluar' => $this->put('tgl_keluar'),
            'alamat' => $this->put('alamat'),
            'no_tlp' => $this->put('no_tlp'));
        $update = $this->Pasien_model->update_pasien($id,$data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data pasien
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('pasien');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>
