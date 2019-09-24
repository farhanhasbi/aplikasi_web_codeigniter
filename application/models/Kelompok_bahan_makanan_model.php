<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Kelompok_bahan_makanan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get kelompok_bahan_makanan by id
     */
    function get_kelompok_bahan_makanan($id_kel)
    {
        return $this->db->get_where('kelompok_bahan_makanan',array('id_kel'=>$id_kel))->row_array();
    }
        
    /*
     * Get all kelompok_bahan_makanan
     */
    function get_all_kelompok_bahan_makanan()
    {
        $this->db->order_by('id_kel', 'desc');
        return $this->db->get('kelompok_bahan_makanan')->result_array();
    }
        
    /*
     * function to add new kelompok_bahan_makanan
     */
    function add_kelompok_bahan_makanan($params)
    {
        $this->db->insert('kelompok_bahan_makanan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kelompok_bahan_makanan
     */
    function update_kelompok_bahan_makanan($id_kel,$params)
    {
        $this->db->where('id_kel',$id_kel);
        return $this->db->update('kelompok_bahan_makanan',$params);
    }
    
    /*
     * function to delete kelompok_bahan_makanan
     */
    function delete_kelompok_bahan_makanan($id_kel)
    {
        return $this->db->delete('kelompok_bahan_makanan',array('id_kel'=>$id_kel));
    }
}
