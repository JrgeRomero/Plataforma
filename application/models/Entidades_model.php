<?php
 
class Entidades_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get entidad by id
     */
    function get_entidad($id)
    {
        return $this->db->get_where('entidades',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all entidades
     */
    function get_all_entidades()
    {
        $this->db->order_by('id', 'asc');
        return $this->db->get('entidades')->result_array();
    }
        
    /*
     * function to add new entidad
     */
    function add_entidad($params)
    {
        $this->db->insert('entidades',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update entidad
     */
    function update_entidad($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('entidades',$params);
    }
    
    /*
     * function to delete entidad
     */
    function delete_entidad($id)
    {
        return $this->db->delete('entidades',array('id'=>$id));
    }
}