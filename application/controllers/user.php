<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(isset($_SESSION['user_logged']))
        {
            $this->session->set_flashdata("error","Please login first to view this page!!");

            redirect("Site/login");
        }
    }
    public function person()
    {
        $this->load->view("person");



        
    }
}