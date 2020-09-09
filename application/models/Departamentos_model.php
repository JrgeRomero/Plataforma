<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Departamentos_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get departamento by id
     */
    function get_departamento($id)
    {
        return $this->db->get_where('departamentos',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all departamentos
     */
    function get_all_departamentos()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('departamentos')->result_array();
    }
        
    /*
     * function to add new departamento
     */
    function add_departamento($params)
    {
        $this->db->insert('departamentos',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update departamento
     */
    function update_departamento($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('departamentos',$params);
    }
    
    /*
     * function to delete departamento
     */
    function delete_departamento($id)
    {
        return $this->db->delete('departamentos',array('id'=>$id));
    }
}
?>