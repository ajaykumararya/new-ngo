<?php
// 9996763445
class Website extends Ajax_Controller
{
    function update_student_profile_image()
    {
        $this->_update_profile('students');
    }
    function membership_form()
    {
        if ($this->validation('membership_form')) {
            // $this->response('status','hii');
            $profile_photo = $this->file_up('profile','');
            $doc_file = $this->file_up('doc_file','');
            $other_doc = $this->file_up('other_doc','');
            $data = [
                'name' => $this->post('name'),
                'father_name' => $this->post('father_name'),
                'gender' => $this->post('gender'),
                'dob' => $this->post('dob'),
                'profession' => $this->post("profession"),
                'blood_group' => $this->post('blood_group'),
                'state_id' => $this->post('state_id'),
                'city_id' => $this->post('city_id'),
                'mobile' => $this->post("mobile"),
                'aadhar_no' => $this->post('aadhar_no'),
                'address' => $this->post('address'),
                'pincode' => $this->post('pincode'),
                'email' => $this->post('email'),
                'firm_name' => $this->post('firm_name'),
                'profile_img' => $profile_photo,
                'doc_type' => $this->post('doc_type'),
                'doc_file' => $doc_file,
                'other_doc' => $other_doc
            ];
            $this->db->insert('members', $data);
            $this->response('status', true);
            $this->response('member_id', $this->db->insert_id());
        }
    }
    function upload_gallery_image()
    {
        $this->response('data', $_FILES);
    }

    // Optional function to assign different colors for attendance status
    private function get_status_color($status)
    {
        switch ($status) {
            case '1':
                return '#28a745'; // Green
            case '4':
                return '#dc3545'; // Red
            case '3':
                return '#ffc107'; // Yellow
            default:
                return '#007bff'; // Default Blue
        }
    }
    private function _update_profile($table)
    {
        $this->response($_FILES);
        if ($file = $this->file_up('file')) {
            $this->response('status', true);
            $this->response('file', base_url('upload/' . $file));
            $this->db->update($table, [
                'image' => $file
            ], [
                'id' => $this->post('id')
            ]);
        }
    }

    function get_city($type = 'array')
    {
        $state_id = $this->input->post('state_id');
        $cities = $this->db->order_by('DISTRICT_NAME', 'ASC')->get_where('district', ['STATE_ID' => $state_id]);
        $returnCity = [];
        $options = '<option></option>';
        if ($cities->num_rows()) {
            $this->response('status', true);
            foreach ($cities->result() as $row) {
                $returnCity[$row->DISTRICT_ID] = $row->DISTRICT_NAME;
                $options .= '<option value="' . $row->DISTRICT_ID . '">' . $row->DISTRICT_NAME . '</option>';
            }
        }
        $this->response('html', $type == 'array' ? $returnCity : $options);
    }
    function test()
    {
        $this->response('ok', true);
    }

    function contact_us_action()
    {
        $this->response(
            'status',
            $this->db->insert('contact_us_action', $this->input->post())
        );

    }
    function enquiry_update_status()
    {
        $this->response(
            'status',
            $this->db->where('id', $this->post('id'))->update('contact_us_action', ['admin_message' => $this->post('value')])
        );
    }
    function ajax_timeline_load()
    {
        $this->response('status', true);
        $this->response('data', $this->parse('ajax/list-post', [], true));
    }
}
?>