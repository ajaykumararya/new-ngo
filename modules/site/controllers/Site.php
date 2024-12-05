<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Site extends Site_Controller
{
    public function index()
    {
        if ($this->isOK) {
            $this->render(
                'schema',
                $this->container()
            );
        } else
            $this->error_404();
    }
    function email()
    {
        $this->set_data([
            'name' => 'Ajay Kumar Arya',
            'mobile' => '456789'
        ]);
        echo $this->do_email('ajaykumararya963983@gmail.com', 'New Demo Checklist', $this->template('email/demo-query'));
    }

    function container()
    {
        $data = $this->pageData;
        $return = ['page_name' => $data['label'], 'content' => '', 'isPrimary' => (DefaultPage == $data['id'])];
        $pageSchema = $this->SiteModel->get_page_schema($data['id']);
        if ($pageSchema->num_rows()) {
            $html = '';
            foreach ($pageSchema->result() as $page) {
                switch ($page->event) {
                    case 'content':
                        $get = $this->SiteModel->page_content($page->page_id);
                        if ($get->num_rows()) {
                            if (file_exists(THEME_PATH . 'content.php'))
                                $html .= $this->parse('content', ['content' => $get->row('content')], true);
                            else
                                $html .= $get->row('content');
                        }
                        break;
                    case 'faculty_category':
                        if (file_exists(THEME_PATH . 'pages/' . $page->event . EXT))
                            $html .= $this->parse('pages/' . $page->event, [
                                'type' => $page->event_id
                            ], true);
                        break;
                    case 'page':
                        if (file_exists(THEME_PATH . 'pages/' . $page->event_id . EXT))
                            $html .= $this->parse('pages/' . $page->event_id, [
                                'type' => $page->event_id
                            ], true);
                        else if ($this->ki_theme->view_exists('cms', 'pages/' . $page->event_id)) {
                            $html .= $this->parse('cms/pages/' . $page->event_id, [], true);
                        } else {
                            if ($page->event_id == 'notice-board' && !$return['isPrimary']) { // this for theme3
                                $this->set_data('notice_board', true);
                            }
                        }
                        break;
                    case 'image_gallery':
                        if (file_exists(THEME_PATH . 'pages/' . $page->event . EXT)) {
                            $this->set_data('gallery', $this->db->get('gallery_images')->result_array());
                            $html .= $this->parse('pages/' . $page->event, [], true);
                        }
                        break;
                    case 'form':
                        if (!(CHECK_PERMISSION('CO_ORDINATE_SYSTEM') && $page->event_id == 'student_admission'))
                            $html .= $this->parse('form/' . $page->event_id, [], true);
                        break;
                }
            }
            // exit;
            $return['content'] = $html . "\n" . $this->parser->parse('default_content', $this->public_data, true);
        }
        return array_merge($this->public_data, $return);
    }
    function error_404()
    {
        $error_file = 'error_404';
        $this->set_data('title', 'Page Not Found');
        $this->set_data('page_name', '404');
        $file = (file_exists(THEME_PATH . $error_file . EXT)) ? '' : 'default_'; //error_404';
        $this->render("{$file}{$error_file}");
    }
    function page_view($content, $data = [])
    {
        $this->set_data($data);
        $this->render($content, 'content');
        // pre($this->public_data,true);
    }
    function view_post()
    {
        $event_id = $this->input->get_post('Event_id');
        if ($event_id) {
            $get = $this->db->where('timeid', $event_id)->get('posts');
            if ($get->num_rows()) {
                $data = $get->row_array();
                // pre($data,true);
                $this->set_data('page_name','View Post');
                $this->render('pages/view-post',$data);
            } else
                $this->error_404();
        } else
            $this->error_404();
    }
}
