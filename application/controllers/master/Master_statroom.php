<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Master_statroom extends CI_Controller {
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
        $this->load->model('masterstatroom_model');
        //$this->load->library('check_logined_lib');
    }
	public function index()
	{   
        $this->data["data_get"]= $this->masterstatroom_model->getAllData();
		$this->load->view('master/master_statroom',$this->data);
	}
    public function deleteStatRoom(){
        $id = $this->input->post('id');
        $this->masterstatroom_model->deleteStatRoom($id);
        $return['status'] = 1;
        $return['message'] = "Success Delete Status Room";
        echo json_encode($return);
    }
    public function addStatRoom(){
        $code_stat = $this->input->post('code-stat');
        $name_stat = $this->input->post('name-stat');
        $descr = $this->input->post('descr-stat');
        $status = $this->input->post('select-status');
        $data = array(
            'kode_status_room'=>$code_stat,
            'nama_status_room'=>$name_stat,
            'status'=>$status,
            'description'=>$descr,
            'date_created'=>date("Y-m-d H:i:s")
        );
        $this->masterstatroom_model->addNewStatRoom($data);

        $return['status'] = 1;
        $return['message'] = "Success Add New Status Room";
        echo json_encode($return);
    }
    public function getEditStatRoom(){
        $id = $this->input->post('id');
        $getData = $this->masterstatroom_model->getDataById($id);
        
        $return['status'] = 1;
        $return['data'] = $getData;
        echo json_encode($return,JSON_FORCE_OBJECT);
    }
    public function updateStatRoom(){
        $id = $this->input->post('edit-id-stat');
        $code_stat = $this->input->post('edit-code-stat');
        $name_stat = $this->input->post('edit-name-stat');
        $descr = $this->input->post('edit-descr-stat');
        $status = $this->input->post('edit-select-status');
        $data = array(
            'kode_status_room'=>$code_stat,
            'nama_status_room'=>$name_stat,
            'status'=>$status,
            'description'=>$descr
        );
        $this->masterstatroom_model->updateStatRoom($data,$id);
        $return['status'] = 1;
        $return['message'] = "Success Update Existing";
        echo json_encode($return);
    }
}
