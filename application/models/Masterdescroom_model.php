<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Masterdescroom_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }
    public function getAllData(){
        $data = false;
        $query = $this->db->get('mst_description'); 
        foreach($query->result_array() as $row):
                $data[] = $row;
        endforeach;
        return $data;
    }
    public function getDataById($id){
        $data = false;
        $this->db->select('*');
        $this->db->from('mst_description');
        $this->db->where('id_description',$id);
        $query = $this->db->get();
        foreach($query->result_array() as $row):
                $data[] = $row;
        endforeach;
        return $data;
    }
    public function deleteDescRoom($id){
        $this->db->where('id_description', $id);
        $this->db->delete('mst_description');
        return true;
    }
    public function addNewDescRoom($data){
        $this->db->insert('mst_description', $data);
        return true;
    }
    public function updateDescRoom($data,$id){
        $this->db->where('id_description', $id);
        $this->db->update('mst_description', $data);
    }
}