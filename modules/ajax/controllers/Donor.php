<?php
class Donor extends Ajax_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('donor_model');
    }
    function donor_activer(){
        $this->db->where('id',$this->post('id'))->update('donor',array(
            'status' => $this->post('status')
        ));
        $this->response('status',true);
    }
    function list()
    {
        $get = $this->donor_model->all();
        $this->response('data', $get->result_array());
    }
    function add()
    {
        // echo '';
        if ($this->validation('adddonor')) {
            $this->db->insert('donor', [
                'name' => $this->post("name"),
                'mobile' => $this->post('mobile'),
                'pan' => $this->post("pan"),
                'state_id' => $this->post('state_id'),
                'city_id' => $this->post('city_id'),
                'image' => $this->file_up('image')
            ]);
            $this->response('url', base_url('admin/donor-receipt/' . base64_encode($this->db->insert_id())));
            $this->response('status', true);
        }
    }

    ///RECEIPT
    function add_receipt()
    {
        try {
            $this->form_validation->set_rules('receipt_no', 'Receipt No', 'required|is_unique[donor_receipts.receipt_no]');
            if ($this->validation()) {
                $this->token->decode($this->post('token'));
                $donor_id = $this->token->data('donor_id');
                $this->db->insert('donor_receipts', [
                    'donor_id' => $donor_id,
                    'amount' => $this->post('amount'),
                    'date' => $this->post('date'),
                    'receipt_no' => $this->post('receipt_no'),
                    'status' => 1
                ]);
                $this->response('status', true);
            }
        } catch (Exception $r) {
            $this->response('html', $r->getMessage());
        }
    }
    function delete_receipt(){
        $this->db->where('id', $this->post('id'));
        $this->db->delete('donor_receipts');
        $this->response('status', true);
    }

}
?>