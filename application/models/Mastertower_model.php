<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mastertower_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }
    public function getAllData(){
        $data = false;
        $query = $this->db->get('mst_tower'); 
        foreach($query->result_array() as $row):
                $data[] = $row;
        endforeach;
        return $data;
    }
    public function getDataById($id){
        $data = false;
        $this->db->select('*');
        $this->db->from('mst_tower');
        $this->db->where('id_tower',$id);
        $query = $this->db->get();
        foreach($query->result_array() as $row):
                $data[] = $row;
        endforeach;
        return $data;
    }
    public function deleteTower($id){
        $this->db->where('id_tower', $id);
        $this->db->delete('mst_tower');
        return true;
    }
    public function addNewTower($data){
        $this->db->insert('mst_tower', $data);
        return true;
    }
    public function updateTower($data,$id){
        $this->db->where('id_tower', $id);
        $this->db->update('mst_tower', $data);
    }
}