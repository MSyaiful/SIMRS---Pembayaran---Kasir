<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Home
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('Pasien_model');
  }

  public function index()
  {
    $data['title'] = "Home SIMRS Pembayaran";
    $this->renderHome($data);
  }

  // public function pasien()
  // {
  //   $data['title'] = "List Data Pasien";
  //   $data['home'] = 'pasien';
  //   $data['pasien'] = $this->Pasien_model->getAll()->result();
  //   $this->renderHome($data);
  // }

  // public function inputpasien()
  // {
  //   $data['title'] = "Form Input Data Pasien";
  //   $data['home'] = 'inputpasien';
  //   $this->renderHome($data);
  // }

  public function renderHome($data)
  {
    $this->load->view('home/homepage', $data);
  }

  // public function hapuspasien($id)
  // {
  //   $del = $this->Pasien_model->deleteOne($id);
  //   if($del==TRUE){
  //     echo "Data Pasien Berhasil Dihapus";
  //   }else{
  //     echo "Data Pasien Gagal Dihapus";
  //   }
  // }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */