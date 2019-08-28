<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Obat_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get obat by id
     */
    function get_obat($id)
    {
        return $this->db->get_where('obat',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all obat
     */
    function get_all_obat()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('obat')->result_array();
    }
        
    /*
     * function to add new obat
     */
    function add_obat($params)
    {
        $this->db->insert('obat',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update obat
     */
    function update_obat($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('obat',$params);
    }
    
    /*
     * function to delete obat
     */
    function delete_obat($id)
    {
        return $this->db->delete('obat',array('id'=>$id));
    }
}