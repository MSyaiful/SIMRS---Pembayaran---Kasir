<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Card extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Card_model');
    } 

    /*
     * Listing of card
     */
    function index()
    {
        // $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('card/index?');
        $config['total_rows'] = $this->Card_model->get_all_card_count();
        // $this->pagination->initialize($config);

        $data['card'] = $this->Card_model->get_all_card($params);
        
        $data['_view'] = 'card/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new card
     */
    function add()
    {   
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'ID Card', 'required');
        $this->form_validation->set_rules('jns_card', 'Jenis Card', 'required');
        if ($this->form_validation->run() == FALSE)
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'jns_card' => $this->input->post('jns_card'),
            );
            
            $card_id = $this->Card_model->add_card($params);
            redirect('card/index');
        }
        else
        {            
            $data['_view'] = 'card/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a card
     */
    function edit($id)
    {   
        // check if the card exists before trying to edit it
        $data['card'] = $this->Card_model->get_card($id);
        
        if(isset($data['card']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'jns_card' => $this->input->post('jns_card'),
                );

                $this->Card_model->update_card($id,$params);            
                redirect('card/index');
            }
            else
            {
                $data['_view'] = 'card/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The card you are trying to edit does not exist.');
    } 

    /*
     * Deleting card
     */
    function remove($id)
    {
        $card = $this->Card_model->get_card($id);

        // check if the card exists before trying to delete it
        if(isset($card['id']))
        {
            $this->Card_model->delete_card($id);
            redirect('card/index');
        }
        else
            show_error('The card you are trying to delete does not exist.');
    }

    public function export(){
        // Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data_Card.xls");
        
        $data['card'] = $this->Card_model->get_all_card();
        $this->load->view('card/export', $data);
      }
    
}
