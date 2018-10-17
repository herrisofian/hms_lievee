<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Master_descroom extends CI_Controller {
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
        $this->load->model('masterdescroom_model');
        //$this->load->library('check_logined_lib');
    }
	public function index()
	{   
        $this->data["data_get"]= $this->masterdescroom_model->getAllData();
		$this->load->view('master/master_descroom',$this->data);
	}
    public function deleteDescroom(){
        $id = $this->input->post('id');
        $this->masterdescroom_model->deleteDescRoom($id);
        $return['status'] = 1;
        $return['message'] = "Success Delete Description";
        echo json_encode($return);
    }
    public function addDescroom(){
        $code_desc = $this->input->post('code-desc');
        $name_desc = $this->input->post('name-desc');
        $status = $this->input->post('select-status');
        $data = array(
            'kode_description'=>$code_desc,
            'nama_description'=>$name_desc,
            'status'=>$status,
            'date_created'=>date("Y-m-d H:i:s")
        );
        $this->masterdescroom_model->addNewDescRoom($data);

        $return['status'] = 1;
        $return['message'] = "Success Add New Description";
        echo json_encode($return);
    }
    public function getEditDescroom(){
        $id = $this->input->post('id');
        $getData = $this->masterdescroom_model->getDataById($id);
        $return['status'] = 1;
        $return['data'] = $getData;
        echo json_encode($return,JSON_FORCE_OBJECT);
    }
    public function updateDescroom(){
        $id = $this->input->post('edit-id-desc');
        $code_desc = $this->input->post('edit-code-desc');
        $name_desc = $this->input->post('edit-name-desc');
        $status = $this->input->post('edit-select-status');
        $data = array(
            'kode_description'=>$code_desc,
            'nama_description'=>$name_desc,
            'status'=>$status
        );
        $this->masterdescroom_model->updateDescRoom($data,$id);
        $return['status'] = 1;
        $return['message'] = "Success Update Existing";
        echo json_encode($return);
    }
}
