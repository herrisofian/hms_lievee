<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Master_tower extends CI_Controller {
    protected $data;
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->library('parser');
        $this->load->model('mastertower_model');
        //$this->load->library('check_logined_lib');
    }
	public function index()
	{   
        $this->data["data_get"]= $this->mastertower_model->getAllData();
		$this->load->view('master/master_tower',$this->data);
	}
    public function deleteTower(){
        $id_tower = $this->input->post('id');
        $this->mastertower_model->deleteTower($id_tower);
        $return['status'] = 1;
        $return['message'] = "Success Delete Tower";
        echo json_encode($return);
    }
    public function addTower(){
        $code_tower = $this->input->post('code-tower');
        $name_tower = $this->input->post('name-tower');
        $descr = $this->input->post('descr-tower');
        $status = $this->input->post('select-status');
        $data = array(
            'kode_tower'=>$code_tower,
            'nama_tower'=>$name_tower,
            'status'=>$status,
            'description'=>$descr,
            'date_created'=>date("Y-m-d H:i:s")
        );
        $this->mastertower_model->addNewTower($data);

        $return['status'] = 1;
        $return['message'] = "Success Add New Tower";
        echo json_encode($return);
    }
    public function getEditTower(){
        $id_tower = $this->input->post('id');
        $getData = $this->mastertower_model->getDataById($id_tower);
        
        $return['status'] = 1;
        $return['data'] = $getData;
        echo json_encode($return,JSON_FORCE_OBJECT);
    }
    public function updateTower(){
        $id_tower = $this->input->post('edit-id-tower');
        $code_tower = $this->input->post('edit-code-tower');
        $name_tower = $this->input->post('edit-name-tower');
        $descr = $this->input->post('edit-descr-tower');
        $status = $this->input->post('edit-select-status');
        $data = array(
            'kode_tower'=>$code_tower,
            'nama_tower'=>$name_tower,
            'status'=>$status,
            'description'=>$descr
        );
        $this->mastertower_model->updateTower($data,$id_tower);
        $return['status'] = 1;
        $return['message'] = "Success Update Existing";
        echo json_encode($return);
    }
}
