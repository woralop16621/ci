<?php

class User extends Ci_Controller
{
    public function index()
    {
        $this->load->view('Home Page');
    }

    public function addUser()
    {
        $this->load->view('addUser');
    }
    // public function sayMyName($name = "Woralop", $name1 = "Mew")
    // {
    //     // $name = "Woralop Machatree";
    //     echo "Your Name Is : " . $name . "<br>";
    //     echo "Your sir Is : " . $name1;
    // }
}
