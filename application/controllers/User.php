<?php

class User extends Ci_Controller
{
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('user/user');
        $this->load->view('layout/footer');
    }
    public function adduser(){
        $this->load->view('layout/header');
        $this->load->view('user/adduser');
        $this->load->view('layout/footer');
    }
}