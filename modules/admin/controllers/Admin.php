<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends MY_Controller
{
    function index()
    {
        $this->view('dashboard');
    }
    function change_password()
    {
        $this->view('change-password', ['isValid' => true]);
    }
    function sign_out()
    {
        // $this->view('change-password',['isValid' => true]);
        $this->session->sess_destroy();
        redirect('admin');
    }
    function profile()
    {
        $row = $this->center_model->get_verified([
            'id' => $this->center_model->loginId()
        ])->row_array() ?? [];
        $row['isValid'] = true;
        $this->view('profile', $row);
    }
    function add_donor()
    {
        $this->view('donors/add', ['isValid' => true]);
    }
    function donors_data()
    {
        $this->ki_theme->breadcrumb_action_html($this->ki_theme->outline_dashed_style('warning ')->add_action('<i class="fa fa-plus"></i> Add Donor', 'admin/add-donor'));
        $this->view('donors/list');
    }
    function donor_receipt()
    {
        $donorId = $this->uri->segment(3, 0);
        if ($donorId) {
            $myid = base64_decode($donorId);
            $this->view('donors/receipt', ['isValid' => true, 'donor' => $myid]);
        }
    }
    function manage_role_category()
    {
        $this->view('manage-role-category');
    }
    function test()
    {
        echo $this->ki_theme->wallet_balance();
    }
    function add_testimonial()
    {
        $id = 'testimonial';
        $this->ki_theme->breadcrumb_action_html($this->ki_theme->back_button('admin/list-testimonial', 'List', 'list'));
        $this->ki_theme->breadcrumb_action_html($this->ki_theme->drawer_button('page', $id, humanize($id)));

        $this->view('testimonial/add');
    }
    function list_testimonial()
    {
        $id = 'testimonial';
        $this->ki_theme->breadcrumb_action_html($this->ki_theme->back_button('admin/add-testimonial', 'Add', 'plus'));
        $this->ki_theme->breadcrumb_action_html($this->ki_theme->drawer_button('page', $id, humanize($id)));
        //      

        $this->view('testimonial/list');

    }
    function list_members()
    {
        $this->ki_theme->breadcrumb_action_html($this->ki_theme->drawer_button('form', 'member_apply_form', humanize('Set Member Apply')));
        $this->view('member/list-members');
    }
    function list_unverified_members()
    {
        $this->view('member/list-unverified-members');
    }
    function edit_member()
    {
        $this->access_method();
        $this->ki_theme->breadcrumb_action_html($this->ki_theme->back_button('admin/list-members', 'Go to List', 'list'));

        $this->view('member/edit-member');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }
}
