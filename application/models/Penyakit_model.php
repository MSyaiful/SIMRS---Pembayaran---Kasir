<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Penyakit_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get penyakit by id
     */
    function get_penyakit($id)
    {
        return $this->db->get_where('penyakit',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all penyakit
     */
    function get_all_penyakit()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('penyakit')->result_array();
    }
        
    /*
     * function to add new penyakit
     */
    function add_penyakit($params)
    {
        $this->db->insert('penyakit',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update penyakit
     */
    function update_penyakit($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('penyakit',$params);
    }
    
    /*
     * function to delete penyakit
     */
    function delete_penyakit($id)
    {
        return $this->db->delete('penyakit',array('id'=>$id));
    }
}
