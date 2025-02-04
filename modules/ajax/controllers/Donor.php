<?php
class Donor extends Ajax_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('donor_model');
    }
    function list(){
        $get = $this->donor_model->all();
        $this->response('data',$get->result_array());
    }
}
?>