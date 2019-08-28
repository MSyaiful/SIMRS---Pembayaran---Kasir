<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Penyakit extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Penyakit_model');
    } 

    /*
     * Listing of penyakit
     */
    function index()
    {
        $data['penyakit'] = $this->Penyakit_model->get_all_penyakit();
        
        $data['_view'] = 'penyakit/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new penyakit
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'jns_penyakit' => $this->input->post('jns_penyakit'),
				'tindakan' => $this->input->post('tindakan'),
				'hrg_tindakan' => $this->input->post('hrg_tindakan'),
            );
            
            $penyakit_id = $this->Penyakit_model->add_penyakit($params);
            redirect('penyakit/index');
        }
        else
        {            
            $data['_view'] = 'penyakit/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a penyakit
     */
    function edit($id)
    {   
        // check if the penyakit exists before trying to edit it
        $data['penyakit'] = $this->Penyakit_model->get_penyakit($id);
        
        if(isset($data['penyakit']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'jns_penyakit' => $this->input->post('jns_penyakit'),
					'tindakan' => $this->input->post('tindakan'),
					'hrg_tindakan' => $this->input->post('hrg_tindakan'),
                );

                $this->Penyakit_model->update_penyakit($id,$params);            
                redirect('penyakit/index');
            }
            else
            {
                $data['_view'] = 'penyakit/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The penyakit you are trying to edit does not exist.');
    } 

    /*
     * Deleting penyakit
     */
    function remove($id)
    {
        $penyakit = $this->Penyakit_model->get_penyakit($id);

        // check if the penyakit exists before trying to delete it
        if(isset($penyakit['id']))
        {
            $this->Penyakit_model->delete_penyakit($id);
            redirect('penyakit/index');
        }
        else
            show_error('The penyakit you are trying to delete does not exist.');
    }
    
}