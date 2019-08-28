<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Obat extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
    } 

    /*
     * Listing of obat
     */
    function index()
    {
        $data['obat'] = $this->Obat_model->get_all_obat();
        
        $data['_view'] = 'obat/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new obat
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nama_obat' => $this->input->post('nama_obat'),
				'hrg_obat' => $this->input->post('hrg_obat'),
            );
            
            $obat_id = $this->Obat_model->add_obat($params);
            redirect('obat/index');
        }
        else
        {            
            $data['_view'] = 'obat/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a obat
     */
    function edit($id)
    {   
        // check if the obat exists before trying to edit it
        $data['obat'] = $this->Obat_model->get_obat($id);
        
        if(isset($data['obat']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nama_obat' => $this->input->post('nama_obat'),
					'hrg_obat' => $this->input->post('hrg_obat'),
                );

                $this->Obat_model->update_obat($id,$params);            
                redirect('obat/index');
            }
            else
            {
                $data['_view'] = 'obat/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The obat you are trying to edit does not exist.');
    } 

    /*
     * Deleting obat
     */
    function remove($id)
    {
        $obat = $this->Obat_model->get_obat($id);

        // check if the obat exists before trying to delete it
        if(isset($obat['id']))
        {
            $this->Obat_model->delete_obat($id);
            redirect('obat/index');
        }
        else
            show_error('The obat you are trying to delete does not exist.');
    }
    
}