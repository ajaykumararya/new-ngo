<?php
class Member extends Ajax_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
    }
    function get_unverified_list()
    {
        $this->response('data', $this->member_model->unverified_list()->result_array());
    }
    function get_verified_list()
    {
        $data = [];
        foreach ($this->member_model->verified_list()->result_array() as $row) {
            $row['buttons'] = '';
            if (PATH == 'aiwnpc') {
                $row['buttons'] = '
                    <a title="Id Card" href="' . base_url('id-card/' . base64_encode($row['id'])) . '" target="_blank" class="btn btn-primary">
                        <i class="fa fa-print"></i>
                    </a>
                    <a title="Certificate" href="' . base_url('certificate/' . base64_encode($row['id'])) . '" target="_blank" class="btn btn-info">
                        <i class="fa fa-print"></i>
                    </a>                    
                    <a title="Appoinment Letter" href="' . base_url('appoinment-letter/' . base64_encode($row['id'])) . '" target="_blank" class="btn btn-warning">
                        <i class="fa fa-print"></i>
                    </a>
                ';
            } else {
                $row['buttons'] = '<a href="${base_url}print-membership/' . base64_encode($row['id']) . '" target="_blank" class="btn btn-primary">
                                        <i class="fa fa-print"></i>
                                    </a>';
            }
            $data[] = $row;
        }
        $this->response('data', $data);
    }
    function delete_member($id)
    {
        $this->db->where('id', $id)->delete('members');
        $this->response('status', true);
    }
    function approve()
    {
        $this->db->where('id', $this->post('id'))->update('members', [
            'status' => 1
        ]);
        $this->response('status', true);
    }

    function update()
    {
        // $this->response('data')
        if ($this->validation('update_membership_form')) {
            // $this->response('status','hii');
            $memberId = base64_decode($this->post('userid'));
            $profile_photo = $this->file_up('profile');
            $doc_file = $this->file_up('doc_file');
            $other_doc = $this->file_up('other_doc');
            $data = [
                'name' => $this->post('name'),
                'father_name' => $this->post('father_name'),
                'gender' => $this->post('gender'),
                'dob' => date('d-m-Y', strtotime($this->post('my_dob'))),
                'profession' => $this->post("profession"),
                'blood_group' => $this->post('blood_group'),
                'state_id' => $this->post('state_id'),
                'city_id' => $this->post('city_id'),
                'mobile' => $this->post("mobile"),
                'aadhar_no' => $this->post('aadhar_no'),
                'address' => $this->post('address'),
                'pincode' => $this->post('pincode'),
                'email' => $this->post('email'),
                'authority' => $this->post('authority'),
                'doc_type' => $this->post('doc_type'),
                'validity_start' => $this->post('validity_start'),
                'validity_end' => $this->post('validity_end'),
                'firm_name' => $this->post('firm_name')
            ];
            if ($profile_photo)
                $data['profile_img'] = $profile_photo;

            if ($doc_file)
                $data['doc_file'] = $doc_file;

            if ($other_doc)
                $data['other_doc'] = $other_doc;
            $this->db->where('id', $memberId)->update('members', $data);
            $this->response('status', true);
        }
    }
}

?>