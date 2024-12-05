<?php
class Post extends Admin_Controller{
    function  add_post(){
        $this->view('add');
    }
    function list(){
        $this->view('list');
    }
}
?>