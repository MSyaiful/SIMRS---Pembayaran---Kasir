<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('Email_model');
  }
  public function index(){
    $this->load->view('email_view');
  }
  public function send(){
    $this->load->library('mailer');
    $email_penerima = $this->input->post('email_penerima');
    $subjek = $this->input->post('subjek');
    $pesan = $this->input->post('pesan');
    $attachment = $_FILES['attachment']['name'];
    $content = $this->load->view('email_sukses', array('pesan'=>$pesan), true); // Ambil isi file content.php dan masukan ke variabel $content
    $sendmail = array(
      'email_penerima'=>$email_penerima,
      'subjek'=>$subjek,
      'content'=>$content
    );
    if(empty($attachment)){ // Jika tanpa attachment
      $send = $this->mailer->send($sendmail); // Panggil fungsi send yang ada di librari Mailer
    }else{ // Jika dengan attachment
      $upload = $this->Email_model->upload();
      if($upload['status'] == 'sukses'){ // Jika file berhasil diupload
        // Tambahkan index attachment ke array sendmail yang isinya adalah path file yang akan dikirim
        $sendmail['attachment'] = $upload['file']['full_path'];
        $send = $this->mailer->send_with_attachment($sendmail); // Panggil fungsi send_with_attachment yang ada di librari Mailer
      }else{ // Jika file gagal diupload
        $send = array('status'=>'Gagal', 'message'=>$upload['error']);
      }
    }
    echo "<b>".$send['status']."</b><br />";
    echo $send['message'];
    echo "<br /><a href='".base_url("index.php/email")."'>Kembali ke Form</a>";
  }
}