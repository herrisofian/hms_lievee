<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Master_bed extends CI_Controller {
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
        $this->load->model('masterbed_model');
        //$this->load->library('check_logined_lib');
    }
	public function index()
	{   
        $this->data["data_get"]= $this->masterbed_model->getAllData();
		$this->load->view('master/master_bed',$this->data);
	}
    public function deleteBed(){
        $id_bed = $this->input->post('id');
        $this->masterbed_model->deleteBed($id_bed);
        $return['status'] = 1;
        $return['message'] = "Success Delete Bed Type";
        echo json_encode($return);
    }
    public function addBed(){
        $code_bed = $this->input->post('code-bed');
        $name_bed = $this->input->post('name-bed');
        $descr = $this->input->post('descr-bed');
        $status = $this->input->post('select-status');
        $data = array(
            'kode_bed_type'=>$code_bed,
            'nama_bed_type'=>$name_bed,
            'status'=>$status,
            'description'=>$descr,
            'date_created'=>date("Y-m-d H:i:s")
        );
        $this->masterbed_model->addNewBed($data);

        $return['status'] = 1;
        $return['message'] = "Success Add New Bed Type";
        echo json_encode($return);
    }
    public function getEditBed(){
        $id_bed = $this->input->post('id');
        $getData = $this->masterbed_model->getDataById($id_bed);
        
        $return['status'] = 1;
        $return['data'] = $getData;
        $return['message'] = "Success Delete Bed Type";
        echo json_encode($return,JSON_FORCE_OBJECT);
    }
    public function updateBed(){
        $id_bed = $this->input->post('edit-id-bed');
        $code_bed = $this->input->post('edit-code-bed');
        $name_bed = $this->input->post('edit-name-bed');
        $descr = $this->input->post('edit-descr-bed');
        $status = $this->input->post('edit-select-status');
        $data = array(
            'kode_bed_type'=>$code_bed,
            'nama_bed_type'=>$name_bed,
            'status'=>$status,
            'description'=>$descr
        );
        $this->masterbed_model->updateBed($data,$id_bed);
        $return['status'] = 1;
        $return['message'] = "Success Update Existing";
        echo json_encode($return);
    }
}
