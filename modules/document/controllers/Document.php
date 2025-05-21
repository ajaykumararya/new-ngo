<?php
class Document extends MY_Controller
{
    private $id;
    private $return = false;
    function __construct()
    {
        parent::__construct();
        $this->load->library('common/mypdf');
        $this->load->model('member_model');
        $this->id = base64_decode($this->uri->segment(2, '0'));
    }
    function id($id, $return = true)
    {
        $this->id = $id;
        $this->return = $return;
        return $this;
    }
    function id_card()
    {
        // echo $this->id;
        $get = $this->member_model->get_verified_member(['id' => $this->id]);
        if ($get->num_rows()) {
            // pre($get->row(), true);
            $this->set_data($get->row_array());

            $row = $get->row();
            // pre($row,true);
            $pdfContent = $this->parse('id-card');
            $this->pdf($pdfContent, $row->name . '-id-card.pdf');
        } else {
            $this->not_found("Id Card Not Found..");
        }
    }
    function print_membership()
    {
        // echo $this->id;
        $get = $this->member_model->get_verified_member(['id' => $this->id]);
        if ($get->num_rows()) {
            // pre($get->row(), true);
            $this->set_data($get->row_array());

            $row = $get->row();

            $pdfContent = $this->parse('membership');
            $this->pdf($pdfContent, $row->name . '-membership.pdf');
        } else {
            $this->not_found("Member Not Found..");
        }
    }
    function certificate()
    {
        $get = $this->member_model->get_verified_member(['id' => $this->id]);
        if ($get->num_rows()) {
            // pre($get->row(), true);
            $this->set_data($get->row_array());

            $row = $get->row();

            $pdfContent = $this->parse('certificate');
            $this->pdf($pdfContent, $row->name . '-certificate.pdf');
        } else {
            $this->not_found("Certificate is not found..");
        }
    }
    function appoinment_letter()
    {
        $get = $this->member_model->get_verified_member(['id' => $this->id]);
        if ($get->num_rows()) {
            // pre($get->row(), true);
            $this->set_data($get->row_array());

            $row = $get->row();

            $pdfContent = $this->parse('appoinment-letter');
            $this->pdf($pdfContent, $row->name . '-appoinment-letter.pdf');
        } else {
            $this->not_found("Appoinment Letter is not found..");
        }
    }
    function pdf($pdfContent, $filename = 'my-pdf.pdf')
    {
        $this->mypdf->WriteHTML($pdfContent);
        $filename = str_replace('.pdf', '', $filename);
        $pdfData = $this->mypdf->Output("{$filename}.pdf", 'I');
    }
    function not_found($message = '')
    {
        echo '<script>
                alert("' . $message . '");
                window.close();
            </script>';
    }
}