<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Masterbed_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }
    public function getAllData(){
        $data = false;
        $query = $this->db->get('mst_bed_type'); 
        foreach($query->result_array() as $row):
                $data[] = $row;
        endforeach;
        return $data;
    }
    public function getDataById($id){
        $data = false;
        $this->db->select('*');
        $this->db->from('mst_bed_type');
        $this->db->where('id_bed_type',$id);
        $query = $this->db->get();
        foreach($query->result_array() as $row):
                $data[] = $row;
        endforeach;
        return $data;
    }
    public function deleteBed($id){
        $this->db->where('id_bed_type', $id);
        $this->db->delete('mst_bed_type');
        return true;
    }
    public function addNewBed($data){
        $this->db->insert('mst_bed_type', $data);
        return true;
    }
    public function updateBed($data,$id){
        $this->db->where('id_bed_type', $id);
        $this->db->update('mst_bed_type', $data);
    }
}