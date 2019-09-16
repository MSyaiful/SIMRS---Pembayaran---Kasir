<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Email_model extends CI_Model {
    // Fungsi untuk melakukan proses upload file
    public function upload(){
        $config['upload_path'] = './tmp/';
        $config['allowed_types']  = array('pdf', 'docx', 'doc', 'xlsx', 'xls', 'csv', 'jpg', 'png'); // Set file yang diperbolehkan
        $config['max_size']  = '25000'; // Set max size 25.000 KB = 25 MB
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if($this->upload->do_upload('attachment')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('status' => 'sukses', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('status' => 'gagal', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
}