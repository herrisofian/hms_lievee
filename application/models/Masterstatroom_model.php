<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Masterstatroom_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }
    public function getAllData(){
        $data = false;
        $query = $this->db->get('mst_status_room'); 
        foreach($query->result_array() as $row):
                $data[] = $row;
        endforeach;
        return $data;
    }
    public function getDataById($id){
        $data = false;
        $this->db->select('*');
        $this->db->from('mst_status_room');
        $this->db->where('id_status_room',$id);
        $query = $this->db->get();
        foreach($query->result_array() as $row):
                $data[] = $row;
        endforeach;
        return $data;
    }
    public function deleteStatRoom($id){
        $this->db->where('id_status_room', $id);
        $this->db->delete('mst_status_room');
        return true;
    }
    public function addNewStatRoom($data){
        $this->db->insert('mst_status_room', $data);
        return true;
    }
    public function updateStatRoom($data,$id){
        $this->db->where('id_status_room', $id);
        $this->db->update('mst_status_room', $data);
    }
}