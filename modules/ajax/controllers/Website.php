<?php
// 9996763445
class Website extends Ajax_Controller
{
    function update_student_profile_image()
    {
        $this->_update_profile('students');
    }
    function upload_gallery_image(){
        $this->response('data',$_FILES);
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
    function ajax_timeline_load(){
        $this->response('status',true);
        $this->response('data',$this->parse('ajax/list-post',[],true));
    }
}
?>