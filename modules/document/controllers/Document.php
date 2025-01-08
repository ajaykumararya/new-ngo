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
    function print_membership(){
        // echo $this->id;
        $get = $this->member_model->get_verified_member(['id'=>$this->id]);
        if ($get->num_rows()) {
            // pre($get->row(), true);
            $this->set_data($get->row_array());

            $row = $get->row();
            
            $pdfContent = $this->parse('membership');
            if (in_array(PATH, ['vmbindia'])) {
                $this->mypdf->addPage('L');
            }
            $this->pdf($pdfContent,  $row->name . '-membership.pdf');
        } else {
            $this->not_found("Member Not Found..");
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