<?php 
class Puestos_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get puesto by id
     */
    function get_puesto($id)
    {
        return $this->db->get_where('puestos',array('id'=>$id))->row_array();
    }

    /*
     * Get all puestos
     */
    function get_all_puestos()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('puestos')->result_array();
    }

    /*
     * function to add new puesto
     */
    function add_puesto($params)
    {
        $this->db->insert('puestos',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update puesto
     */
    function update_puesto($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('puestos',$params);
    }
    
    /*
     * function to delete puesto
     */
    function delete_puesto($id)
    {
        return $this->db->delete('puestos',array('id'=>$id));
    }        

 }

 ?>